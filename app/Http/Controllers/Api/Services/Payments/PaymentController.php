<?php
namespace App\Http\Controllers\Api\Services\Payments;

use App\Http\Controllers\Api\ApiController;
use Citmatel\Services\Payments\Admin\Repositories\PaymentsRepository;
use Citmatel\Services\Payments\Api\PaymentTransformer;
use Citmatel\Support\Environment\Translator;

class PaymentController extends ApiController
{
    function __construct(PaymentsRepository $repository, Translator $translator)
    {
        $this->key = 'key';
        $this->repository = $repository;
        $this->transformer = PaymentTransformer::class;
        $this->translator = $translator;
    }

    function userPayments($userId)
    {
        $payments = $this->repository->where('user_id',$userId)->where('state','!=','canceled')->get();
        return fractal($payments, new $this->transformer)->respond(200, [], JSON_PRETTY_PRINT);
    }
}