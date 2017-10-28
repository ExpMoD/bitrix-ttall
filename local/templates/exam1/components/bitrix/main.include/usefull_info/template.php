<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if($arResult["FILE"] <> ''):
    $fileContent = file_get_contents($arResult["FILE"]);
?>
    <?if ($fileContent):?>
        <div class="side-block side-anonse">
            <div class="title-block"><span class="i i-title01"></span><?=GetMessage('USEFULL_INFO')?></div>
            <div class="item">
                <p>
                    <?include($arResult["FILE"]);?>
                </p>
            </div>
        </div>
	<?endif;?>
<?endif;?>