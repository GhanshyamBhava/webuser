<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'USER.Webuser',
            'Fewebuser',
            'Web User'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'USER.Webuser',
            'web', // Make module a submodule of 'web'
            'bewebuser', // Submodule key
            '', // Position
            [
                'Users' => 'list, show, new, create, edit, update, delete',
            ],
            [
                'access' => 'user,group',
                'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/user_mod_bewebuser.svg',
                'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_bewebuser.xlf',
                /*'navigationComponentId' => '',*/
            ]
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Web Users');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_webuser_domain_model_users', 'EXT:webuser/Resources/Private/Language/locallang_csh_tx_webuser_domain_model_users.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_webuser_domain_model_users');

    },
    $_EXTKEY
);
