<?php
namespace App\Http\Controllers\Api\Sales\Transactions;

use App\Http\Controllers\Api\ApiController;
use Citmatel\Sales\Admin\Repositories\TransactionsRepository;
use Exception;
use Illuminate\Http\Request;

class TransactionController extends ApiController
{
    function __construct(TransactionsRepository $repository)
    {
        $this->repository = $repository;
    }

    function store(Request $request)
    {
        try {
            $transaction = $this->repository->createAndStore($request->all());
            $transaction->save();
            return json_encode($transaction);
        } catch (Exception $exception) {
            return json_encode(['error' => $exception->getMessage()]);
        }
    }
}

