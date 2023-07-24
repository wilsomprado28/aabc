
<?php include_once"config.php"; ?>
<?php
echo $nome = $_POST['nome'];
echo $data = date('Y-m-d');
echo$cidade = $_POST['cidade'];
echo$estado = $_POST['estado'];
echo$celular = $_POST['celular'];
//$sexo= $_POST['sexo'];

$sql = "INSERT INTO tblistacl(nome,data,cidade,estado,celular) VALUES ('$nome','$data','$cidade','$estado','$celular')";

if (mysqli_query($conn, $sql)) {
  header("Location: cadastrar.php");
 }else{
   echo "Deu Erro" . $sql . "<br>" . mysqli_error($conn);
 }

mysli_close($conn);

 ?>
