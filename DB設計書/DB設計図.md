# データベース設計図

## category

|項目名|型|PK|NN|FK|
|-----|--|--|--|--|
|category_id|int(10)|○|○||
|category_name|varchar(20)|○|○||
|reg_date|datetime||○||

## omiyage

|項目名|型|PK|NN|FK|
|-----|--|--|--|--|
|omiyage_code|int(10)|○|○||
|omiyage_name|varchar(100) ||○||
|price|int(10)||○||
|category_id|int(10)||○|○|
|image|varchar(200)||○||
|reg_date|datetime||○||

## kankouti

|項目名|型|PK|NN|FK|
|-----|--|--|--|--|
|kannkouti_code|int(10)|○|○||
|kankouti_name|varchar(100)||○||
|image|varchar(500)||○||
|category_id|int(10)||○|○|
|reg_date|datetime||○||
