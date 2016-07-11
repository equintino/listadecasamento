<meta charset='utf-8'>
<?php
 include 'bd/bd.class.php';
 
 $produtos=$_GET['produto'];
 $nome_=mb_strtoupper($_GET['nome']);
    $consulta=Conexao::consulta('select * from cadastro where cadastro.presenteador like "%'.$nome_.'%" ');   
  if($consulta){
    header('Location: agradecimento.php?nome='.$nome_.'&produtos='.$produtos.'&resumo=1');
  }else{
      echo "<script>
                var nome='$nome_';
                alert('Infelizmente ' + nome + ', não encontrei nenhum presente no seu nome em nossos registros');
                history.go(-1);
            </script>"; 
      exit;
  }
?>