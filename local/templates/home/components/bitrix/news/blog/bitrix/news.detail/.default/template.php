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
<div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <? if (!empty($arResult["DETAIL_PICTURE"]["SRC"])): ?>
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" class="img-fluid">
               <? else : ?>
                <?= GetMessage("NO_IMAGE"); ?> 
            <? endif ?>
          </div>
          <div class="col-md-5 mr-auto order-md-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <? if (!empty($arResult["NAME"])): ?>

            <div class="site-section-title mb-3">
              <h2><?=$arResult["NAME"]?></h2>
            </div>
            <? else : ?>
                <?= GetMessage("NO_TITLE"); ?> 
            <? endif ?>
            <? if (!empty($arResult["DETAIL_TEXT"])): ?>

            <p><?=$arResult["DETAIL_TEXT"];?></p>
            <? else : ?>
                <?= GetMessage("NO_DESC"); ?> 
            <? endif ?>

          </div>
        </div>
      </div>
</div>