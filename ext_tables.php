<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Radentscheidnbg2020.Gefahrenatlas',
            'Gefahrenatlaslist',
            'Gefahrenatltas List'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Radentscheidnbg2020.Gefahrenatlas',
            'Gefahrenatlasnew',
            'Gefahrenatlas Meldung machen'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('gefahrenatlas', 'Configuration/TypoScript', 'Gefahrenatlas');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gefahrenatlas_domain_model_meldung', 'EXT:gefahrenatlas/Resources/Private/Language/locallang_csh_tx_gefahrenatlas_domain_model_meldung.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gefahrenatlas_domain_model_meldung');

    }
);
