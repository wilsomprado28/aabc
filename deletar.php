<?php include_once"config.php"; ?>
<?php  
$id = $_GET['id'];
$sql = "DELETE FROM tblistacl WHERE id='$id'";
if(mysqli_query($conn, $sql)){
	echo "<script>alert('Cadastrado deletado com sucesso!');
	window.location = 'index.php';</script>";
	//header("Location: addtbc.php");
}else{
	echo 'Deu Erro';
}
?>