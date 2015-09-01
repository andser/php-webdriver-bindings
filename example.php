<?php
require_once "phpwebdriver/WebDriver.php";
require_once "phpwebdriver/LocatorStrategy.php";

$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect("firefox");
$webdriver->get("http://google.com");

$element = $webdriver->findElementBy(LocatorStrategy::name, "q");
$element->sendKeys(array("selenium with php"));
$element->submit();

//$webdriver->close();