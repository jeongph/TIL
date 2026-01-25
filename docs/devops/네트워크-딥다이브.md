# Home Network, NAS, Reverse Proxy, Cloudflare Tunnel 정리

---

# 1. IP 주소, DNS, DDNS

## 1.1 IP 주소는 어떻게 찾아오는가?

인터넷은 **DNS(Domain Name System)** 계층 구조를 통해 도메인을 실제 IP 주소로 변환한다.

* Root DNS → TLD(.com, .net, .me) → Authoritative DNS(Cloudflare) 순서로 조회
* DNS 기록에서 도메인 → IP 주소를 얻음

## 1.2 DDNS(Dynamic DNS)

ISP로부터 공인 IP가 바뀌는 환경에서 도메인에 자동으로 IP를 업데이트하는 “동적 DNS”.

* 직접 연결 방식 → NAS가 인터넷에 직접 노출됨
* SMB/SSH/NFS/FTP 등 모든 네이티브 프로토콜 사용 가능
* 속도 최상, 구조 단순, 엔터프라이즈 표준 방식

---

# 2. 공인 IP / 사설 IP / NAT / CGNAT

## 2.1 공인 IP가 집에서 직접 오는가?

반드시 그렇지는 않다.

* 한국 ISP 대부분은 **공유기/모뎀 → NAT → 사설 IP** 구조
* WAN IP와 Google "What is my IP" 비교로 확인

  * 같음 → 공인 IP
  * 다름 → 사설 IP(CGNAT)

## 2.2 NAT(Network Address Translation)

사설망(192.168.x.x 등)과 공인망을 서로 변환하는 기술.

* 가정 공유기는 NAT을 수행함
* 하나의 공인 IP로 내부 여러 장치를 운영 가능

## 2.3 NAT Loopback

내부(LAN)에서 외부 도메인을 입력해도 다시 내부 서버로 접근 가능하게 해주는 기능.

* 좋은 공유기 대부분 지원
* ISP 제공 공유기는 미지원이 많음

---

# 3. LAN / WAN / Split DNS

## 3.1 LAN (Local Area Network)

집 내부 네트워크.

## 3.2 WAN (Wide Area Network)

외부 인터넷.

## 3.3 Split DNS

동일 도메인에 대해 LAN/WAN 환경에 따라 서로 다른 IP를 제공하는 DNS 기술.

* 외부: nas.jeonguk.me → 공인 IP
* 내부: nas.jeonguk.me → 192.168.x.x

엔터프라이즈는 보안·망 분리·속도 때문에 NAT Loopback이 아닌 Split DNS 사용.

---

# 4. Reverse Proxy(리버스 프록시)

## 4.1 가정 NAS의 Reverse Proxy

Synology DSM은 NGINX 기반 Reverse Proxy를 내장.

* 80/443 포트만 NAS로 포워딩하면 외부 트래픽을 도메인별로 내부 서비스로 라우팅
* 별도 설치 필요 없음

## 4.2 Reverse Proxy가 여러 대 가능할까?

불가능.

* 하나의 외부 포트(443)는 내부 장비 하나에만 포워딩 가능
* 둘 이상의 Reverse Proxy가 동일 포트를 외부에서 받을 수 없음

---

# 5. Load Balancer(로드 밸런서)

## 5.1 Load Balancer란?

트래픽을 여러 서버로 나누는 역할.

* 고가용성(HA)
* 성능 확장(Scale-out)

## 5.2 집에서는 불가능한 이유

Load Balancer는 "공인 IP"를 직접 받아야 한다.

* 가정에서는 공인 IP가 반드시 ISP 공유기에 귀속
* 내부 서버가 공인 IP를 직접 받을 수 없어서 LB 위치가 존재하지 않음

그래서 집에서는 F5/AWS ALB 같은 "프론트 LB" 설치 자체가 불가능.

---

# 6. MetalLB와 일반 LB의 차이

## 6.1 MetalLB

Kubernetes 내부에 존재하는 **내부망용 Load Balancer**.

* 공인 IP 사용 X
* 내부 가상 IP 제공
* 클러스터 내부 Reverse Proxy(Ingress) POD로 트래픽 분산

## 6.2 결론

MetalLB는 "내부망 LB"이며, 인터넷 전체를 처리하는 외부 LB와 개념이 다르다.

---

# 7. Cloudflare Tunnel

## 7.1 작동 방식

NAS의 cloudflared → Cloudflare 엣지에 먼저 연결을 열어둔다.
외부 사용자는 Cloudflare를 통해 NAS에 접속.

## 7.2 장점

* 포트포워딩 불필요
* 공인 IP 불필요
* ISP 사설IP/CGNAT도 동작
* 보안 최상(WAF, TLS, Zero Trust)

## 7.3 단점

* SMB/SSH/FTP 등 비HTTP 프로토콜은 제한적
* Cloudflare 의존

---

# 8. DDNS + Cloudflare Tunnel + Reverse Proxy 하이브리드 구조

## 8.1 웹 서비스(DSM/Drive/Photos)

→ Cloudflare Tunnel로 접속
→ 보안 최상, 포트포워딩 없음

## 8.2 내부망/대용량/SMB/SSH

→ DDNS 또는 LAN directly
→ 속도 최상, 안정성 최고

## 8.3 Reverse Proxy

→ 터널/직접 연결 양쪽 모두에서 서비스 분기 가능

---

# 9. Kubernetes + NGINX Ingress + MetalLB 구조

## 9.1 구성 요소

* **Kubernetes**: 복수 서버를 하나의 클러스터처럼 운영
* **NGINX Ingress Controller**: K8s Reverse Proxy 역할
* **MetalLB**: 클러스터 내부 LB 역할(가상 IP 제공)

## 9.2 흐름 구조

```
인터넷
 ↓
공유기(포트포워딩)
 ↓
MetalLB(가상 IP)
 ↓      ↓
Nginx Ingress Pod A   Nginx Ingress Pod B
 ↓
백엔드 서비스들
```

## 9.3 특징

* Reverse Proxy 다중화 → 장애시 자동 Failover
* MetalLB가 LB 역할 → 하나의 가상 IP 사용 가능
* 엔터프라이즈급 HA 아키텍처

---

# 10. Traefik vs NGINX Ingress

## 10.1 NGINX Ingress

* 엔터프라이즈 표준
* 고성능/고안정성
* 세밀한 설정 가능

## 10.2 Traefik

* 설정 간단
* 자동 인증서(Let's Encrypt)
* 개발자·개인 서버에 좋음

## 10.3 선택 기준

* 기업/복잡한 Reverse Proxy → NGINX
* 개인/홈랩/간단 구성 → Traefik

---

# 11. 엔터프라이즈는 왜 Split DNS를 반드시 쓰나?

* 망분리(내부망 vs 외부망)
* 내부 트래픽이 외부로 나갔다 다시 들어오는 비효율 제거
* 내부망은 내부 IP로 직접 연결해야 속도와 보안 극대화

즉, NAT Loopback은 보조적인 편의 기능이고,
엔터프라이즈는 Split DNS를 통해 네트워크 정책을 완전 통제한다.

---

# 12. 전체 구조 흐름 요약

## 12.1 집에서의 완전체 설계

* 외부 웹 서비스 → Cloudflare Tunnel
* 내부 대용량/SMB/SSH → DDNS 또는 LAN
* 내부 외부 동일 도메인 → NAT Loopback 또는 Split DNS
* 서비스 분기 → NAS Reverse Proxy

## 12.2 엔터프라이즈 구조 요약

```
사용자
 ↓
(공인 IP)
 ↓
Load Balancer(L4/L7)
 ↓             ↓
Reverse Proxy A  Reverse Proxy B
 ↓
Backend 서비스들
 ↓
내부망(Split DNS)
```

---

# 끝

이 문서는 가정 네트워크와 엔터프라이즈 네트워크의 구조적 차이,
Cloudflare Tunnel·DDNS·Reverse Proxy·Load Balancer·Kubernetes 등의 개념을 정리한 레퍼런스 문서입니다.

