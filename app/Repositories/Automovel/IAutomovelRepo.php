<?php namespace App\Repositories\Automovel;

interface IAutomovelRepo
{
    public function obterAutomovel($request, $id);
    public function obterResultadosBusca($rastreio, $id);
    public function obterImagensVeiculo($rastreio);
    public function montarModelAutomovel($id, $detalhes, $acessorios, $observacoes, $contato, $nomeAnuncio, $valorVeiculo, $imagensVeiculo);
}
