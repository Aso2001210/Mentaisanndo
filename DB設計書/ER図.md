```
@startuml

skinparam class {
    '図の背景
    BackgroundColor Snow
    '図の枠
    BorderColor Black
    'リレーションの色
    ArrowColor Black
}

!define MASTER_MARK_COLOR Orange 
!define TRANSACTION_MARK_COLOR DeepSkyBlue

package "ECサイト" as target_system {
    /'
      マスターテーブルを M、トランザクションを T などで表記
      １文字なら "主" とか "従" まど日本語でも記載可能
     '/

    entity "カテゴリーマスタ" as category <category> <<M,MASTER_MARK_COLOR>> {
        + customer_code [PK]
        + category_name [PK]
        --
        reg_date
    }
    
    entity "お土産マスタ" as omiyage <omiyage> <<T,TRANSACTION_MARK_COLOR>> {
        + omiyage_code [PK]
        --
        # kategory_id [FK]
        omiyage_name
        price
        main_image
        reg_date
        image_1
        image_2
        image_3
        image_4
        link
    }
    
    entity "観光地マスタ" as kankouti  <kankouti> <<T,TRANSACTION_MARK_COLOR>> {
        + kankouti_code [PK]
        --
        # category_id [FK]
        kankouti_name
        main_image
        reg_date
        image_1
        image_2
        image_3
        image_4
        link
    }
    
    entity "お気に入りマスタ" as okiniiri  <okiniiri> <<T,TRANSACTION_MARK_COLOR>> {
        + kankouti_code [PK]
        --
        # category_id [FK]
        kankouti_name
        main_image
        reg_date
        image_1
        image_2
        image_3
        image_4
        link
    }
    
}
category      |o-ri-o{     omiyage
kankouti        ||-ri-|{     okiniiri
@enduml
```
