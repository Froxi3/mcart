<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

$arComponentDescription = array(
    "NAME" => GetMessage("MCART_AGENTS_COMP_NAME"),
	"DESCRIPTION" => GetMessage("MCART_AGENTS_COMP_DESCRIPTION"),
    "PATH" => array(
		"ID" =>  "myComp",
        "NAME" =>  GetMessage("MCART_AGENTS_COMP_SECTION"),	
	),
);
