<?php
namespace Blog;

use Blog\Controller\BlogController;
use Blog\Categories;
use Blog\CategoriesFactory;

return [
	 'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/blog',
                    'defaults' => array(
                        'controller' => BlogController::class,
                        'action'     => 'index',
                    ),
                ),
            ),
          ),
     ),

      'controllers' => array(
        'invokables' => array(
            BlogController::class => BlogController::class
        ),
    ),

      'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'blob/index/index' => __DIR__ . '/../view/blob/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

      'service_manager' => [
        'services' => [
        /*
            'categories' => [
                'Services',
                'PHP',
                'Java',
                'Pytton',
                'JavaScript',   

          ], 
        */ 
        ],
        'invokables' => [
          #  Categories::class => Categories::class 
        ],
        'factories' => [
            Categories::class => CategoriesFactory::class
        ]
      ]
];

