<?php

return [
  'settings' => [
    'db' => [
			'driver' 	=> 'sqlite',
			'database' 	=> __DIR__ . '../../db/ChatApp.db',
			'prefix'	=> ''
      ],
      'addContentLengthHeader' => false,
      'displayErrorDetails' => true,
  ],
];
