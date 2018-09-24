<?php

namespace App\Http\Controllers;

use App\Repositories\Automovel\IAutomovelRepo;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AutomovelController extends Controller
{
    private $automovel;

    public function __construct(IAutomovelRepo $automovel)
    {
        $this->automovel = $automovel;
    }

    public function onGet(Request $request, $id)
    {
        $result = $this->automovel->obterAutomovel($request, $id);

        if (!$result) {
            throw new NotFoundHttpException();
        }

        return $result;
    }
}
