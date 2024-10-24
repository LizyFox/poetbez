<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";

if($arResult[count($arResult)-1]["LINK"]!="" && $arResult[count($arResult)-1]["LINK"]!=$GLOBALS["APPLICATION"]->GetCurPage(false))
	$arResult[] = Array("TITLE"=>$GLOBALS["APPLICATION"]->GetTitle());

$strReturn = '<ul class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="'.SITE_DIR.'" itemprop="item"><span itemprop="name">'.GetMessage("HDR_GOTO_MAIN").'</span></a><meta itemprop="position" content="0"></li>';
for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++) {
	$strReturn .= '&nbsp;<span>&mdash;</span>&nbsp;';

	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$meta_count = $index + 1;

	if($arResult[$index]["LINK"] <> "" && $arResult[$index]["LINK"] != $GLOBALS["APPLICATION"]->GetCurPage(false))
		$strReturn .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="'.$arResult[$index]["LINK"].'" itemprop="item"><span itemprop="name">'.$title.'</span></a><meta itemprop="position" content="'.$meta_count.'"></li>';
	else
		$strReturn .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span class="breadrumb__last-item" itemprop="name">'.$title.'</span><meta itemprop="item" content="'.$arResult[$index]["LINK"].'"><meta itemprop="position" content="'.$meta_count.'"></li>';
}

$strReturn .= '</ul>';
return $strReturn;
?>
