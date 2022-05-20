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
  }
    entity "カテゴリーマスタ" as customer <m_customers> <<M,MASTER_MARK_COLOR>> {
        + category_id [PK]
        + category_name [PK]
        --
        reg_date
    }
    
    entity "購入テーブル" as order <order> <<T,TRANSACTION_MARK_COLOR>> {
        + omiyage_code [PK]
        --
        omiyage_name
        price
        # category_id [FK]
        image
        reg_date
    }
    
    entity "購入詳細テーブル" as order_detail  <order_detail> <<T,TRANSACTION_MARK_COLOR>> {
        + kankouti_code[PK]
        --
        kankouti_name
        image
        # category_id [FK]
        reg_date
    }
  }
  
  customer       |o-ri-o{     order
order          ||-ri-|{     order_detail
order_detail    }-do-||     items
items          }o-le-||     category


@enduml
