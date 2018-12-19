<?php

/*
Plugin Name: SK Wordpress Plugin
Description: This is a test plugin for checking the Private Updates
Plugin Author: Salih K
Plugin URI: https://salih.me
Version: 1.5.1
*/


require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/salihkulangara/sk-wp-plugin/',
	__FILE__,
	'sk-wp-plugin'
);
