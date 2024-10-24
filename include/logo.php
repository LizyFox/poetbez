<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if ($APPLICATION->GetCurPage() != '/'):?>
    <a href="/">
        <img class="logo__img w-100 h-100" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Логотип ПБ">
    </a>
<?else:?>
    <img class="logo__img w-100 h-100" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Логотип ПБ">
<?endif;?>