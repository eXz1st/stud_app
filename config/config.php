<?php

return [
    'db' => [
        'host' => 'localhost',
        'user' => 'stud_app',
        'password' => 'stud_app',
        'db_name' => 'stud_app',
    ],
    'routes' => include("routes.php"),
    'services' => include("services.php")
];
