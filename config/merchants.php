<?php

use Citmatel\Support\Files\DataReader;
use Citmatel\Support\Files\ExcelReader;

return [

    'map' => [
        '01'       =>
            [
                'attributes' => [
                    'order_code'    => '0',
                    'response_code' => '1',
                    'state'         => '2',
                    'type'          => '4',
                    'datetime'      => '6',
                ],
                'files'      => ['xlsx', 'xls', 'csv'],
                'class'      => ExcelReader::class,
            ],
    ]
];