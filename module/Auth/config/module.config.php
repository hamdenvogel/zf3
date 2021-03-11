<?php

namespace Auth;

use Auth\Controller\Factory\IndexControllerFactory;
use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'auth.login' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/login',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'login'
                    ]
                ]
            ],
            'auth.logout' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/logout',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'logout'
                    ]
                ]
            ],
        ]
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => IndexControllerFactory::class
        ]
    ],
    'view_manager' => [
        'template_map' => [
            'auth/index/login' => __DIR__.'/../view/auth/index/login.phtml',
        ],
        'template_path_stack' => [
            __DIR__.'/../view',
        ]
    ]
];