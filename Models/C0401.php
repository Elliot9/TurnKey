<?php
namespace Models;
use Models\Role\Buyer;
use Models\Role\Seller;

class C0401 {

    /**
     * 發票號碼
     */
    private $invoiceNumber;

    /**
     * 列印時間
     */
    private $printTime;

    /**
     * 賣家
     */
    private Seller $seller;

    /**
     * 買家
     */
    private Buyer $buyer;

    /**
     * 格式 統編25
     */
    private $fixtext;

    /**
     * (可省) 發票檢查碼 電子發票不填，傳統發票必填P
     */
    private $checkNumber;


    /**
     *  (可省) 買受人註記欄
     *  1：得抵扣之進貨及費用
     *  2：得抵扣之固定資產
     *  3：不得抵扣之進貨及費用
     *  4：不得抵扣之固定資產
    */
    private $buyerRemark;

    /**
     * (可省) 總備註 本欄位應依稅法或其他規定填列應載明事項
     */
    private $mainRemark;

    /**
     *  (可省) 買受人註記欄
     *  1：非經海關出口
     *  2：經海關出口(若為零稅率發票，此為必填欄位)
     */
    private $customsClearanceMark;

    /**
     * (可省) 沖帳別
     */
    private $category;

    /**
     * (可省) 相關號碼
     */
    private $relateNumber;

    /**
     * 發票類別
     * 07：一般稅額計算之電子發票
     * 08：特種稅額計算之電子發票
    */
    private $invoiceType;

    /**
        (可省) 彙開註記 以 * 表示 彙開
     */
    private $groupMark;

    /**
     * 捐贈註記
     *   0：非捐贈發票
     *   1：捐贈發票 境外電商營業人可選擇提供買受人於交易前或交易時以捐贈碼索取雲端發票，參閱註。
     */
    private $donateMark;

    /**
     *   (可省) 載具類別號碼
     *   載具類別號碼為6碼，共通性載具類別號碼如下：
     *   1. 手機條碼為3J0002
     *   2. 自然人憑證條碼為CQ0001
     *   境外電商營業人：
     *   • 依照統一發票使用辦法
     *   第 7-1 條第 2 款規定「本
     *   法第 6 條第 4 款所定營
     *   業人應開立雲端發票交
     *   付買受人」
     *   • 應提供買受人以財政部
     *   核准之跨境電商電子郵
     *   件載具(即消費者之電
     * 子郵件信箱)索取雲端
     *  發票，填入載具類別號
     *  碼為：5G0001
     * 可選擇提供買受人以共
     *  通性載具索取雲端發票
    */
    private $carrierType;

    /**
     *  (可省) 載具顯碼 id
     *   填入載具外顯碼號碼，卡片上載列之卡片號碼資訊
     *   若載具類別為信用卡，填入刷卡日期(民國年月日共 7 碼)及刷卡交易金額(10 碼，不足位左補 0)
     *   資訊若電子發票證明聯已列印註記為 Y，此欄位必須為空白；
     *   若此欄位非空白，則電子發票證明聯已列印註記必須為 N。
     *   消費者使用手機條碼索取(含要求登載買方統編發票)，則不論是否已列印紙本皆為必填前後不允許空白及全形空白
     */
    private $carrierId1;

    /**
     * (可省) 載具隱碼 id
     *   填入載具內碼號碼，營業人應載入讀取工具所讀取之原始資訊
     *   若載具類別為信用卡，填入信用卡加密卡號
     *   若電子發票證明聯已列印註記為 Y，此欄位必須為空白；
     *   若此欄位非空白，則電子發票證明聯已列印註記必須為 N
     *   消費者使用手機條碼索取(含要求登載買方統編發票)，則不論是否已列印紙本皆為必填前後不允許空白及全形空白
     */
    private $carrierId2;

    /**
     * 電子發票證明聯已列印註記
     * PrintMark 為 Y 時載具類別號碼，載具顯碼 ID，載具隱碼 ID 必須為空白，捐贈註記必為 0
     * 消費者使用手機條碼索取(含要求登載買方統編發票)，則不論是否已列印紙本，其載具類別號碼、載具顯碼 ID 和載具隱碼 ID 皆為必填
     */
    private $printMark;

    /**
     * (可省)發票捐贈對象
     * B2B 交易填入買方/賣方營業人統一編號
     * B2C 交易賣方填入統一編號/買方則填入 10 個"0"
    */
    private $npoban;

    /**
     * 發票防偽隨機碼
     * 交易當下隨機產生，4 位數值，少於 4 位者踢退
     */
    private $randomNumber;

    /**
     *  應稅銷售額合計
     * 一、整數(小數點以下四捨五入)
     * 二、境外電商營業人如以外幣列示，小數點後至多 2位。如以新臺幣列示應為整數(小數點以下四捨五入)
     * 三、若無此交易則填 0
     * 請注意銷售額合計不應為負數
    */
    private $salesAmount;

    /**
     * 免稅銷售額合計
     * 一、以新臺幣列示應為整數(小數點以下四捨五入)
     * 二、若無此交易則填 0
     * 請注意銷售額合計不應為負數
     */
    private $freeTaxSalesAmount;

    /**
     *  零稅率銷售額合計
     *  一、以新臺幣列示應為整數(小數點以下四捨五入)
     *  二、若無此交易則填 0
     *  *請注意銷售額合計不應為負數
     */
    private $ZeroTaxSalesAmount;

    /**
     *  課稅別
     *  1：應稅
     *  2：零稅率
     *  3：免稅
     *  4：應稅(特種稅率)
     *  9：混合應稅與免稅或零稅率(限訊息 C0401 使用)
    */
    private $TaxType;

    /**
     *  稅率
     *  範例：稅率為 5%時本欄位值為 0.05
     */
    private $TaxRate;

    /**
     *  營業稅額
     *  以新臺幣列示應為整數(小數點以下四捨五入)
     */
    private $TaxAmount;

    /**
     *   總計
     *   一、整數
     *   二、境外電商營業人如以外幣列示，小數點後至多 2位。如以新臺幣列示應為整數
     *   *請注意此項總計不應為負數
     */
    private $TotalAmount;


    /**
     *   (可省) 折扣金額
     *   一、整數
     *   供營業人備註以便內部查看交易折扣註記使用
     */
    private $DiscountAmount;

    /**
     *   (可省) 原幣金額
     *   供營業人備註使用
     */
    private $OriginalCurrencyAmount;

    /**
     *   (可省) 匯率
     *  供營業人備註使用
     */
    private $ExchangeRate;

    /**
     *   (可省) 幣別
     *   供營業人備註使用
     *   境外電商營業人為必填
     *   若單價、金額及總計以新臺幣列示，則填入 TWD；若以外幣列示，則填入幣別碼
     */
    private $Currency;

}

?>