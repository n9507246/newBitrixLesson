<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
$APPLICATION->SetPageProperty('title', 'Digital агентство We coders');
?>test <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
Array()
);?><br><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>