<?php


$GLOBALS['TL_HOOKS']['modifyFrontendPage'][]  = array('HeimrichHannot\Replace\Hooks', 'modifyFrontendPageHook');

$GLOBALS['TL_REPLACE'] = array();