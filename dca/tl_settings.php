<?php

$dc = & $GLOBALS['TL_DCA']['tl_settings'];

/**
 * Palettes
 */
$dc['palettes']['default'] = str_replace('liveUpdateBase', 'liveUpdateBase;{replace_legend},replace', $dc['palettes']['default']);

/**
 * Fields
 */
$arrFields = array
(
	'replace' => array(
		'label'     => &$GLOBALS['TL_LANG']['tl_settings']['replace'],
		'inputType' => 'multiColumnWizard',
		'exclude'   => true,
		'eval'      => array
		(
			'columnFields' => array
			(
				'search'  => array
				(
					'label'     => &$GLOBALS['TL_LANG']['tl_settings']['replace']['search'],
					'exclude'   => true,
					'inputType' => 'text',
					'eval'      => array('style' => 'width:280px', 'allowHtml' => true, 'preserveTags' => true)
				),
				'replace' => array
				(
					'label'     => &$GLOBALS['TL_LANG']['tl_settings']['replace']['replace'],
					'exclude'   => true,
					'inputType' => 'text',
					'eval'      => array('style' => 'width:500px', 'allowHtml' => true, 'preserveTags' => false)
				),
			)
		),
		'sql'       => "blob NULL"
	)
);

$dc['fields'] = array_merge($dc['fields'], $arrFields);