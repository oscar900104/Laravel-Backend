<?php
namespace App\Http\Controllers\Api\Sales\Orders;

use App\Http\Controllers\Api\ApiController;
use Citmatel\Sales\Admin\Merchants\Merchant;
use Citmatel\Sales\Admin\Orders\OrdersGenerator;
use Citmatel\Sales\Admin\Repositories\CartsRepository;
use Citmatel\Sales\Api\Orders\OrderTransformer;
use Citmatel\Sales\Api\Orders\SaleTransformer;
use Citmatel\Users\Admin\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends ApiController
{
    function __construct(CartsRepository $repository)
    {
        $this->repository = $repository;
        $this->transformer = SaleTransformer::class;
    }

    function store(Request $request)
    {
//        return $request->all();
        try {
            $order = $this->createOrder($request);
            $merchant = Merchant::where('code', $request->get('merchant'))->first();
            $response = [];
            $orderTransformer = new OrderTransformer();
            $response['order'] = $orderTransformer->transform($order);;
            $response['merchant'] = $merchant;
            return json_encode($response);
        } catch (\Exception $e) {
            return json_encode($e->getMessage());
        }
    }

    function createOrder($request)
    {
        return DB::transaction(function () use ($request) {
            $user = User::where('email', $request->get('email'))->first();
            $cart = $this->repository->findOrCreateCart($user, $request->get('service'), $request->all());
            $orderCreator = new OrdersGenerator($cart, $request->get('ip'));
            $order = $orderCreator->createOrder();
            $order->save();
            return $order;
        });
    }
}