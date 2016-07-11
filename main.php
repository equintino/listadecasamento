<meta charset='utf-8'>
<link href='css/style.css' rel='stylesheet' type='text/css' />
<script>
 function btHabilita(valor){
  //var valor='aqui';
  if(document.getElementById('formaPag').value=='loja'){
   document.getElementById('parcela').style.display='none';
   parcela = valor;
  }
  if(document.getElementById('formaPag').value=='deposito'){
   document.getElementById('parcela').style.display='block';
  }
 }
</script>
<?php
    include 'bd/bd.class.php';
    
    $produto=$_GET['produto'];
    @$link=$_GET["link"];
    $link=str_replace('*','#',$link);
    if($produto=='ARMARIO DE COZINHA'){
        $produto_='ARMARIOCOZINHA';
    }elseif($produto=='MESA DE 4 CADEIRAS'){
        $produto_='MESA';
    }elseif($produto=='PANELA DE PRESSAO'){
        $produto_='PANELA';
    }elseif($produto=='GUARDA ROUPA'){
        $produto_='GUARDA';
    }elseif($produto=='CAMA DE CASAL'){
        $produto_='CAMA';
    }elseif($produto=='CADEIRA P/ COMPUTADOR'){
        $produto_='CADEIRA';
    }elseif($produto=='ESPREMEDOR DE FRUTAS'){
        $produto_='ESPREMEDOR';
    }elseif($produto=='APARELHO DE CAFE'){
        $produto_='APARELHOCAFE';
    }elseiF($produto=='APARELHO DE JANTAR'){
        $produto_='APARELHOJANTAR';
    }elseif($produto=='JOGO DE SOBREMESA'){
        $produto_='SOBREMESA';
    }elseif($produto=='SUPORTE P/ MICROONDAS'){
        $produto_='SUPORTEMICROONDAS';
    }elseif($produto=='TABUA DE PASSAR'){
        $produto_='TABUA';
    }elseif($produto=='MALA DE FERRAMENTAS'){
        $produto_='MALAFERRAMENTAS';
    }elseif($produto=='COLCHA DO DIA'){
        $produto_='COLCHA';
    }elseif($produto=='CADEIRA P/ COMPUTADOR'){
        $produto_='CADEIRA';
    }elseif($produto=='PRAIA DA PIPA'){
        $produto_='PRAIADAPIPA';
    }elseif($produto=='PASSEIO DE QUADRICICLO'){
        $produto_='PASSEIODEQUADRICICLO';
    }elseif($produto=='PASSEIO DE BARCO'){
        $produto_='PASSEIODEBARCO';
    }elseif($produto=='KIT EDREDOM'){
        $produto_='EDREDOM';
    }elseif($produto=='COLCHAO CASAL P/ BOX'){
        $produto_='COLCHAO';
    }
    else{
        $produto_=$produto;
    }
?>
    <div align='center' style="background:white" onmouseover="this.style.background='#D8F6CE';" onmouseout="this.style.background='white';" class='fundomain'>
        <br>
        <h2>QUERO PRESENTEAR OS NOIVOS COM ESTE PRODUTO</h2>
        <form action='envia.php' method="POST" id='form1'>
            <input name='nome' type='text' size='50' placeholder="Digite aqui seu nome" required /><br>
            <input name='email' type='email' size='50' placeholder="Digite aqui seu e-mail" required /><br>
            <input name="tel" type="tel" size='50' placeholder='Digite aqui seu telefone' /><br><br>
            Presente selecionado: <b><?= $produto ?></b><br><br>
            <img src=<?= 'images/'.$produto_.'.png'; ?> height='120px' />
            <?php 
              $produtosDb=Conexao::consulta("select * from produtos where nome=\"$produto\"");
              $precoTotal=$produtosDb[0]['preco']-$produtosDb[0]['parcelaTotal'];
              $preco=$produtosDb[0]['preco'];
              $valor1=10;
            if($produtosDb[0]['parcelaTotal'] == 0){
              if($link){
                echo "<a href=$link  target='_blank'>&nbsp&nbsp<img src='images/IRALOJA.png' height='20px' /></a><br><br>";
              }
            }
              if($produto!='PRAIA DA PIPA' && $produto!='PASSEIO DE BARCO' && $produto!='PASSEIO DE QUADRICICLO' && $produto!='MESA DE 4 CADEIRAS'){
               echo '<div id="parcela">';
               if($produtosDb[0]['nome']==$produto){
                if($precoTotal > 900){
                 echo '<font face="verdana" color="green">QUERO CONTRIBUIR COM O VALOR:<br></font>';
                   $valor1 = $precoTotal / 7;
                   for($x=1;$x<7;$x++){
                     echo '<input type="radio" name="parcela" value="'.$valor1*($x).'" required >R$ '.number_format($valor1*($x),2,',','.');
                   }
                   echo '<input type="radio" name="parcela" value="'.$valor1*$x.'" checked>R$ '.number_format($valor1*$x,2,',','.');
                }elseif($precoTotal > 500){
                   echo '<font face="verdana" color="green">QUERO CONTRIBUIR COM O VALOR:<br></font>';
                   $valor1 = $precoTotal / 5;
                   for($x=1;$x<5;$x++){
                     echo '<input type="radio" name="parcela" value="'.$valor1*($x).'" required>R$ '.number_format($valor1*($x),2,',','.');
                   }
                   echo '<input type="radio" name="parcela" value="'.$valor1*$x.'" checked>R$ '.number_format($valor1*$x,2,',','.');
                }elseif($precoTotal > 300){
                   echo '<font face="verdana" color="green">QUERO CONTRIBUIR COM O VALOR:<br></font>';
                   $valor1 = $precoTotal / 3;
                   for($x=1;$x<3;$x++){
                     echo '<input type="radio" onclick="bntHabilita()"; name="parcela" value="'.$valor1*($x).'" required>R$ '.number_format($valor1*($x),2,',','.');
                   }
                   echo '<input type="radio" name="parcela" value="'.$valor1*$x.'" checked>R$ '.number_format($valor1*$x,2,',','.');
                }else{
                   $valor1 = $precoTotal;
                   echo '<font face="verdana" color="green">VALOR RESTANTE:<br></font>';
                   echo 'R$ '.number_format($valor1,2,',','.');
                   echo '<input type="hidden" name=completo value=sim >';
                   echo "<input type='hidden' value='".$valor1."' name='parcela' />";
                }
               }
               if(($produtosDb[0]['nome'] == 'COLCHAO CASAL P/ BOX' || $produtosDb[0]['nome'] == 'GUARDA ROUPA' || $produtosDb[0]['nome'] == 'COLCHA DO DIA' || $produtosDb[0]['nome'] == 'ARMARIO DE COZINHA') && ($produtosDb[0]['parcelaTotal'] == 0 )){
                echo '<br><i>frete incluso</i><br>';
               }
               if($produtosDb[0]['parcelaTotal'] == 0){
                echo '</div>';
                echo '<br>SELECIONE AQUI A FORMA DA COMPRA<br>
                       <select name="act" onchange="btHabilita('.$precoTotal.')" id="formaPag">
                        <option value=""></option>
                        <option value="loja">Desejo comprar o produto na loja</option>
                        <option value="deposito">Desejo depositar ou transferir o valor selecionado</option>
                       </select>';
                }else{
                 echo '<input type="hidden" name="act" value="deposito">';
                }
                echo '<br>';
               }
               if($produto=='PRAIA DA PIPA'){
                echo '<br><font face="verdana" color="green">PASSEIO PARA A PRAIA DA PIPA <b>R$ 180.00</b></font><br>';
                echo "<input type='hidden' value='deposito' name='act'>";
                if($precoTotal > 300){
                   echo '<font face="verdana" color="green">QUERO CONTRIBUIR COM O VALOR:<br></font>';
                   $valor1 = $precoTotal / 3;
                   for($x=1;$x<3;$x++){
                     echo '<input type="radio" onclick="bntHabilita()"; name="parcela" value="'.$valor1*($x).'" required>R$ '.number_format($valor1*($x),2,',','.');
                   }
                   echo '<input type="radio" name="parcela" value="'.$valor1*$x.'" checked>R$ '.number_format($valor1*$x,2,',','.');
                 }
                 echo "<input type='hidden' value='".$precoTotal."' name='parcela'>"; 
                 echo "<input type='hidden' value='sim' name='completo'>";
                }elseif($produto=='PASSEIO DE BARCO'){
                 echo '<br><font face="verdana" color="green">PASSEIO DE BARCO NA PRAIA DE MARACAJAÚ <br><br>Valor restante <b>R$ '.$precoTotal.'</b></font><br>';
                 echo "<input type='hidden' value='deposito' name='act'>";
                 if($precoTotal > 300){
                  echo '<font face="verdana" color="green">QUERO CONTRIBUIR COM O VALOR:<br></font>';
                  $valor1 = $precoTotal / 3;
                  for($x=1;$x<3;$x++){
                   echo '<input type="radio" onclick="bntHabilita()"; name="parcela" value="'.$valor1*($x).'" required>R$ '.number_format($valor1*($x),2,',','.');
                  }
                  echo '<input type="radio" name="parcela" value="'.$valor1*$x.'" checked>R$ '.number_format($valor1*$x,2,',','.');
                  echo '<br>';
                 }elseif($precoTotal > 230){
                  echo '<font face="verdana" color="green">QUERO CONTRIBUIR COM O VALOR:<br></font>';
                  $valor1 = $precoTotal / 2;
                  for($x=1;$x<2;$x++){
                   echo '<input type="radio" onclick="bntHabilita()"; name="parcela" value="'.$valor1*($x).'" required>R$ '.number_format($valor1*($x),2,',','.');
                  }
                  echo '<input type="radio" name="parcela" value="'.$valor1*$x.'" checked>R$ '.number_format($valor1*$x,2,',','.');
                  echo '<br>';
                 }else{
                  echo "<input type='hidden' value='".$precoTotal."' name='parcela'>"; 
                  echo "<input type='hidden' value='sim' name='completo'>";
                 }
                }elseif($produto=='PASSEIO DE QUADRICICLO'){
                 echo '<br><font face="verdana" color="green">PASSEIO DE QUADRICICLO <b>R$ 280,00</b></font><br>';
                 echo "<input type='hidden' value='deposito' name='act'>";
                 echo "<input type='hidden' value='".$precoTotal."' name='parcela'>"; 
                 echo "<input type='hidden' value='sim' name='completo'>";
                }elseif($produto=='ESPREMEDOR DE FRUTAS'){
                 echo '<br><font face="verdana" color="green">
Espremedor De Frutas Arno Citrus Power Preto Pa32</font>';
                }elseif($produto == 'MESA DE 4 CADEIRAS'){
                 echo '<br><font face="verdana" color="green">
Mesa Dobrável com Banqueta Mobile <b>R$ 260,00</b></font><br>';
                 echo "<input type='hidden' value='deposito' name='act'>";
                 echo "<input type='hidden' value='".$precoTotal."' name='parcela'>"; 
                }
               ?>
            <input type="hidden" name="precoTotal" value="<?= $precoTotal; ?>" >
            <br>
            <input type='hidden' value=<?= $produto_ ;?> name='produto' />
            <input type='hidden' value=<?= $link ;?> name='link' />
            confirma? <input type='radio' name='confpresente' value='sim' required>SIM
            <input type='radio' name='confpresente' value='nao'>NÃO
            <br>
            <input type='button' value='CANCELAR' onclick='history.go(-1)'>
            <input type='submit' value='AVANÇAR' />
        </form>
        <p>Endereço para entrega: <b>Rua Antônio de Assis, 4 - Bonsucesso / RJ - CEP: 21044-020</b></p><br><br>
    </div>