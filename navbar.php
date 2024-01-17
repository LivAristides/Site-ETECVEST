<style>
    .navbar {
        transition: 0.3s ease-in-out;
        z-index: 99;
    }

    .offcanvas {
        transition: 0.3s ease-in-out;
    }

    .navbar-brand {
        color: white;
    }

    .nav-link {
        font-weight: 500;
        color: white;
        position: relative;
        transition: 0.3s ease-in-out;
    }

    .navbar .nav-link.active,
    .nav-link:focus,
    .nav-link:hover {
        color: white;
        transition: 0.3s ease-in-out;
    }

    .navbar-brand:hover {
        color: red;
    }


    .collapse .nav-link::after {
        content: "";
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: red;
        transition: width 0.3s;
        transition: 0.3s ease-in-out;
        transform: scaleX(0);
        transform-origin: left;
    }

    .nav-link.active::after,
    .nav-link:focus::after,
    .nav-link:hover::after {
        transform: scaleX(1);
    }

    .nav-link.active {
        color: gray;
    }


    .offcanvas {
        display: none;
        border: none;
    }

    .offcanvas-body .nav-link {
        color: black;
    }

    .offcanvas-body .nav-link .active {
        color: black;
    }

    @media screen and (max-width: 767px) {
        .offcanvas {
            display: block;
        }

        #navbar-nav-desktop {
            display: none;
        }
    }

    @media screen and (max-width: 415px) {
        #offcanvasWithBothOptions {
            width: 90%;
        }
    }

    .white-nav {
        background-color: white !important;
    }

    .navbar.white-nav.navbar-brand {
        color: black;
    }
</style>

<nav class="navbar navbar-expand-md navbar-sticky fixed-top" style="padding: 20px">
    <div class="container">
        <a class="navbar-brand" href="?p=home">Etec<span class="text-danger">Vest</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasWithBothOptions" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation" id="toggle-button-nav" style="border: none">
            <ion-icon class="menu-toggle" name="menu-outline" style=" font-size: 30px; color: white"></ion-icon>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="margin-left: auto" id="navbar-nav-desktop">
                <a class="nav-link <?php echo ($pagina === '' || $pagina === 'home') ? 'active' : ''; ?>"
                    href="?p=home">Home</a>
                <a class="nav-link" href="index.php#conteudo">Conteúdo</a>
                <a class="nav-link <?php echo ($pagina === '' || $pagina === 'enem') ? 'active' : ''; ?>"
                    href="?p=enem">Enem</a>
                <a class="nav-link <?php echo ($pagina === '' || $pagina === 'unicamp') ? 'active' : ''; ?>"
                    href="?p=unicamp">Unicamp</a>
                <a class="nav-link <?php echo ($pagina === '' || $pagina === 'fuvest') ? 'active' : ''; ?>"
                    href="?p=fuvest">Fuvest</a>
                <a class="nav-link <?php echo ($pagina === '' || $pagina === 'fatec') ? 'active' : ''; ?>"
                    href="?p=fatec">Fatec</a>
                <a class="nav-link <?php echo ($pagina === '' || $pagina === 'contato') ? 'active' : ''; ?>"
                    href="?p=contato">Contato</a>
                    <a class="<?php echo ($pagina === '' || $pagina === 'enemquestao') ? 'active' : ''; ?>"
                    href="?p=enemquestao"></a>
                    <a class="<?php echo ($pagina === '' || $pagina === 'cursos') ? 'active' : ''; ?>"
                    href="?p=cursos"></a>
            </div>
        </div>
    </div>

    <!--SIDEBAR-->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="container">
            <div class="offcanvas-header mt-3">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr>
            <div class="offcanvas-body">
                <a class="nav-link <?php echo ($pagina === '' || $pagina === 'home') ? 'active' : ''; ?>" href="?p=home"
                    style="color: black">Home</a>
                <a class="nav-link mt-3" href="#conteudo">Conteúdos</a>
                <a class="nav-link mt-3" href="enem.php">Enem</a>
                <a class="nav-link mt-3" href="unicamp.php">Unicamp</a>
                <a class="nav-link mt-3" href="fuvest.php">Fuvest</a>
                <a class="nav-link mt-3" href="fatec.php">Fatec</a>
                <a class="nav-link mt-3" href="contato.php">Contato</a>
            </div>
        </div>
    </div>
</nav>

<script>
    const links = document.querySelectorAll('.nav-link');
    const currentURL = window.location.href;

    links.forEach(link => {
        if (link.href === currentURL) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
</script>

<script>
    window.addEventListener("scroll", function () {
        var navbar = document.querySelector(".navbar-sticky");
        var navLinks = document.querySelectorAll(".nav-link");
        var navbarBrand = document.querySelector(".navbar-brand");

        if (window.scrollY > 0) {
            navbar.classList.add("bg-white");
            navbarBrand.classList.add("text-dark");
            
            navLinks.forEach(function (link) {
                link.classList.add("text-dark");
            });
        } else {
            navbar.classList.remove("bg-white");
            navbarBrand.classList.remove("text-dark");
            
            navLinks.forEach(function (link) {
                link.classList.remove("text-dark");
            });
        }
    });
</script>