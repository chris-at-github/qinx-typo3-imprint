<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Qinx.' . $_EXTKEY,
	'Pi1',
	'Qinx Imprint'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Qinx Imprint');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_qximprint_domain_model_data', 'EXT:qximprint/Resources/Private/Language/locallang_csh_tx_qximprint_domain_model_data.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_qximprint_domain_model_data');
