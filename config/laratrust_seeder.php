<?php

return [
    'role_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'products' => 'c,r,u,d',
            
        ],
        'customer' => [
            'products' => 'r',
            'carts' => 'c,r,u,d'
        ],
    ],
 
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
