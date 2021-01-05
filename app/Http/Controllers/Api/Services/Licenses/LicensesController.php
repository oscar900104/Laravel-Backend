<?php
namespace App\Http\Controllers\Api\Services\Licenses;

use App\Http\Controllers\Api\ApiController;
use Citmatel\Sales\Admin\Orders\Order;
use Citmatel\Sales\Admin\Orders\State;
use Citmatel\Services\Licenses\Admin\License;
use Citmatel\Services\Licenses\Admin\Repositories\LicensesRepository;
use Citmatel\Services\Licenses\Api\LicenseTransformer;
use Citmatel\Support\Environment\Translator;

class LicensesController extends ApiController
{
    function __construct(LicensesRepository $repository, Translator $translator)
    {
        $this->key = 'key';
        $this->repository = $repository;
        $this->transformer = LicenseTransformer::class;
        $this->translator = $translator;
    }

    function userLicenses($userId)
    {
        $licenses = [];
        $orders = Order::where('client_id', $userId)
                       ->whereIn('state', [State::Processing, State::Completed])
                       ->get();
        foreach ($orders as $order) {
            foreach ($order->shipments as $shipment) {
                foreach (License::where('shipment_id', $shipment->id)->get() as $license) {
                    $licenses[] = $license;
                }
            }
        }

        return fractal(collect($licenses), new $this->transformer)->respond(200, [], JSON_PRETTY_PRINT);
    }
}