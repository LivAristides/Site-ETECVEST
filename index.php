<?php
// Verifica se o parâmetro 'p' não está definido na URL
if (!isset($_GET['p'])) {
    // Redireciona para a página home
    header('Location: ?p=home');
    exit(); // Certifica-se de que o código não continue a ser executado após o redirecionamento
}
?>
<?php include_once 'cabeçalho.php' ?>

<body>
    <?php include_once 'navbar.php' ?>
        <?php
        $pagina = filter_input(INPUT_GET, 'p');

        if (empty($pagina) || !isset($pagina)) {
            include_once 'home.php';
        } else {
            if (file_exists($pagina . ".php")) {
                include_once $pagina . ".php";
            } else {
                echo '<div class="alert alert-danger mt-4" role="alert">'
                    . '<h3>Erro 404</h3>'
                    . '<p>Página não encontrada</p>'
                    . '</div>';
            }
        }
        ?>
    <?php include_once 'footer.php' ?>
    <?php include_once 'scripts.php' ?>
</body>

</html>