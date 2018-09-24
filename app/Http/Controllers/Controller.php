<?php

namespace App\Http\Controllers;

use App\Http\Helpers\ApiResponseTrait;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

abstract class Controller extends BaseController
{
    use ApiResponseTrait;

    public function __construct()
    {
    }

    public function get(Request $request, $id)
    {
        $retorno = $this->onGet($request, $id);

        if ($retorno instanceof JsonResponse) {
            return $retorno;
        }

        return $this->responderSucesso($retorno);
    }

    protected function onGet(Request $request, $id)
    {
        throw new NotFoundHttpException([]);
    }
}
