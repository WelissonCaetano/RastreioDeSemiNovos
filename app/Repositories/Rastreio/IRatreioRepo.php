<?php namespace App\Repositories\rastreio;

interface IrastreioRepo
{
    public function getDados($dados);
    public function getQuantidadePaginas($rastreio);
    public function getFiltrosBusca($rastreio);
    public function getDadosFiltroSelect($rastreio, $nomeFiltro);
    public function getResultadosBusca($rastreio);
    public function mostrarResultados($detalhesVeiculo, $anuncio);
}
