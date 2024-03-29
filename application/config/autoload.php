<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
// LIBRARIES
$autoload['libraries'] = array('database', 'session', 'form_validation', 'pagination');

$autoload['drivers'] = array();
// HELPER
$autoload['helper'] = array('url', 'form', 'text', 'file', 'date');



$autoload['config'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as array('codeigniter');
|
*/
$autoload['language'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['model'] = array('first_model', 'second_model');
|
| You can also supply an alternative model name to be assigned
| in the controller:
|
|	$autoload['model'] = array('first_model' => 'first');
*/
$autoload['model'] = array();
