<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	// application components
	'components'=>array(

		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				//a standard rule mapping '/' to 'site/index' action
				'' 																	=> 'site/index',
				
				//a standard rule mapping '/login' to 'site/login', and so on
				'<action:(login|logout)>' 											=> 'site/<action>',
				'<id:\d+>-<t:[\w\-]+>/<static:[\w\-]+>-<picture:[\w\-]+>'			=> 'page/view',
				'<id:\d+>-<t:[\w\-]+>'												=> 'page/view',
			
				'<controller:\w+>/<t:[\w\-]+>-<id:\d+>/<photo:\d+>'					=> '<controller>/view',
				'<controller:\w+>/<t:[\w\-]+>-<id:\d+>'								=> '<controller>/view',
				'<controller:\w+>/<id:\d+>'											=> '<controller>/view',
				
				//controller condition
				'<controller:\w+>/<t:[\w\-]+>-<id:\d+>/<category:\d+>'				=> '<controller>/index',			
				'<controller:\w+>/<t:[\w\-]+>/<category:\d+>'						=> '<controller>/index',
				'<controller:\w+>/<t:[\w\-]+>-<id:\d+>'								=> '<controller>/index',
				'<controller:\w+>/<id:\d+>'											=> '<controller>/index',
				'<controller:\w+>'													=> '<controller>/index',
				
				//'<controller:\w+>/<action:\w+>/<t:[\w\-]+>-<id:\d+>'				=> '<controller>/<action>',
				//'<controller:\w+>/<action:\w+>/<id:\d+>'							=> '<controller>/<action>',
				'<controller:\w+>/<action:\w+>'										=> '<controller>/<action>',
				'<controller:\w+>'													=> '<controller>', 
			),
		),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);