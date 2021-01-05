<?php

namespace App\Exceptions;

use Citmatel\Support\Exceptions\Api\OrderException;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Pasared\Exception\PasaredException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     * @param  \Exception $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof OrderException) {
            return view('stores.error_order', ['response' => $exception->getMessage()]);
        }
        if ($exception instanceof PasaredException) {
            return view('stores.error', ['response' => $exception->getMessage()]);
        }
        return parent::render($request, $exception);
    }
}
