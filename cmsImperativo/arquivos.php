<?php
session_start();
include("controller/logando.php");
include("controller/viewUpload.php");
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body id="duascolunas">


<div id="topo">
<? include("subpagina/navegacao.php")?>
</div>

<div id="principal">
<? include("subpagina/listarArquivos.php")?>
</div>


</body>
</html>