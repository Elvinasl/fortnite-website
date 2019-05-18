<?php

// Global functions

$settings = [
	'global' => [
		'full_path' => 'https://fortniteacc.com/_newversion/',
		'assets_path' => 'https://fortniteacc.com/_newversion/template/assets',
		'website' => [
			'title' => 'FortniteAcc.com - New Website here!',
			'keywords' => 'fortniteacc keywords',
			'description' => 'forniteacc description'
		]
	],
	'cache' => [
		'enable' => false,
		'version' => '1'
	]
];

$cache_prefix = ($settings['cache']['enable']) ? '?v='.$settings['cache']['version'] : '';
