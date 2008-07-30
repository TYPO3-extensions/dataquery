<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Define main TCA for table tx_dataquery_queries

t3lib_extMgm::allowTableOnStandardPages('tx_dataquery_queries');

$TCA['tx_dataquery_queries'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:dataquery/locallang_db.xml:tx_dataquery_queries',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'versioningWS' => TRUE, 
		'origUid' => 't3_origuid',
		'default_sortby' => 'ORDER BY title',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_dataquery_queries.gif',
	),
	'feInterface' => array (
		'fe_admin_fieldList' => 'hidden, title, description, sql_query, t3_mechanisms',
	)
);

// Register dataquery as a Data Provider

t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['columns']['tx_displaycontroller_provider']['config']['allowed'] .= ',tx_dataquery_queries';

?>