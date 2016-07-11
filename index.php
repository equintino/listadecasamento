<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>
  Lista de Presentes de Casamento da Karen e Lucas
 </title>   
 <link href='css/style.css' rel='stylesheet' type='text/css' /> 
 <meta charset='utf-8'> 
     <script>
       produto=[];
       function produtoSelecionado(produto){
        //var php;
         var produto;
         //alert(produto);
         var quem = prompt("Digite seu nome","Produto já presentiado");
         var ola = 'Olá ';
         if(quem != null ){
          window.location.assign('selecionado.php?nome='+quem+'&produto='+produto+'');
          return quem;
         }       
       }
       function presente(){     
          document.getElementById('dadosCompra').innerHTML='Presente já selecionado.';
       }
       function normal(){     
          document.getElementById('dadosCompra').innerHTML='';
       }
     </script>
 <?php	
  include 'bd/bd.class.php';
   $produtos=Conexao::consulta('select * from produtos where selecionado="nao"');
  foreach($produtos as $item){
   $ids[]=$item['id'];
   $produtos[]=$item['nome'];
   $selecionados[]=$item['selecionado'];
   $parcelaTotal[]=$item['parcelaTotal'];
   $preco[]=$item['preco'];
   $quem[]=$item['quem'];
  }
  
  ///// contador de visitas ////

$a = 0;
include 'contador.php';
   if (isset($_COOKIE['counte'])) {
      $counte = $_COOKIE['counte'] + 1;
   }else{
    $counte = 1;
    $a++;
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","w");
$ss ='<?php $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);

//// fim contador /////
 ?>
</head>
<body> 
   
    <div id="curtina"><img src="images/baloes.gif" height="600px" /></div>
  <form method="post" action="giftlistIndex.aspx" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ContentPlaceHolder1_ibtSearch')" id="form1">
   <table id="tbMain" width="990" border="0" cellpadding="0" cellspacing="0" align="center">
         <div class="abrir_presente"  onclick=produtoSelecionado(produto);>
           <script>produto.push('$itens[$x]');</script>";
           &nbsp
         </div>
    <tr>
     <td width="776" valign="top"> 
      <div class='alianca'>
       <img src="images/bt_lista_casamento.gif" alt="Lista de Casamento" width="131" height="15" border="0" />
       <ul id='nav'>
				<li>
       <span class='tel'>&nbsp Fale com os noivos...</span> <br>
       		<ul>
       			<li>
       <span class='subtel'>Karen<br>&nbsp&nbsp2671-3390<br>&nbsp&nbsp976302776<br><br>
													Lucas<br>&nbsp&nbsp3069-2405<br>&nbsp&nbsp965903940       
       </span>
       			</li>
       		</ul>
       	</li>
       </ul>
      </div>
      <table  border="0" cellpadding="0" cellspacing="0" class="margin_botom_5" >
				<div class='nomes'>
       		<span>
       		KAREN & LUCAS</span>
      		</div>
     	</table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="margin_botom_5">
       <tr>
        <td>
         <table width="100%" border="0" cellpadding="0" cellspacing="0" >
          <tr>
           <td height="2"><font color='white'>
            &nbsp&nbsp Olá, Seja Bem-Vindo!</font>
           </td>
          </tr>
         </table>
        </td>
       </tr>
      </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="margin_botom_5">
       <tr>
        <td id="tdLateral" width="172" valign="top" style="height: 3px">  
         <table width="100%" border="0" cellpadding="0" cellspacing="0" class="bg_menu margin_botom_5">
          <tr>
           <td>
            <div class="menu_total_botom" >
             <img src="images/menu_home.gif" border="0" />
             <img src='images/menu_eletrodomesticos.gif' alt="" border="0" />
             <div id='divMenuLevel11' class='visiblediv'>
              <div id="DeptMenuLateral_rptMenu_divMenuLevel2_0" class="menu_departamentos">
               <strong>
                <div class="menu_sub_departamento" style="cursor:pointer;">
                <?php
                  $itens=array('ESPREMEDOR DE FRUTAS','PROCESSADOR','MICROONDAS','CAFETEIRA','BATEDEIRA');
                  $links=array('http://www.pontofrio.com.br/Eletroportateis/EspremedoresdeFrutas/Espremedor-De-Frutas-Arno-Citrus-Power-Preto-Pa32--7981704.html?IdProduto=4571445&recsource=btermo','http://m.casasbahia.com.br/*/produto/5258995/detalhe?sku=8690963','http://listadecasamento.my-style.in/main.php?produto=MICROONDAS&link=https://www.kopers.com.br/loja/gs-microondas/microondas-consul-cinza-espelhado-20-litros-cm020','http://m.pontofrio.com.br/*/produto//detalhe?sku=4451517','http://m.extra.com.br/*/produto/600092/detalhe?sku=2341078');
                  for($x=0;$x<count($itens);$x++){
                   if( in_array ($itens[$x],$produtos)){
                    echo '<a href="main.php?produto='.$itens[$x].'&link='.$links[$x].'" >'.$itens[$x].'<br></a>';
                   }else{
                    echo "<script>produto.push('$itens[$x]');</script>";
                    echo "<a href='#'><strike onmouseover=presente(); onmouseout=normal(); onclick=produtoSelecionado(produto);>".$itens[$x]."<br></strike></a>";
                   }
                  }
                ?>
                </div>
               </strong>
          </div>
          <img src='images/menu_loucas.gif' alt="" border="0" />
          <span style="display:none;">1</span>
          <div id='divMenuLevel14' class='visiblediv'>
           <div id="DeptMenuLateral_rptMenu_divMenuLevel2_1" class="menu_departamentos">
            <strong>
             <div class="menu_sub_departamento" >
              <?php 
                  $itens=array('APARELHO DE JANTAR','APARELHO DE CAFE');
                  $links=array('http://www.pontofrio.com.br/UtilidadesDomesticas/AparelhosdeJantar/Ate4Pessoas/Aparelho-de-Jantar-e-Lanche-Oxford-Quartier-Tatoo-White-GT61-2495-16-Pecas-6227713.html?gclid=Cj0KEQjwhtO7BRCtwuO9gfTH-fQBEiQAdJ8FY32vC5LCVXBd2KM-Pt4tUBodBY5EShlxEuzfLUAl9n0aAuui8P8HAQ&utm_medium=cpc&utm_source=gp_pla&s_kwcid=AL!427!3!102624224338!!!g!18283950120!&utm_campaign=PROD_Todosprodutos&ef_id=VWPm0QAABS2h0mUN:20160701031334:s','http://www.shoptime.com.br/produto/126073660/conjunto-de-xicaras-para-cha-em-porcelana-12-pecas-preto-e-branco-com-suporte-de-metal-hazi-ud');
                  for($x=0;$x<count($itens);$x++){
                   if( in_array ($itens[$x],$produtos)){
                    echo '<a href="main.php?produto='.$itens[$x].'&link='.$links[$x].'" >'.$itens[$x].'<br></a>';
                   }else{
                    echo "<script>produto.push('$itens[$x]');</script>";
                    echo "<a href='#'><strike onmouseover=presente(); onmouseout=normal(); onclick=produtoSelecionado(produto);>".$itens[$x]."<br></strike></a>";
                   }
                  }
                ?>
               </div>
              </strong>
              </div>
              <div class="invisiblediv">0</div>
              <img src='images/menu_cozinha.gif' alt="" border="0" />
              <div id='divMenuLevel14' class='visiblediv'>
               <div id="DeptMenuLateral_rptMenu_divMenuLevel2_1" class="menu_departamentos">
                <strong>
                 <div class="menu_sub_departamento" style="cursor:pointer;">
                  <?php
                  $itens=array('SUPORTE P/ MICROONDAS','ARMARIO DE COZINHA','MESA DE 4 CADEIRAS','PANELA DE PRESSAO');
                  $links=array('http://www.shopfato.com.br/suporte-p-microondas-branco-25638/p','http://listadecasamento.my-style.in/main.php?produto=ARMARIO%20DE%20COZINHA&link=http://www.casasbahia.com.br/Moveis/movelparaCozinha/CozinhaCompacta/Cozinha-Compacta-4-Pecas-Poquema-Julia-C1---Preto-8158941.html?recsource=busca-int&rectype=busca-693','','http://www.shoptime.com.br/produto/119344169/panela-de-pressao-revestida-4-5-litros-vermelha-clock');
                  for($x=0;$x<count($itens);$x++){
                   if( in_array ($itens[$x],$produtos)){
                    echo '<a href="main.php?produto='.$itens[$x].'&link='.$links[$x].'" >'.$itens[$x].'<br></a>';
                   }else{
                    echo "<script>produto.push('$itens[$x]');</script>";
                    echo "<a href='#'><strike onmouseover=presente(); onmouseout=normal(); onclick=produtoSelecionado(produto);>".$itens[$x]."<br></strike></a>";
                   }
                  }
                  ?>
                 </div>
                </strong>
               </div>
              </div>
              <div class="invisiblediv">0</div>
              <img src='images/menu_utensilios.gif' alt="" border="0" />
              <span style="display:none;">1</span>
              <div id='divMenuLevel14' class='visiblediv'>
               <div id="DeptMenuLateral_rptMenu_divMenuLevel2_1" class="menu_departamentos">
                <strong  onclick="javascript:hidediv('divMenuLevel227')"><div class="menu_sub_departamento" style="cursor:pointer;">
                 <?php
                  $itens=array('MALA DE FERRAMENTAS','TABUA DE PASSAR');
                  $links=array('http://www.extra.com.br/Ferramentas/FerramentasEletricas/Furadeiras/Kit-Oficina-Portatil-Black-Decker-com-Furadeira-de-Impacto-1-2-Black-Decker-e-Maleta-com-42-Acessorios-HD560K-26437.html?gclid=CjwKEAjw-r27BRCzsNyzrMrM-j0SJACp2TiBRzBkpSVifom6Bx9a9updiCJ65ERZa4hAcbRBt-W3hxoCSdXw_wcB&utm_medium=cpc&utm_source=gp_pla&s_kwcid=AL!427!3!94837817787!!!g!120880947867!&utm_campaign=Ferra_Shopping&ef_id=VuwrKQAABC7gw-ze:20160626182753:s','http://www.casaevideo.com.br/webapp/wcs/stores/servlet/pt/auroraesite/t%C3%A1bua-de-passar-madeira-compact-tramontina');
                  for($x=0;$x<count($itens);$x++){
                   if( in_array ($itens[$x],$produtos)){
                    echo '<a href="main.php?produto='.$itens[$x].'&link='.$links[$x].'" >'.$itens[$x].'<br></a>';
                   }else{
                    echo "<script>produto.push('$itens[$x]');</script>";
                    echo "<a href='#'><strike onmouseover=presente(); onmouseout=normal(); onclick=produtoSelecionado(produto);>".$itens[$x]."<br></strike></a>";
                   }
                  }
                 ?>
                </div>
                </strong>
              </div>
             </div>
             <div class="invisiblediv">0</div>
            </div>
            <span style="display:none;">3</span>
            <img src='images/menu_quarto.gif' alt="" border="0" />
            <div id='divMenuLevel1520' class='visiblediv'>
             <div id="DeptMenuLateral_rptMenu_divMenuLevel2_3" class="menu_departamentos">
              <strong  onclick="javascript:hidediv('divMenuLevel2521')">
               <div class="menu_sub_departamento" style="cursor:pointer;">
                <?php
                  $itens=array('KIT EDREDOM','COLCHA DO DIA','CAMA DE CASAL','GUARDA ROUPA','COLCHAO CASAL P/ BOX','CADEIRA P/ COMPUTADOR');
                  $links=array('http://www.extra.com.br/CamaMesaBanho/Edredom/edredomCasal/EDREDOM-CASAL-PADRAO-VERMELHO-COLOR-BLOCK-MALHA-PENTEADA-8908027.html','https://m.magazineluiza.com.br/kit-colcha-cobre-leito-casal-fenix-5-pecas-ouro-velho-a-criativa/p/0863128/cm/kenx/?utm_source=webtraffic+zoom+cpa','http://www.classeacolchoes.com.br/cama-box-casal-bipartido-bau-frontal-pistao-corino-preto-138-188/p?idsku=2005428&gclid=CjwKEAjwqdi7BRCL6Zmjk5-rsTwSJABmrVabYiSChZNZFJYUFiFSUATJIjm7k9ZWoBC3ZmGUtl4A9BoCUg3w_wcB','http://www.marabraz.com.br/guarda-roupa-alvorada-araplac.html?utm_medium=cpc','http://www.casasbahia.com.br/Moveis/Colchoes/ColchaodeCasal/Colchao-Casal-Ortobom-Physical-Spring-23X138X188cm-%E2%80%93-Branco-e-Preto-1972188.html?utm_medium=Cpc&utm_source=GP_PLA&s_kwcid=AL!427!3!95318457035!!!g!121065683067!&utm_campaign=Move_Shopping&ef_id=VuwrKQAABC7gw-ze:20160628023212:s','http://m.pontofrio.com.br/*/produto/516415/detalhe?sku=2198115');
                  for($x=0;$x<count($itens);$x++){
                   if( in_array ($itens[$x],$produtos)){
                    echo '<a href="main.php?produto='.$itens[$x].'&link='.$links[$x].'">'.$itens[$x].'<br></a>';
                   }else{
                    echo "<script>produto.push('$itens[$x]');</script>";
                    echo "<a href='#'><strike onmouseover=presente(); onmouseout=normal(); onclick=produtoSelecionado(produto);>".$itens[$x]."<br></strike></a>";
                   }
                  }
                ?>
               </div>
              </strong>
           </div>
          </div>
            <span style="display:none;">3</span>
            <img src='images/menu_luademel.gif' alt="" border="0" />
            <!--<div id='divMenuLevel1520' class='visiblediv'>-->
             <div id="DeptMenuLateral_rptMenu_divMenuLevel2_3" class="menu_departamentos">
              <strong  onclick="javascript:hidediv('divMenuLevel2521')">
               <div class="menu_sub_departamento" style="cursor:pointer;">
                <?php
                  $itens=array('PRAIA DA PIPA','PASSEIO DE BARCO','PASSEIO DE QUADRICICLO');
                  $links=array('','','');
                  for($x=0;$x<count($itens);$x++){
                   if( in_array ($itens[$x],$produtos)){
                    echo '<a href="main.php?produto='.$itens[$x].'&link='.$links[$x].'" >'.$itens[$x].'<br></a>';
                   }else{
                    echo "<script>produto.push('$itens[$x]');</script>";
                    echo "<a href='#'><strike onmouseover=presente(); onmouseout=normal(); onclick=produtoSelecionado(produto);>".$itens[$x]."<br></strike></a>";
                   }
                  }
                ?>
               </div>
              </strong>
         </div>
        </td>
       </tr> 
      </table>
     </td>
     <td id="tdLateralSeparator" width="5" style="height: 3px">&nbsp;</td>
     <td width="730" valign="top" style="height: 3px">               
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="margin_botom_5">
       <tr> 
        <td width="599" valign="top">
         <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
              <td valign="top" class="bg_lista_casamento_home">
                  <div id="dadosCompra"></div>
              </td>    
          </tr>
         </table>
        </td>
       </tr> 
      </table> 
     </td>
    </tr>
   </table>                    
   <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FBFBFB" class="bg_footer">
    <tr>
     <td width="5" valign="top" class="padding_top_bot_5">&nbsp;</td>
     <td valign="top" class="padding_top_bot_5">       
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <td>&nbsp;</td>
        <td align="center" class="arial_11_footer"><span class="texto">"As muitas águas não podem apagar este amor,<br /> nem os rios afogá-lo; ainda que alguém desse todos os bens de sua casa pelo amor,<br/> certamente o desprezariam." <br />(Cânticos 8:7)</span> 
<?php
echo "<span class='contador'><br>$a Pessoas visitaram esse site e você já visitou $counte vezes</span>";
?> 
        </td>
       </tr>
      </table>
     </td>
    </tr>
   </table>
  </td>
  <td id="tdRightLateral" width="214" align="right" valign="top" class="bg_banners_sky">
       <table width="200" border="0" cellspacing="0" cellpadding="0">
      <tr>
     <td>
       <div class="margim_botom_15">    
      </div>
       <div class="margim_botom_15">  
      </div>
     </td>
    </tr>
   </table>
  </td>
 </tr>
</table>
</form>
</body>
</html>