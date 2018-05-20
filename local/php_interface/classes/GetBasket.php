<?php
/**
 * Created by PhpStorm.
 * User: ASDAFF
 * Date: 20.05.2018
 * Time: 18:10
 */

class GetBasket
{

    // for Basket
    function getBasketData()
    {
        $result = array();
        $dbBasketItems = CSaleBasket::GetList(
            array(),
            array(
                "FUSER_ID" => CSaleBasket::GetBasketUserID(),
                "LID" => SITE_ID,
                "ORDER_ID" => "NULL"
            ),
            false,
            false,
            array()
        );
        while ($arItem = $dbBasketItems->Fetch()) {
            $db_res = CSaleBasket::GetPropsList(
                array("SORT" => "ASC", "NAME" => "ASC"),
                array("BASKET_ID" => $arItem["ID"])
            );
            while ($prop = $db_res->Fetch()) {
                $arItem["PROPERTIES"][$prop["CODE"]] = $prop["VALUE"];
            }
            $result[$arItem["PRODUCT_ID"]] = $arItem;
        }
        return $result;
    }

    function getBasketSum()
    {
        $sum = 0;
        $items = self::getBasketData();
        foreach ($items as $arItem) {
            $sum += $arItem["PRICE"] * $arItem["QUANTITY"];
        }
        return $sum;
    }

    function btnBasketName($id, $ar, $sale = false)
    {
        $res = array("Купить", "Товар в корзине");
        if ($sale) $res[0] = "Купить по акции";
        if ($ar[$id]) {
            $res = array_reverse($res);
            $res["added"] = "btn-second";
        }
        return $res;
    }

}
