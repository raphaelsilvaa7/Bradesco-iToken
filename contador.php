<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Total de Visitas</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana;
	font-size: 12px;
	color:#615c5c;
}
.input {
	border:1px #CCC solid;
	font-family:verdana,arial;color:#666;font-size:10px;
	}
.meio2 {
	width:99%;
	border:1px solid #CCC;
	background:#F4F4F4;
	padding-left:5px;
	height:20px;
	padding-top:3px;
	}

a {text-decoration: none;color: #1D51C5;}
a:hover {text-decoration: underline;}

hr {
      border-top: 1px dashed #CCC;
      color: #fff;
      background-color: #fff;
    }
	
-->
</style>
</head>

<body>
<table width="490" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="109"><strong>Total de Visitas:</strong></td>
    <td width="374"><?php
	          $arquivoVi = "visitas.txt";
                 $arquivo = fopen($arquivoVi,"a");
                // Inserimos cada linha do arquivo num array
                $file = file($arquivoVi);
                // Contamos quantos existem
                $total = count($file);
echo $total;
?></td>
  </tr>
</table>
</body>
</html>