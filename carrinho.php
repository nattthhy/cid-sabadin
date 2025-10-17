<?php
session_start();

if (!isset($_SESSION['email'])) 
{
    
    unset($_SESSION['email']); 
    unset($_SESSION['senha']); 
    
    
    header('location: mclog.php');
    exit;
}


$logado = $_SESSION['email']; 


?>

<!DOCTYPE html>
<html>
<head>
	<title>carrinho mcdonalds</title>
	<link rel="stylesheet"  href="carrinho.css">

</head>
<body>
<h2>carrinho</h2>
<div class="carrinho-container">


<?php
    
    $items  = array(['imagem' =>'vermelho.jpeg','preco'=>'200'],
 	  ['imagem' =>'amarelo.jpeg','preco'=>'100'],
 	  ['imagem' =>'prof.jpeg','preco'=>'300'] );


    foreach ($items as $key => $value) {
   
?>
<div class="produto">
	<img src="<?php echo $value['imagem']?>"/>
	<a href="?Adicionar=<?php echo $key ?>">Adicionar ao carrinho</a>
</div>
<?php
    }
?>
</div>
</body>
</html>