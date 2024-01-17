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
<a href="?p=home" class="btn m-3 btn-outline-danger float-right section-padding devider justify-content-center" > <i class="bi bi-arrow-left"> Voltar</i></a>
 <!-- Hero -->
 <div id="hero" class="section-padding devider">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                <img src="img/contato2.jpg" width="500px" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <center><h1 class="fw-bold display-4">CONT<span class="text-danger">ATO</span></h1></center>  
                    <p class="landing-content-desc mt-3" style="text-align: center">Deseja escrever algo referente ao nosso projeto? Basta apenas escrever no formulário abaixo! </p>     
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
        <a href="listar.php" class="btn btn-outline-danger float-right justify-content-right" > <i class="bi bi-arrow-left"> lista </i></a> 
        </br>   
        </br>
        <div class="row gy-4 align-items-center">
            <form method="post">
            <div class="form-group mb-3">
    <label for="formGroupExampleInput" class="form-label">Nome</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="txtnome">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Curso</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="txtcurso">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtmensagem"></textarea>
</div>
  <button type="submit" class="btn btn-danger" name="btnenviar" value="Enviar">Enviar</button>
</form>
            </div>
        </div>
    </div>
</section>

<?php
if (filter_input(INPUT_POST, 'btnenviar')) {
    $nome = filter_input(INPUT_POST, 'txtnome');
    $curso = filter_input(INPUT_POST, 'txtcurso');
    $mensagem = filter_input(INPUT_POST, 'txtmensagem');
    include_once './class/Contato.php';
    $cot = new Contato();
    /*
    $cat->setNome($nome);
    $cat->setDescricao($descricao);
    
    $cat->salvar();    
    */
$dados = array(
    'nome' => $nome, 
    'curso' => $curso, 
    'mensagem' => $mensagem, 
);
$cot->setDadosJson(json_encode($dados));
$msg = $cot->salvarFirebase() === true ? 'erro' : 'salvo';

    ?>
    <div class="container">
    <div class="alert alert-primary" role="alert">
        <?= $msg ?>
    </div>
</div>
    <?php
}
?>
