``` java
@Entity(name = "case_reports")
@EntityListeners(AuditingEntityListener::class)
class CaseReportEntity(_case: CaseEntity? = null) {
    @Id
    var no = 0L

    @Transient
    lateinit var case: CaseEntity

    init {
        if (_case != null) {
            this.no = _case.no
            this.case = _case
        }
    }

    @Audited
    var observer1 = 0L

    @Audited
    var observer2 = 0L

    @Audited
    var reporter = 0L

    @Audited
    @Column(length = 255)
    var karyotype = ""

    @Audited
    var karyotyper = 0L

    @Audited
    var karyotypedAt: LocalDateTime? = null

    @Audited
    @Lob
    @Column(columnDefinition = "text")
    var interpretation = ""

    @CreatedDate
    var createdAt = Constant.EMPTY_LOCAL_DATETIME

    @LastModifiedDate
    var updatedAt = Constant.EMPTY_LOCAL_DATETIME

    @PrePersist
    @PreUpdate
    fun sanitize() {
        karyotype = Jsoup.clean(karyotype, Whitelist.simpleText())
        interpretation = Jsoup.clean(interpretation, Whitelist.relaxed())
    }
}
```
