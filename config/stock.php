<?php

use Citmatel\Support\Files\DataReader;
use Citmatel\Support\Files\ExcelReader;

return [

    'supplierMap' => [

        'editorial-citmatel-descargables' =>
            [
                'attributes' => [
                    'typology' => '2',
                    'format' => '3',
                    'downloadable' => '4',
                    'chapter' => '6',
                    'bookstore_language' => '5',
                    'price' => '7',
                    'name_locale' => '0',
                    'description_locale' => '1',
                    'code' => '8',
                    'type'=>'9'
                ],
                'files' => ['xlsx', 'xls', 'csv'],
                'class' => ExcelReader::class,
            ],
        'empresa-171014299-almacen-rodriguez-gran-comercial' =>
            [
                'attributes' => [
                    'code' => '0',
                    'name' => '1',
                    'description' => '2',
                    'price' => '4',
                    'quantity' => '6',
                    'category_slug' => '5',
                    'um' => '3',
                    'image' => '7'
                ],
                'files' => ['xlsx', 'xls', 'csv'],
                'class' => ExcelReader::class,
            ],
        'Palco' =>
            [
                'attributes' => [
                    'code' => 'codigo',
                    'description' => 'descri',
                    'price' => 'pventa',
                    'quantity' => 'saldo',
                    'um' => 'um'
                ],
                'files' => ['xlsx', 'xls', 'csv'],
                'class' => ExcelReader::class,
            ],
        'Palenque' =>
            [
                'attributes' => [
                    'code' => 'codigo',
                    'description' => 'descripcion',
                    'price' => 'pvp',
                    'quantity' => 'cantidad',
                    'other_supplier' => [
                        'palco' => ['code' => 'otro_codigo'],
                    ]
                ],
                'files' => ['txt', 'xls', 'xlsx'],
                'class' => ExcelReader::class,
            ],
        'TRD' =>
            [
                'attributes' => [
                    'code' => 'Prod - recno',
                    'description' => 'Description',
                    'price' => 'unit - price',
                    'quantity' => 'afs',
                    'um' => 'unit - id'
                ],
                'files' => ['xml'],
                'class' => XMLReader::class,
            ],
        'CubaPack' =>
            [
                'attributes' => [
                    'code' => 'codigo',
                    'description' => 'descripcion',
                    'price' => 'precio',
                    'quantity' => 'cantidad'
                ],
                'files' => ['txt'],
                'class' => DataReader::class,
                'read' => [
                    'code' => ['start' => 0, 'end' => 13],
                    'description' => ['start' => 18, 'end' => 63],
                    'quantity' => ['start' => 81, 'end' => 8],
                    'price' => ['start' => 90, 'end' => 8],

                ]

            ]
    ]
];