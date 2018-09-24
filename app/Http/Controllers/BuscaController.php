<?php

namespace App\Http\Controllers;

use App\Repositories\Rastreio\IRastreioRepo;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BuscaController extends Controller
{
    private $Rastreio;

    public function __construct(IRastreioRepo $Rastreio)
    {
        $this->Rastreio = $Rastreio;
    }

    public function onGet(Request $request, $id = null)
    {
        $result = $this->Rastreio->obterDados($request);

        if (!$result) {
            throw new NotFoundHttpException();
        }

        return $result;
    }
}
