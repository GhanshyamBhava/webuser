<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'USER.Webuser',
            'Fewebuser',
            [
                'Users' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Users' => 'create, update, delete'
            ]
        );

		// wizards
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
			'mod {
				wizards.newContentElement.wizardItems.plugins {
					elements {
						fewebuser {
							icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_fewebuser.svg
							title = LLL:EXT:webuser/Resources/Private/Language/locallang_db.xlf:tx_webuser_domain_model_fewebuser
							description = LLL:EXT:webuser/Resources/Private/Language/locallang_db.xlf:tx_webuser_domain_model_fewebuser.description
							tt_content_defValues {
								CType = list
								list_type = webuser_fewebuser
							}
						}
					}
					show = *
				}
		   }'
		);

    },
    $_EXTKEY
);
