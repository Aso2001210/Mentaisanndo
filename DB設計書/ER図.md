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

    entity "カテゴリーマスタ" as customer <category> <<M,MASTER_MARK_COLOR>> {
        + customer_code [PK]
        + category_name [PK]
        --
        reg_date
    }
    
    entity "お土産マスタ" as order <omiyage> <<T,TRANSACTION_MARK_COLOR>> {
        + omiyage_code [PK]
        --
        # kategory_id [FK]
        omiyage_name
        price
        image
        reg_date
    }
    
    entity "観光地マスタ" as order_detail  <kankouti> <<T,TRANSACTION_MARK_COLOR>> {
        + kankouti_code [PK]
        --
        # category_id [FK]
        kankouti_name
        image
        reg_date
    }
  }
  
         |o-ri-o{     
order          ||-ri-|{     order_detail
order_detail    }-do-||     items
         }o-le-||     


@enduml
```
