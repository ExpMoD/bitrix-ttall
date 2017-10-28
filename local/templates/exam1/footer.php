<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>
</div>
<!-- /content -->
<!-- side -->
<div class="side">
	<!-- side menu -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "left",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "left",
            "USE_EXT" => "Y",
            "COMPONENT_TEMPLATE" => "left"
        ),
        false
    );?>
    <!-- /side menu -->
    <!-- side anonse -->
    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"usefull_info", 
	array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => "usefull_info"
	),
	false
);?>
    <!-- /side anonse -->
    <!-- side wrap -->
    <div class="side-wrap">
        <div class="item-wrap">
            <!-- side action -->
            <div class="side-block side-action">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action-bg.jpg" alt="" class="bg">
                <div class="photo-block">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action.jpg" alt="">
                </div>
                <div class="text-block">
                    <div class="title">Акция!</div>
                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                    </p>
                </div>
                <a href="" class="btn-more">подробнее</a>
            </div>
            <!-- /side action -->
        </div>

        <!-- footer rew slider box -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "slider",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "5",
                "IBLOCK_TYPE" => "rews",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "2",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "POSITION",
                    1 => "COMPANY",
                    2 => "",
                ),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "NAME",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => "slider"
            ),
            false
        );?>
        <!-- / footer rew slider box -->

    </div>
    <!-- /side wrap -->
</div>
<!-- /side -->
</div>
<!-- /content box -->
</div>
<!-- /page -->
<div class="empty"></div>
</div>
<!-- /wrap -->
<!-- footer -->
<footer class="footer">
    <div class="inner-wrap">
	    <nav class="main-menu">
		    <div class="item">
			    <div class="title-block">О магазине</div>
			    <ul>
				    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "bottom"
                        ),
                        false
                    );?>
			    </ul>
		    </div>

		    <div class="item">
			    <div class="title-block">Каталог товаров</div>
			    <ul>
				    <li><a href="">Кухни</a>
				    </li>
				    <li><a href="">Гарнитуры</a>
				    </li>
				    <li><a href="">Спальни и матрасы</a>
				    </li>
				    <li><a href="">Столы и стулья</a>
				    </li>
				    <li><a href="">Раскладные диваны</a>
				    </li>
				    <li><a href="">Кресла</a>
				    </li>
				    <li><a href="">Кровати и кушетки</a>
				    </li>
				    <li><a href="">Тумобчки и прихожие</a>
				    </li>
				    <li><a href="">Аксессуары</a>
				    </li>
				    <li><a href="">Каталоги мебели</a>
				    </li>
			    </ul>
		    </div>
	    </nav>
        <div class="contacts-block">
            <div class="title-block"><?=GetMessage('CONTACT_INFO')?></div>
            <div class="loc-block">
                <div class="address">ул. Летняя, стр.12, офис 512</div>
                <div class="phone">
	                <a href="tel:84952128506">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/phone.php"
                            )
                        );?>
	                </a>
                </div>
            </div>
            <div class="main-soc-block">
                <a href="" class="soc-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc01.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc02.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc03.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc04.png" alt="">
                </a>
            </div>
            <div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
        </div>
    </div>
</footer>
<!-- /footer -->
</body>

</html>
