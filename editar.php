 <?php include_once"head.php" ?>
 <?php include_once"config.php"; ?>
<?php 
$id = $_GET['id'];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, "utf8");
$result_nomes = "SELECT * FROM tblistacl WHERE id = '$id' LIMIT 1";
$resultado_nomes = mysqli_query($conn , $result_nomes);
while ($linha = mysqli_fetch_array($resultado_nomes)){
    $id = $linha['id'];
    $data= $linha ['data'];
    $nome = $linha['nome'];
    $cidade = $linha['cidade'];
    $estado = $linha['estado'];
    $celular = $linha['celular'];
 
  

}

?>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        !-- Sidebar navigation-->
        <?php include_once"menu.php" ?><!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
       <!--  Header Start -->
       <?php include_once"menumobile.php" ?>
      <!--  Header End -->
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Editar cadastro de cliente</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" name="cliente" action="atualizar.php">
                    <div class="mb-3">
                      <label  class="form-label"></label>
                      <input type="hidden" class="form-control"  name="id" value="<?php echo $id;?>">
                     
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Nome</label>
                      <input type="text" class="form-control"  name="nome" value="<?php echo $nome;?>">
                     
                    </div>
                    
                    <div class="mb-3">
                      <label  class="form-label">Aniversario</label>
                      <input type="date" class="form-control"  name="data" value="<?php echo $data;?>">
                   
                    </div>
                     <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Sexo</label>
                        <select id="disabledSelect" class="form-select">
                          <option>Masculino</option>
                          <option>Feminino</option>
                        </select>
                      </div>
                    <div class="mb-3">
                      <label class="form-label">Telefone</label>
                      <input type="text" class="form-control"  name="celular" value="<?php echo $celular;?>">
                      
                    </div>
                    <div class="mb-3">
                      <label f class="form-label">Cidade </label>
                      <input type="text" class="form-control"  name="cidade" value="<?php echo $cidade;?>">
                  
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Estado</label>
                      <input type="text" class="form-control"  name="estado" value="<?php echo $estado;?>">
                    
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Atualizar cadastro</button>
                  </form>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

