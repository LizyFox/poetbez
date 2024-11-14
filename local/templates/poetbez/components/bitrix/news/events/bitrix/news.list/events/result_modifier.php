<?php

$current_date = strtotime(date('Y-m-d H:i:s'));

foreach ($arResult["ITEMS"] as $arItem) {
    if ($current_date <= (strtotime($arItem['ACTIVE_TO']))) {
        $arResult['NEXT_EVENT'][] = $arItem;
    } else {
        $arResult['PREV_EVENT'][] = $arItem;
    }
}