<? if(file_exists($arResult['FILE']) && (trim($str = file_get_contents($arResult['FILE'])))): ?>
<!-- side anonse -->
<div class="side-block side-anonse">
    <div class="title-block"><span class="i i-title01"></span><?=GetMessage('POLEZN_INFO')?></div>
    <div class="item">
        <p><?=$str?></p>
    </div>
</div>
<?endif?>