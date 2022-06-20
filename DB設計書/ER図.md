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

entity "おすすめマスタ" as recommendation <recommendation> <<T,TRANSACTION_MARK_COLOR>> {
        + id [PK]
        --
        name
        image
        reg_date
    }
    
    entity "グルメマスタ" as gurume <gurume> <<T,TRANSACTION_MARK_COLOR>> {
        + id [PK]
        --
        name
        image
        reg_date
    }
    
    entity "お土産マスタ" as souvenir <souvenir> <<T,TRANSACTION_MARK_COLOR>> {
        + id [PK]
        --
        name
        image
        reg_date
    }
    
    entity "トップページマスタ" as top_page  <top_page> <<M,MASTER_MARK_COLOR>> {
        + name [PK]
        --
        summary
        main_image
        link1
        link2
        image
        image2
        image3
    }
     entity "観光地マスタ" as tourist_list <tourist_list> <<T,TRANSACTION_MARK_COLOR>> {
        + id [PK]
        --
        name
        image
        reg_date
    }
    
}
recommendation     ||-ri-|{     top_page
top_page           }|-ri-||     tourist_list
souvenir           ||-u-|{      top_page
gurume           ||-u-|{      top_page
@enduml
```
