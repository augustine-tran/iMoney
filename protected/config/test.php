<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			/* uncomment the following to provide test database connection
			*/
			'db'=>array(
				'connectionString' => 'mysql:host=127.0.0.1;dbname=imoney',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8',
			),
		),
		'modules'=>array(
	        'gii'=>array(
	            'class'=>'system.gii.GiiModule',
	            'password'=>'123',
	            // 'ipFilters'=>array(...a list of IPs...),
	            // 'newFileMode'=>0666,
	            // 'newDirMode'=>0777,
	        ),
    	),
	)
);
