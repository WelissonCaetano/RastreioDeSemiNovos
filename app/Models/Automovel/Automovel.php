<?php namespace App\Models\Automovel;

use App\Models\Model;
use App\Models\Proprietario\Proprietario;

class Automovel extends Model
{
    public $acessorios;
    public $codigo;
    public $dataCadastro;
    public $detalhes;
    public $imagens;
    public $nomeAnuncio;
    public $obsevacoes;
    public $proprietario;
    public $valorVeiculo;
    public $visualizacoes;

    public function __construct()
    {
        $this->proprietario = new Proprietario();
    }
}
