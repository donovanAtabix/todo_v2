<?php
return [
    'database' => [
        'name' => 'Test_data_base',
        'username' => 'root',
        'password' => 'secret',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
