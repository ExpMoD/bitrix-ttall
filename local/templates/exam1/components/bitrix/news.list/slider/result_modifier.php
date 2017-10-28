<?php



foreach ($arResult["ITEMS"] as $key => $arItem) {
    if (is_array($arItem['PREVIEW_PICTURE'])) {
        $newImg = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], ["width" => 39, "height" => 39]);

        $arResult["ITEMS"][$key]['PREVIEW_PICTURE']['SRC'] = $newImg['src'];
    }
}

return $arResult;
