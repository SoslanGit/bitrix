<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
 <footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/about.php"
                    )
                ); ?>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"navigations", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "navigations"
	),
	false
); ?>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/follow_us.php"
                    )
                ); ?>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/copyright.php"
                        )
                    ); ?>
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>