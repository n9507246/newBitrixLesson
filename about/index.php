<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('О нас');
$APPLICATION->SetPageProperty('TITLE', 'О нас | We Coders');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "о нас, о компании, we coders, сайты");
?>

    О нас
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>