<?php 
if(isset($_POST['txt_nome']) && isset( $_POST['txt_idade']) ){


$nome1=$_POST['txt_nome'];
$idade1=$_POST['txt_idade'];

setcookie('nome',$nome1, (time()+(20)));
setcookie('idade',$idade1, (time()+(20)));

echo "Nome: ".$nome1."<br>";
echo "idade: ".$idade1."<br>";

echo "<a href='Formulario.html'><h5><b>Voltar</b></h5></a>";
echo "<a href='Visitante1.php'><h5><b>Visitante 1</b></h5></a>";
echo "<a href='Visitante2.php'><h5><b>Visitante 2</b></h5></a>";
}
else
{
	echo "<a href='Formulario.html'><h5><b>Voltar</b></h5></a>";
 }

?>