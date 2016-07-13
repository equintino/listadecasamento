<meta charset="utf-8">
<?php
    include 'bd/bd.class.php';
    
    $tabela='produtos';
    $tabela_='cadastro';
    $produto=$_POST['produto'];
    $email=$_POST['email'];
    $nome=$_POST['nome'];
    $tel=$_POST['tel'];
    $confpresente=$_POST['confpresente'];
    @$parcela=$_POST['parcela'];
    @$completo=$_POST['completo'];
    $act=$_POST['act'];
    @$link=$_POST['link'];
    $link=str_replace('#','*',$link);
    $precoTotal=$_POST['precoTotal'];
    
    if($act=='loja'){
     $parcela=$precoTotal;
     $completo='sim';
    }elseif($parcela==$precoTotal){
     $completo='sim';
    }
    
    if($act==''){
        echo "<script>
                alert('Você não definiu a forma de compra');
                history.go(-1);
             </script>";
        exit;
    }
    
    if($produto=='ARMARIOCOZINHA'){
        $produto='ARMARIO DE COZINHA';
    }elseif($produto=='MESA'){
        $produto='MESA DE 4 CADEIRAS';
    }elseif($produto=='PANELA'){
        $produto='PANELA DE PRESSAO';
    }elseif($produto=='GUARDA'){
        $produto='GUARDA ROUPA';
    }elseif($produto=='CAMA'){
        $produto='CAMA DE CASAL';
    }elseif($produto=='CADEIRA'){
        $produto='CADEIRA P/ COMPUTADOR';
    }elseif($produto=='ESPREMEDOR'){
        $produto='ESPREMEDOR DE FRUTAS';
    }elseif($produto=='APARELHOCAFE'){
        $produto='APARELHO DE CAFE';
    }elseiF($produto=='APARELHOJANTAR'){
        $produto='APARELHO DE JANTAR';
    }elseif($produto=='SOBREMESA'){
        $produto='JOGO DE SOBREMESA';
    }elseif($produto=='SUPORTEMICROONDAS'){
        $produto='SUPORTE P/ MICROONDAS';
    }elseif($produto=='TABUA'){
        $produto='TABUA DE PASSAR';
    }elseif($produto=='MALAFERRAMENTAS'){
        $produto='MALA DE FERRAMENTAS';
    }elseif($produto=='COLCHA'){
        $produto='COLCHA DO DIA';
    }elseif($produto=='CADEIRA'){
        $produto='CADEIRA P/ COMPUTADOR';
    }elseif($produto=='PRAIADAPIPA'){
        $produto='PRAIA DA PIPA';
    }elseif($produto=='PASSEIODEBARCO'){
       $produto='PASSEIO DE BARCO';
    }elseif($produto=='PASSEIODEQUADRICICLO'){
       $produto='PASSEIO DE QUADRICICLO';
    }elseif($produto=='EDREDOM'){
       $produto='KIT EDREDOM';
    }elseif($produto=='COLCHAO'){
       $produto='COLCHAO CASAL P/ BOX';
    }
    else{
        $produto=$produto;
    }
     
    $result=Conexao::consulta("select * from ".$tabela." where nome=\"$produto\"");
    foreach($result as $item){
    $parcelaOld=$item['parcelaTotal'];
    $preco=$item['preco'];
    $descricao=$item['descricao'];
    }
    $parcelaTotal=$parcelaOld+$parcela;
    if($completo=='sim'){
      $selecionado='sim';
    }else{
      $selecionado='nao';
    }
    $dados="  
        `email` = '".$email."',
        `quem` = '".$nome."',
        `selecionado` = '".$selecionado."',
        `tel` = '".$tel."',
        `parcelaTotal` = '".$parcelaTotal."'
             ";
    $where="  
        `nome`='".$produto."'";
      
  /// grava acesso ao site ///
    $agora=mktime(date("H"));
    $data_in=mktime(date("H"));
    $ip=getenv("REMOTE_ADDR");
    @$result=Conexao::gravaBd($nome,$agora,$ip,$produto);
  /// fim hrava acesso ///
    
    $sql_="INSERT INTO `$tabela_`(`id`, `presenteador`, `email`, `tel`, `valor`, `produto`,`act`,`link`) VALUES ('','".$nome."','".$email."','".$tel."','".$parcela."','".$produto."','".$act."','".$link."')";
    if($confpresente=='sim'){
    $result=Conexao::atualizaBd($tabela,$dados,$where);
    $result_=Conexao::grava3Bd($tabela_,$sql_);
     @$totalParcela=$parcela+$parcela1+$parcela2+$parcela3+$parcela4;
     header('Location: agradecimento.php?totalParcela='.$totalParcela.'&act='.$act.'&produto='.$produto.'&link='.$link.'&descricao='.$descricao.'');
    }else{
        echo '<script>
                alert("VOCÊ NÃO CONFIRMOU A SELEÇÃO DO PRESENTE.");
                history.go(-1);
            </script>';
        exit;
    }
?>