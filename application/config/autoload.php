<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages']   = array();
$autoload['libraries']  = array('form_validation', 'database', 'session', 'upload');
$autoload['drivers']    = array();
$autoload['helper']     = array('url', 'form');
$autoload['config']     = array();
$autoload['language']   = array();
$autoload['model']      = array('ModelUser', 'ModelPerusahaan');
