<?php
session_start();

$idioma_informado = filter_input(INPUT_GET, 'idioma');
$idiomas_permitidos = ['pt-pt', 'pt-br', 'en-us'];
$idioma_padrao = 'pt-pt';

$_SESSION['idioma'] = (!$_SESSION['idioma'] || !$idioma_informado || !in_array($idioma_informado, $idiomas_permitidos)) 
  ? $idioma_padrao
  : $idioma_informado;

$traduzir_para = $_SESSION['idioma'];

include_once("traducoes/{$traduzir_para}.php");