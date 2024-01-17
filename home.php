<style>
    #carousel-img img {
        background-size: cover;
        background-repeat: no-repeat;
    }

    #carousel-img .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
        z-index: 1;
    }

    .carousel-caption {
        position: absolute;
        top: 58%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 100%;
        text-align: center;
    }

    .width-100 {
        width: 180vh !important;
    }

    @media screen and (max-width: 1000px) {
        .width-100 {
            width: 150vh !important;
        }

        .carousel-caption {
            top: 51%;
        }
    }

    @media screen and (max-width: 550px) {
        .width-100 {
            width: 150vh !important;
        }

        .carousel-caption {
            top: 48.3%;
        }
    }

    .caption-content {
        width: 70%;
    }

    .landing-content-title {
        font-size: 4rem;
    }

    .landing-content-desc {
        font-size: 20px;
    }

    .buttons-landing {
        display: flex;
    }

    .buttons-landing a {
        margin-top: 20px;
        margin-left: 10px;
    }

    @media screen and (max-width: 420px) {
        .landing-content-title {
            font-size: 3.5rem;
        }

        .carousel-caption {
            top: 46%;
        }
    }

    @media screen and (max-width: 400px) {
        .landing-content-title {
            font-size: 3.5rem;
        }

        .carousel-caption {
            top: 45%;
        }
    }

    @media screen and (max-width: 370px) {
        .landing-content-title {
            font-size: 3.3rem;
        }

        .carousel-caption {
            top: 46.5%;
        }
    }

    @media screen and (max-width: 320px) {
        .landing-content-title {
            font-size: 2.9rem;
        }

        .carousel-caption {
            top: 46%;
        }
    }

    /*HEIGHT*/

    @media screen and (height: 1366px) {
        .width-100 {
            width: 130vh !important;
        }

        .carousel-caption {
            top: 49%;
        }

        .landing-content-title {
            font-size: 5.5rem;
        }

        .landing-content-desc {
            font-size: 30px;
        }

        .buttons-landing a {
            font-size: 30px;
        }
    }

    @media screen and (height: 1280px) {
        .width-100 {
            width: 160vh !important;
        }

        .carousel-caption {
            top: 49%;
        }

        .landing-content-title {
            font-size: 5.5rem;
        }

        .landing-content-desc {
            font-size: 30px;
        }

        .buttons-landing a {
            font-size: 30px;
        }
    }

    @media screen and (height: 1138px) {
        .width-100 {
            width: 140vh !important;
        }

        .carousel-caption {
            top: 48.5%;
        }

        .landing-content-title {
            font-size: 5rem;
        }

        .landing-content-desc {
            font-size: 25px;
        }

        .buttons-landing a {
            font-size: 25px
        }
    }

    @media screen and (height: 823px) {
        .width-100 {
            width: 160vh !important;
        }

        .carousel-caption {
            top: 45%;
        }

        .landing-content-title {
            font-size: 3.2rem;
        }

        .landing-content-desc {
            font-size: 20px;
        }
    }

    @media screen and (height: 812px) {
        .width-100 {
            width: 170vh !important;
        }

        .carousel-caption {
            top: 44%;
        }

        .landing-content-title {
            font-size: 3.2rem;
        }

        .landing-content-desc {
            font-size: 20px;
        }
    }

    @media screen and (height: 786px) {
        .width-100 {
            width: 170vh !important;
        }

        .carousel-caption {
            top: 44%;
        }

        .landing-content-title {
            font-size: 3.2rem;
        }

        .landing-content-desc {
            font-size: 20px;
        }
    }

    @media screen and (height: 745px) {
        .width-100 {
            width: 160vh !important;
        }

        .carousel-caption {
            top: 45%;
        }

        .landing-content-title {
            font-size: 2.8rem;
        }

        .landing-content-desc {
            font-size: 18px;
        }
    }

    @media screen and (height: 740px) {
        .width-100 {
            width: 160vh !important;
        }

        .carousel-caption {
            top: 44%;
        }

        .landing-content-title {
            font-size: 2.8rem;
        }

        .landing-content-desc {
            font-size: 18px;
        }
    }

    @media screen and (height: 736px) {
        .width-100 {
            width: 165vh !important;
        }


        .landing-content-title {
            font-size: 3rem;
        }

        .landing-content-desc {
            font-size: 18px;
        }
    }

    @media screen and (height: 732px) {
        .width-100 {
            width: 165vh !important;
        }


        .landing-content-title {
            font-size: 3rem;
        }

        .landing-content-desc {
            font-size: 18px;
        }
    }

    @media screen and (height: 731px) {
        .width-100 {
            width: 165vh !important;
        }


        .landing-content-title {
            font-size: 3rem;
        }

        .landing-content-desc {
            font-size: 18px;
        }
    }

    @media screen and (height: 720px) {
        .width-100 {
            width: 165vh !important;
        }


        .landing-content-title {
            font-size: 3.2rem;
        }
    }

    @media screen and (height: 667px) {
        .width-100 {
            width: 180vh !important;
        }

        .carousel-caption {
            top: 45.5%;
        }

        .landing-content-title {
            font-size: 2.8rem;
        }

        .landing-content-desc {
            font-size: 17px;
        }
    }

    @media screen and (height: 658px) {
        .width-100 {
            width: 180vh !important;
        }

        .carousel-caption {
            top: 45.5%;
        }

        .landing-content-title {
            font-size: 2.8rem;
        }

        .landing-content-desc {
            font-size: 17px;
        }
    }

    @media screen and (height: 640px) {
        .width-100 {
            width: 180vh !important;
        }

        .carousel-caption {
            top: 45.5%;
        }

        .landing-content-title {
            font-size: 2.8rem;
        }

        .landing-content-desc {
            font-size: 17px;
        }
    }


    /* card */

    #cards-home-page .card {
        margin-left: 30px;
        margin-bottom: 15px;
        margin-top: 50px;
        border: none;
        background: transparent;
    }

    @media screen and (max-width: 767px) {
        #cards-home-page .card {
            margin-left: 0px;
            margin-bottom: 15px;
        }
    }
</style>

<div id="carouselExampleCaptions" class="carousel slide" style="margin-top: -128px;">
    <div class="carousel-inner mb-5" id="carousel-img">
        <div class="carousel-item active">
            <div class="overlay"></div>
            <img src="img/imageviewer.jpeg" class="d-block width-100" alt="...">
            <div class="carousel-caption mt-3 d-md-block">
                <div class="caption-content container">
                    <h3 class="landing-content-title">ETEC<span class="text-danger">VEST</h3>
                    <p class="landing-content-desc mt-3">Somos uma equipe de estudantes que criou este site com o
                        intuito de mostrar conteúdos referêntes à algumas universidades do país, incluindo dicas e
                        perguntas de seus respectivos vestibulares.</p>
                    <div class="buttons-landing justify-content-center">
                        <a href="#conteudo" class="btn btn-danger">Conteúdos</a>
                        <a href="" class="btn btn-danger">Contato</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</br>
</br>



<div class="container" id="cards-home-page">
    
    <div class="row justify-content-center">
        <div class="intro-section text-center" style="margin-bottom: -50px; margin-top: 50px">
            <h1 class="fw-bold text-danger" id="conteudo">CONTEÚDOS</h1>
        </div>
        <div class="slide-container swiper" >
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/enem.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Enem</h2>
                            <p class="description" style="text-align: justify">Enem é uma
                                prova de admissão à educação
                                superior feita pelo Instituto Nacional de Estudos e Pesquisas Educacionais Anísio
                                Teixeira, autarquia vinculada ao Ministério da Educação do Brasil. </p>

                            <a href="?p=enem"><button class="button">Ver Mais</button></a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/logo.jpeg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Unicamp</h2>
                            <p class="description" style="text-align: justify">Unicamp é uma instituição de ensino
                                superior pública estadual
                                brasileira,
                                sediada na cidade de Campinas, no estado de São Paulo, considerada uma das melhores
                                universidades do país e da América Latina.</p>
                                <a href="?p=unicamp"><button class="button">Ver Mais</button></a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay d-none"></span>

                            <div class="card-image">
                                <img src="img/fuvest.jpg" alt="" class="card-img" style="border-radius: 0px">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Fuvest</h2>
                            <p class="description" style="text-align: justify">A Fuvest é uma fundação brasileira de
                                direito privado ligada à
                                Universidade de São Paulo, fundada em 1976,
                                cujo objetivo principal é a realização dos exames vestibulares para admissão a essa
                                instituição.</p>

                                <a href="?p=fuvest"><button class="button">Ver Mais</button></a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/fatec.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Fatec</h2>
                            <p class="description" style="text-align: justify">A Fatec
                                é uma instituição de ensino 
                                superior pública paulista pertencente ao Centro Paula Souza, autarquia da
                                Secretaria de Desenvolvimento Econômico, Ciência e Tecnologia do estado.</p>

                                <a href="?p=fatec"><button class="button">Ver Mais</button></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>