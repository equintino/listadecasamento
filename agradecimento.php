<html>
    <head>
<meta charset=utf-8>
<link href='css/style.css' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/popup-window.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="popup-window.js"></script>
    </head>
    <body onload="popup_window_show('#popup_window_id_767BA48AD43A3E3ABCA82A8EB8CB976F', { pos : 'window-left', parent : this, x : 0, y : 0, width : 'auto' }); return false;" >
<!-- Popup Window start -->
<div id="popup_window_id_767BA48AD43A3E3ABCA82A8EB8CB976F" class="popup_window_css">
    <table class="popup_window_css">
        <tr>
            <td class="popup_window_css">
                <div class="popup_window_css_head">
                    <img src="images/close_.gif" alt="" width="0" height="9" />
                </div>
                <div class="popup_window_css_body">
                </div>
            </td>
        </tr>
    </table>
</div>
<!-- Popup Window end -->
<br>
<?php
include 'bd/bd.class.php';

@$act=$_GET['act'];
@$produtos=explode(',',$_GET['produtos']);
@$descricao=$_GET['descricao'];
@$link=$_GET['link'];
@$link=str_replace('*','#',$link);
@$resumo=$_GET['resumo'];
@$nome_=$_GET['nome'];

$rows=Conexao::linhasBd($nome_);

$sql_='SELECT * FROM produtos WHERE parcelaTotal>0';
$produtos_=Conexao::consulta($sql_);
foreach($produtos_ as $item_){
 $produtos2[]=$item_['nome'];
}

 if($resumo==1){
  for($x=0;$x<count($produtos2);$x++){
    $sql='select * from produtos INNER JOIN cadastro ON produtos.nome=cadastro.produto where cadastro.presenteador like "%'.$nome_.'%" AND cadastro.produto="'.$produtos2[$x].'"';
    $consulta=Conexao::consulta($sql);
  if($consulta){
    foreach($consulta as $item){
        @$descricao = $item['descricao'];
        @$valor = $item['valor'];
        @$act = $item['act'];
        @$link = $item['link'];
    }
  @$link=str_replace('*','#',$link);

   if(@$act=='deposito'){
    echo "
       <table align=center class='agradecimento' border=1 cellspacing=0 >
        <tr><td align=right>Favorecido: </td><td>KAREN CAROLINA PEIXOTO QUINTINO</td></tr>
        <tr><td>CPF </td><td>158.699.727-01</td></tr>
        <tr><td>Banco </td><td>BRADESCO</td></tr>
        <tr><td>Agência </td><td>0129-5</td></tr>
        <tr><td>Conta Poupança </td><td>1018251-4</td></tr>
        <tr><td>Valor a depositar </td><td>R$".number_format($valor,2,',','.')."</td></tr>
       </table>
    ";
   }else{
    echo "
       <table align=center class='agradecimento' border=1 cellspacing=0 >
        <tr><td align=right>Produto </td><td>&nbsp".@$descricao."</td></tr>
        <tr><td align=right>Link da Loja </td><td><a href=".$link." target='_blank'> >>> Ir à loja <<< </a></td></tr>
        <tr><td align=right>Endereço de entrega </td><td>&nbspRua Antônio de Assis, 4 - Bonsucesso / RJ - CEP: 21044-020</td></tr>
       </table>
  ";
   }
  }
 }
}else{
 if(@$act=='deposito'){
   @$total=$_GET['totalParcela'];
    echo "
       <table align=center class='agradecimento' border=1 cellspacing=0 >
        <tr><td align=right>Favorecido: </td><td>KAREN CAROLINA PEIXOTO QUINTINO</td></tr>
        <tr><td>CPF </td><td>158.699.727-01</td></tr>
        <tr><td>Banco </td><td>BRADESCO</td></tr>
        <tr><td>Agência </td><td>0129-5</td></tr>
        <tr><td>Conta Poupança </td><td>1018251-4</td></tr>
        <tr><td>Valor a depositar </td><td>R$".number_format($total,2,',','.')."</td></tr>
       </table>
  ";
 }else{
    echo "
       <table align=center class='agradecimento' border=1 cellspacing=0 >
        <tr><td align=right>Produto </td><td>&nbsp".$descricao."</td></tr>
        <tr><td align=right>Link da Loja </td><td><a href=".$link." target='_blank'> >>> Ir à loja <<< </a></td></tr>
        <tr><td align=right>Endereço de entrega </td><td>&nbspRua Antônio de Assis, 4 - Bonsucesso / RJ - CEP: 21044-020</td></tr>
       </table>
  ";
 }
}
?>
    <table align='center'>
        <tr><td>
        <input type="button" onclick="window.location.href='index.php'" value="    Voltar    ">
        <input type='button' value='IMPRIMIR' onclick='window.print()' >
        </td></tr>
    </table>
    </body>
</html>