<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("ASD_CMP_NAME"),
	"DESCRIPTION" => GetMessage("ASD_CMP_DESCRIPTION"),
	"ICON" => "/images/icon.gif",
	"SORT" => 10,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "utility",
		"NAME" => GetMessage("ASD_CMP_GLOBAL_DIR_NAME"),
		"CHILD" => array(
			"ID" => "user",
			"NAME" => GetMessage("ASD_CMP_DIR_NAME")
		),

	),
);

?>