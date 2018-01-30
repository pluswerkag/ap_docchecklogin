<?php
$extKey = 'ap_docchecklogin';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $extKey,
    'Configuration/TypoScript/Static',
    'DocCheck Login'
);