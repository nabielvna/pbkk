<?php

return [
    [
        'title' => 'PBKK 1',
        'icon' => 'fas fa-tachometer-alt',
        'route' => 'PBKK1',
        'children' => [
            ['title' => 'Genap Ganjil', 'route' => 'even-odd', 'icon' => 'far fa-circle'],
            ['title' => 'Fibonacci', 'route' => 'fibonacci', 'icon' => 'far fa-circle'],
            ['title' => 'Bilangan Prima', 'route' => 'prime-number', 'icon' => 'far fa-circle'],
            ['title' => 'Routing Parameter', 'route' => 'param', 'icon' => 'far fa-circle', 'is_param' => true],
        ],
    ]
];
