
<?php include_once"config.php"; ?>
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$celular = $_POST['celular'];
//$sexo= $_POST['sexo'];

$sql = "UPDATE tblistacl SET nome='$nome', data='$data', cidade='$cidade', estado='$estado', celular='$celular' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  header("Location: editar.php?id=$id");
 }else{
   echo "Deu Erro" . $sql . "<br>" . mysqli_error($conn);
 }

mysli_close($conn);

 ?>
