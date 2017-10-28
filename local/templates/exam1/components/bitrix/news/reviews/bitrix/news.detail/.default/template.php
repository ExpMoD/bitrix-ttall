<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>

<hr>

<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
            <?=$arResult['DETAIL_TEXT']?>
		</div>
		<div class="review-autor">
            <?=$arResult['NAME']?>,
            <?=$arResult['DISPLAY_ACTIVE_FROM']?> г.,
            <?=$arResult['PROPERTIES']['POSITION']['VALUE']?>,
            <?=$arResult['PROPERTIES']['COMPANY']['VALUE']?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
        <?if (is_array($arResult["DETAIL_PICTURE"])):?>
			<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="img">
        <?else:?>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg" alt="img">
        <?endif;?>
	</div>
</div>
<?if (is_array($arResult['PROPERTIES']['DOCS']['VALUE'])):?>
	<div class="exam-review-doc">
		<p><?=GetMessage('DOCUMENTS')?>:</p>
        <?foreach ($arResult['PROPERTIES']['DOCS']['VALUE'] as $doc):?>
            <?$file = CFile::GetFileArray($doc)?>
			<div class="exam-review-item-doc">
				<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
				<a href="<?=$file['SRC']?>"><?=$file['ORIGINAL_NAME']?></a>
			</div>
        <?endforeach;?>
	</div>
<?endif;?>
<hr>
<a href="<?=$arResult['LIST_PAGE_URL']?>" class="review-block_back_link"> &larr; <?=GetMessage('TO_LIST_REWS')?></a>