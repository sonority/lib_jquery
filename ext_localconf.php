<?php
defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'FE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] =
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) .
		'Classes/Hooks/PageRenderer.php:Sonority\\LibJquery\\Hooks\\PageRenderer->renderPreProcess';
}