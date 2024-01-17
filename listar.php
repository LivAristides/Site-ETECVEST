<style>
    .navbar-brand {
        color: black;
    }
    .nav-link {
        color: black;
    }
    .navbar .nav-link.active,
    .nav-link:focus,
    .nav-link:hover {
        color: black;
        transition: 0.3s ease-in-out;
    }
</style>


</br>
</br>
</br>
</br>
</br>
<a href="?p=contato" class="btn m-3 btn-outline-danger float-right section-padding devider justify-content-center" > <i class="bi bi-arrow-left"> Voltar</i></a>
 <!-- Hero -->
 <div id="hero" class="section-padding devider">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                <img src="img/contato2.jpg" width="500px" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <center><h1 class="fw-bold display-4">CONT<span class="text-danger">ATO</span></h1></center>  
                    <p class="landing-content-desc mt-3" style="text-align: center">Lista de Contatos </p>     
                </div>
            </div>
        </div>
    </div>

    </br>
</br>
</br>

   
    <section id="section">
  <div class="container">
    <div id="sobre" class="section-padding devider">
        <div class="container">
        <a href="salvar.php" class="btn btn-outline-danger float-right justify-content-right" > <i class="bi bi-arrow-left"> voltar</i></a>
            <div class="row gy-4 align-items-center">
            <table class="table">
  <thead>
    <tr>
    <th class="text-white"scope="col">ID</th>
      <th class="text-white"scope="col">Nome</th>
      <th class="text-white"scope="col">Curso</th>
      <th class="text-white"scope="col">Mensagem</th>
      <th class="text-white"scope="col">Opções</th>
    </tr>
            </div>
        </div>
    </div>
</section>

<?php
include_once '../class/Contato.php';
$cot=new Contato();
$dados = $cot->listarFirebase();

if(!empty($dados)){
foreach($dados as $chave => $mostrar) {
?>

        <tr>
        <th class="text-white"><?= $chave ?></th>
        <td class="text-white"><?= $mostrar['nome']?></td>
        <td class="text-white"><?= $mostrar['curso']?></td>
        <td class="text-white"><?= $mostrar['mensagem']?></td>
        <td>
        <a href="contato.php" class="btn btn-danger">
        <i class='bx bx-edit-alt' ></i>
                    </a>
                    <a href="?p=excluir&id=<?= $chave ?>" class="btn btn-danger" data-confirm="Excluir"> 
                    <i class='bx bx-trash' ></i>
                    </a>
                </td>
            </tr> 
            <?php
}
}

?>