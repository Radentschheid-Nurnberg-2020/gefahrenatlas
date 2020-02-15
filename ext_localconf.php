<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Radentscheidnbg2020.Gefahrenatlas',
            'Gefahrenatlaslist',
            [
                'Meldung' => 'list, show, new, create'
            ],
            // non-cacheable actions
            [
                'Meldung' => 'create, update'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Radentscheidnbg2020.Gefahrenatlas',
            'Gefahrenatlasnew',
            [
                'Meldung' => 'new, list, show, create'
            ],
            // non-cacheable actions
            [
                'Meldung' => 'create, update'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    gefahrenatlaslist {
                        iconIdentifier = gefahrenatlas-plugin-gefahrenatlaslist
                        title = LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_gefahrenatlaslist.name
                        description = LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_gefahrenatlaslist.description
                        tt_content_defValues {
                            CType = list
                            list_type = gefahrenatlas_gefahrenatlaslist
                        }
                    }
                    gefahrenatlasnew {
                        iconIdentifier = gefahrenatlas-plugin-gefahrenatlasnew
                        title = LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_gefahrenatlasnew.name
                        description = LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_gefahrenatlasnew.description
                        tt_content_defValues {
                            CType = list
                            list_type = gefahrenatlas_gefahrenatlasnew
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'gefahrenatlas-plugin-gefahrenatlaslist',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:gefahrenatlas/Resources/Public/Icons/user_plugin_gefahrenatlaslist.svg']
			);
		
			$iconRegistry->registerIcon(
				'gefahrenatlas-plugin-gefahrenatlasnew',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:gefahrenatlas/Resources/Public/Icons/user_plugin_gefahrenatlasnew.svg']
			);
		
    }
);
