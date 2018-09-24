<?php

namespace App\Http\Helpers;

use Illuminate\Http\Response;

trait ApiResponseTrait
{
    private function responder($statusCode, $dadosResposta = array())
    {
        return response()->json($dadosResposta, $statusCode);
    }

    protected function responderSucesso($responseData = array())
    {
        return $this->responder(Response::HTTP_OK, $responseData);
    }
}
