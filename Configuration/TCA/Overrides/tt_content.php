<?php
$extKey = 'ap_docchecklogin';
$pluginSignature = 'apdocchecklogin_doccheckauthentication';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature]
    = 'layout,select_key,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:' . $extKey . '/Configuration/FlexForms/setup.xml'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $extKey,
    'DocCheckAuthentication',
    'LLL:EXT:ap_docchecklogin/Resources/Private/Language/locallang_backend.xml:pluginName'
);
