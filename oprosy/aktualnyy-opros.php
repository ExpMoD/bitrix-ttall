<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Актуальный опрос");
?><?$APPLICATION->IncludeComponent(
	"bitrix:voting.current",
	"",
	array(
	"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHANNEL_SID" => "TESTOVIE_OPROSI",	// Группа опросов
		"VOTE_ALL_RESULTS" => "N",	// Показывать варианты ответов для полей типа Text и Textarea
		"VOTE_ID" => "1",	// ID опроса
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>