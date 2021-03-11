<?php

use Core\Factories\TransportSmtpFactory;
use Zend\Form\View\Helper\FormElementErrors;
use Core\Factories\FormElementErrorsFactory;

return [
    'service_manager' => [
        'factories' => [
            'core.transport.smtp' => TransportSmtpFactory::class
        ]
    ],
    'view_helpers' =>[
        'factories' => [
            FormElementErrors::class => FormElementErrorsFactory::class
        ]
    ],
    'view_helper_config' => [
        'form_element_errors' => [
            'message_open_format' => '<ul class="list-unstyled"><li class="help-block">',
            'message_separator_string' => '</li><li class="help-block">',
            'message_close_string' => '</ul></li>',
        ],
        'flashmessenger' => [
            'message_open_format'      => '<div%s><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><ul><li>',
            'message_close_string'     => '</li></ul></div>',
            'message_separator_string' => '</li><li>',
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
    ],
];