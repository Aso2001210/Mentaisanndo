# DB定義書
## ER図
[ER図はこちら]()

# DBテーブルカラム一覧

# データベース設計図

## カテゴリーマスタ(category)

|和名|属性名(カラム名)|型|PK|NN|FK|
|---|-----|--|--|--|--|
|カテゴリーID|category_id|int(10)|○|○||
|カテゴリー名|category_name|varchar(20)|○|○||
|登録日|reg_date|datetime||○||

## お土産マスタ(omiyage)

|和名|属性名(カラム名)|型|PK|NN|FK|
|---|-----|--|--|--|--|
|お土産コード|omiyage_code|int(10)|○|○||
|お土産名|omiyage_name|varchar(100) ||○||
|価格|price|int(10)||○||
|カテゴリーID|category_id|int(10)|○|○||
|画像|image|varchar(200)||||
|登録日|reg_date|datetime||○||

## 観光地マスタ(kankouti)

|和名|属性名(カラム名)|型|PK|NN|FK|
|---|-----|--|--|--|--|
|観光地コード|kankouti_code|int(10)|○|○||
|観光地名|kankouti_name|varchar(100)||○||
|画像|image|varchar(500)||○||
|カテゴリーID|category_id|varchar(10)|○|○||
|登録日|reg_date|datetime||○||
