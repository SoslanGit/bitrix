<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	
<ul class="menu-list">
<li class="main-page">
        <a href="<?=SITE_DIR?>"><?=GetMessage('HOME_PAGE')?></a>
</li>
<?
$previousLevel = 0;

foreach($arResult as $arItem):?>
  <? if ($arItem["PARAMS"]["MENU_COLOR"]):?>
        <? $sMenuColor = $arItem["PARAMS"]["MENU_COLOR"]; ?>
    <? else: ?>
        <? $sMenuColor = ""; ?>
    <? endif; ?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>
	<?if ($arItem["IS_PARENT"] ):?>
		


	<?endif?>


	<?if ($arItem["IS_PARENT"]):?>
		
 

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a href="<?=$arItem["LINK"]?>" class="<?= $sMenuColor . ' ' ?> <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="<?= $sMenuColor . ' '?> item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>
		<? if ($arItem["PARAMS"]["MENU_TEXT"]):?>
            <div class="menu-text">
                <?= $arItem["PARAMS"]["MENU_TEXT"] ?>
            </div>
        <? endif; ?>
	<?else:?>
		

		<?if ($arItem["PERMISSION"] > "D"):?>
		
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>


				<li><a href="<?=$arItem["LINK"]?>" class="<?= $sMenuColor . ' ' ?><?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="<?= $sMenuColor . ' ' ?> item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1):?>
				<? continue; ?>
	
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<div class="menu-clear-left"></div>
<?endif?>

