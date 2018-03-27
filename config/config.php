<?php
    return [
        'db' => [
            'db_host' => 'localhost',
            'db_name' => 'stud_app',
            'db_user' => 'stud_app',
            'db_pass' => 'stud_app',
        ],
        'routes' => include("routes.php"),
        'services' => include("services.php")
    ];