<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="pt-5">
    <div class="container">
        <form class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value=""><?= GetMessage("LOT_AREA"); ?></option>
                        <option value="1000">1000</option>
                        <option value="800">800</option>
                        <option value="600">600</option>
                        <option value="400">400</option>
                        <option value="200">200</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value=""><?= GetMessage("PROPERTY_STATUS"); ?></option>
                        <option value="For Sale"><?= GetMessage("FOR_SALE"); ?></option>
                        <option value="For Rent"><?= GetMessage("FOR_RENT"); ?></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value=""><?= GetMessage("LOCATION"); ?></option>
                        <option value="United States"><?= GetMessage("UNITED_STATES"); ?></option>
                        <option value="United Kingdom"><?= GetMessage("UNITED_KINGDOM"); ?></option>
                        <option value="Canada"><?= GetMessage("CANADA"); ?></option>
                        <option value="Belgium"><?= GetMessage("BELGIUM"); ?></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value=""><?= GetMessage("LOT_AREA"); ?></option>
                        <option value="1000">1000</option>
                        <option value="800">800</option>
                        <option value="600">600</option>
                        <option value="400">400</option>
                        <option value="200">200</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value=""><?= GetMessage("BEDROOMS"); ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value=""><?= GetMessage("BATHROOMS"); ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="mb-4">
                    <div id="slider-range" class="border-primary"></div>
                    <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="<?= GetMessage("SEARCH"); ?>">
            </div>
        </form>
    </div>
</div>
<div class="site-section site-section-sm bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="site-section-title">
                    <h2><?= GetMessage("TITLE_PROPERTY"); ?></h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
                <?= $arResult["NAV_STRING"]; ?><br />
            <? endif; ?>
            <? foreach($arResult["ITEMS"] as $arItem) : ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-md-6 col-lg-4 mb-4" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" class="prop-entry d-block">
                        <figure>
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="<?= $arItem["NAME"]; ?>" class="img-fluid">
                        </figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">$<?= number_format($arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]); ?></span>
                                <h3 class="title"><?= $arItem["NAME"]; ?></h3>
                                <p class="location"><?= $arItem["DISPLAY_PROPERTIES"]["LOCATION"]["VALUE"]; ?></p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        <? if (!empty( $arItem["DISPLAY_PROPERTIES"]["TOTAL_AREA"])) : ?>
                                        <span><?= GetMessage("LOT_AREA"); ?>:</span>
                                        <strong><?= $arItem["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["VALUE"]; ?>m<sup>2</sup></strong>
                                        <? endif ?>
                                    </div>
                                    <div class="col">
                                    <? if (!empty( $arItem["DISPLAY_PROPERTIES"]["BEDS"])) : ?>
                                        <span><?= GetMessage("BEDROOMS"); ?>:</span>
                                        <strong><?= $arItem["DISPLAY_PROPERTIES"]["BEDS"]["VALUE"]; ?></strong>
                                        <? endif ?>

                                    </div>
                                    <div class="col">
                                    <? if (!empty( $arItem["DISPLAY_PROPERTIES"]["BATHROOMS"])) : ?>
                                        <span><?= GetMessage("BATHROOMS"); ?>:</span>
                                        <strong><?= $arItem["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"]; ?></strong>
                                        <? endif ?>

                                    </div>
                                    <div class="col">
                                    <? if (!empty( $arItem["DISPLAY_PROPERTIES"]["GARAGES"])) : ?>
                                        <span><?= GetMessage("GARAGES"); ?>:</span>
                                        <strong><?= $arItem["DISPLAY_PROPERTIES"]["GARAGES"]["VALUE"]; ?></strong>
                                        <? endif ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
            <br /><?= $arResult["NAV_STRING"]; ?>
        <? endif; ?>
    </div>
</div>
