<?php
return [
    'router' => [
        'routes' => [
            'question.rest.question' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/question/1/choices[/:question_id]',
                    'defaults' => [
                        'controller' => 'question\\V1\\Rest\\Question\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'question.rest.question',
        ],
    ],
    'zf-rest' => [
        'question\\V1\\Rest\\Question\\Controller' => [
            'listener' => 'question\\V1\\Rest\\Question\\QuestionResource',
            'route_name' => 'question.rest.question',
            'route_identifier_name' => 'question_id',
            'collection_name' => 'question',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \question\V1\Rest\Question\QuestionEntity::class,
            'collection_class' => \question\V1\Rest\Question\QuestionCollection::class,
            'service_name' => 'question',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'question\\V1\\Rest\\Question\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'question\\V1\\Rest\\Question\\Controller' => [
                0 => 'application/vnd.question.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'question\\V1\\Rest\\Question\\Controller' => [
                0 => 'application/vnd.question.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \question\V1\Rest\Question\QuestionEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'question.rest.question',
                'route_identifier_name' => 'question_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \question\V1\Rest\Question\QuestionCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'question.rest.question',
                'route_identifier_name' => 'question_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'question\\V1\\Rest\\Question\\QuestionResource' => [
                'adapter_name' => 'Adaptermysql',
                'table_name' => 'question',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'question\\V1\\Rest\\Question\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'question\\V1\\Rest\\Question\\QuestionResource\\Table',
            ],
        ],
    ],
    'zf-content-validation' => [
        'question\\V1\\Rest\\Question\\Controller' => [
            'input_filter' => 'question\\V1\\Rest\\Question\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'question\\V1\\Rest\\Question\\Validator' => [
            0 => [
                'name' => 'choice',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '11',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'votes',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            2 => [
                'name' => 'favorita',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '11',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
