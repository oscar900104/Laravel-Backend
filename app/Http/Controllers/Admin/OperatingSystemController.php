<?php
/**
 * Created by PhpStorm.
 * User: Lourdes
 * Date: 28/5/2019
 * Time: 16:33
 */

namespace App\Http\Controllers\Admin;

use Citmatel\Hosting\Technologies\OperatingSystemRepository;
use Citmatel\Support\Http\Controllers\EntityController;
use Illuminate\Http\Request;

class OperatingSystemController extends EntityController {

    function __construct(OperatingSystemRepository $operatingSystemRepository)
    {
        parent::__construct($operatingSystemRepository, 'operating-systems', 'admin/operating-systems',
            'admin.operating-systems');
    }

    public function store(Request $request)
    {
        return parent::genericStore($request);
    }

    public function update(Request $request, $id)
    {
        return parent::genericUpdate($request, $id);
    }
}