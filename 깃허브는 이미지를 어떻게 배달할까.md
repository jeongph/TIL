- 마크다운 편집기 (에디터) 에 직접 이미지 첨부가 가능함 (copy & paste) 

<img width="74" alt="image" src="https://github.com/jeongph/TIL/assets/13309303/a53e5b97-aa38-4223-8220-7328da11f634">

- 첨부된 주소를 보면 `https://github.com/jeongph/TIL/assets/13309303/a53e5b97-aa38-4223-8220-7328da11f634` 인것을 알 수 있다 (해당 레포임)
- 근데 레포엔 assets 라는 폴더가 없음 (만들어지지도 않았지만, 사진은 보임)

<img width="1111" alt="image" src="https://github.com/jeongph/TIL/assets/13309303/6c227254-b77a-4f3a-8c17-8a9e6f3a0512">

- 실제로 해당 루트주소로 접근해보면, 404 가 떨어짐 

<img width="634" alt="image" src="https://github.com/jeongph/TIL/assets/13309303/4ad4db61-483f-4ebb-ab8c-3a36673d5438">

- 실제 로직은 assets 업로드 -> 이미지 업로드 완료 피드백 -> 이미지 관련 링크 에디터에 첨부 로 이루어짐을 볼 수 있다

Q) Notion 으로 작성해서 옮긴다면, 이미지를 도대체 어떻게 해야할까 ..
