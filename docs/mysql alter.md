MySQL alter 명령어 정리(중)

``` sql
ALTER TABLE table ADD COLUMN a varchar(255) NOT NULL;

ALTER TABLE table MODIFY COLUMN a varchar(255) NULL;

ALTER TABLE table CHANGE COLUMN a b varchar(255) NULL;

ALTER TABLE table DROP COLUMN a;

ALTER TABLE table RENAME table2;
```
