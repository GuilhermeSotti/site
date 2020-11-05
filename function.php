<?php

function carregaPagina(){

	(isset($_GET['php'])) ? $pagina = $_GET['php'] : $pagina = 'home';

	if(file_exists('page_'.$pagina.'.php')){
		require_once('page_'.$pagina.'.php');	
	} else {
		require_once('page_home.php');
	}
}

function geraTitulo(){

	(isset($_GET['php'])) ? $pagina = $_GET['php'] : $pagina = 'home';

	switch ($pagina) {
		case 'home':
			$titulo = 'GPires - Currículo On-line';
			break;
		case 'clientes':
			$titulo = 'Meus Clientes - Currículo On-line';
			break;
		case 'sobre':
			$titulo = 'Tudo sobre mim - Currículo On-line';
			break;
		case 'servicos':
			$titulo = 'O que eu sei fazer - Currículo On-line';
			break;
		case 'contato':
			$titulo = 'Me chame! - Currículo On-line';
			break;
		default:
			$titulo = 'GPires - Currículo On-line';
			break;
	}
	return $titulo;
}