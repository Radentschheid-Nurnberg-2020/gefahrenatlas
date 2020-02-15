<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung',
        'label' => 'kategorie',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'ort_lat,ort_lon,ort_zoom,strasse,beschreibung,video,email,melder',
        'iconfile' => 'EXT:gefahrenatlas/Resources/Public/Icons/tx_gefahrenatlas_domain_model_meldung.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, kategorie, ort_lat, ort_lon, ort_zoom, strasse, beschreibung, video, bild, email, melder, nutzungsbedingungen',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, kategorie, ort_lat, ort_lon, ort_zoom, strasse, beschreibung, video, bild, email, melder, nutzungsbedingungen, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_gefahrenatlas_domain_model_meldung',
                'foreign_table_where' => 'AND {#tx_gefahrenatlas_domain_model_meldung}.{#pid}=###CURRENT_PID### AND {#tx_gefahrenatlas_domain_model_meldung}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'kategorie' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.kategorie',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
        ],
        'ort_lat' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.ort_lat',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'ort_lon' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.ort_lon',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'ort_zoom' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.ort_zoom',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'strasse' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.strasse',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'beschreibung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.beschreibung',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required'
            ]
        ],
        'video' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.video',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'bild' => [
            'exclude' => false,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.bild',
            'config' => 
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'bild',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 5
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),

        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email'
            ]
        ],
        'melder' => [
            'exclude' => true,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.melder',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'nutzungsbedingungen' => [
            'exclude' => false,
            'label' => 'LLL:EXT:gefahrenatlas/Resources/Private/Language/locallang_db.xlf:tx_gefahrenatlas_domain_model_meldung.nutzungsbedingungen',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
    
    ],
];
