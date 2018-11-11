<?php require '../php/PHP/init.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mecanauto Martinelli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require '../php/arquivosRequire/header.php';?>
    
</head>
<!---------------------- HOME-INICIO------------------------>
<body class="home">
    <?php require '../php/arquivosRequire/navbar.php';?>
    <main id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="imgHome carousel-item active">
                    <img class="d-block w-100" src="/php/Img/img-home.jpg" alt="First slide">
                </div>
                <div class="imgHome carousel-item">
                    <img class="d-block w-100" src="/php/Img/img-slider.jpg" alt="Second slide">
                </div>
                <div class="imgHome carousel-item">
                    <img class="d-block w-100" src="/php/Img/img-slider2.jpg" alt="Third slide">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="bg-dark carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="bg-dark carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div class="main-text">
            <div class="col-md-12 text-center ml-md-auto col-12 ml-1">
                <h1>Mecanauto Martinelli</h1>
                <h2 class="d-none d-sm-block">Conserte seu veículo com um engenheiro certificado</h2>
                <h2 class="d-none d-sm-block">Confiança e garatia de qualidade</h2>
                <button class="press press-round press-ghost press-white">Saiba Mais</button>
            </div>
        </div>
    </main>
    <!----------------------- HOME-FIM------------------------>

    <!---------------------- SERVIÇOS-INICIO------------------------>
    <section id="servicos" class="servicos pb-5 container-fluid">
        <h1 class="text-center dis animated fadeInLeft ">Nossos Serviços</h1>
        <div class="row tan mr-4">
            <div class="col animated fadeInLeft ">
                <img class="imgCardServico card-img-top" src="/php/Img/img-trocaOleo.jpg" alt="Card image cap">
                <div class="card-body bg-white z-depth-1 cardServico">
                    <h4 class="text-center testClass">Troca de Óleo</h4>
                    <p class="card-text testClass">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col animated fadeInLeft ">
                <img class="imgCardServico z-depth-1 card-img-top" src="/php/Img/img-servico2.jpg" alt="Card image cap">
                <div class="card-body bg-white z-depth-1 cardServico">
                    <h4 class="text-center testClass">Revisão</h4>
                    <p class="card-text testClass">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col animated fadeInLeft ">
                <img class="imgCardServico z-depth-1 card-img-top" src="/php/Img/img-servico3.jpg" alt="Card image cap">
                <div class="card-body bg-white z-depth-1 cardServico">
                    <h4 class="text-center">Conserto</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col animated fadeInLeft ">
                <img class="imgCardServico z-depth-1 card-img-top" src="/php/Img/img-servico4.jpg" alt="Card image cap">
                <div class="card-body bg-white z-depth-1 cardServico">
                    <h4 class="text-center">Pintura</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </section>
    <!---------------------- SERVIÇOS-FIM------------------------>

    <!---------------------- PRODUTOS-INICIO------------------------>
    <section id="produtos" class="produtos py-5">
        <h1 class="text-center mb-5 animated fadeInLeft ">Nossos Produtos</h1>
        <div class="container-fluid justify-content-center row card-pro">
            <div class="z-depth-2 ml-4 mt-md-0 card animated fadeInLeft " style="width: 18rem;">
                <div class="view overlay">
                    <div class="view overlay zoom">
                        <img class="card-img-top" src="/php/Img/img-produto1.jpg" alt="Card image cap">
                        <div class="mask flex-center">
                        </div>
                        <div class="mask flex-center rgba-black-strong">
                        </div>
                    </div>
                </div>
                <div class="blue darken-4 card-body">
                    <p class="card-text text-center font-weight-bold text-white">Acessórios</p>
                </div>
            </div>
            <div class="z-depth-2 ml-4 mt-4 mt-md-0 card animated fadeInLeft " style="width: 18rem;">
                <div class="view overlay">
                    <div class="view overlay zoom">
                        <img class="card-img-top" src="/php/Img/img-produto2.jpg" alt="Card image cap">
                        <div class="mask flex-center">
                        </div>
                        <div class="mask flex-center rgba-black-strong">
                            <h3 class="white-text "></h3>
                        </div>
                    </div>
                </div>
                <div class="blue darken-4 card-body">
                    <p class="card-text text-center font-weight-bold text-white">Pneus</p>
                </div>
            </div>
            <div class="z-depth-2 ml-4 mt-4 mt-md-0 card animated fadeInLeft " style="width: 18rem;">
                <div class="view overlay">
                    <div class="view overlay zoom">
                        <img class="card-img-top" src="/php/Img/img-produto3.jpg" alt="Card image cap">
                        <div class="mask flex-center">
                        </div>
                        <div class="mask flex-center rgba-black-strong">
                            <h3 class="white-text "></h3>
                        </div>
                    </div>
                </div>
                <div class="blue darken-4 card-body">
                    <p class="card-text text-center font-weight-bold text-white">Espelhos</p>
                </div>
            </div>
        </div>
        <div class="container-fluid justify-content-center row mt-4">
            <div class="z-depth-2 ml-4 mt-4 mt-md-0 card animated fadeInLeft " style="width: 18rem;">
                <div class="view overlay">
                    <div class="view overlay zoom">
                        <img class="card-img-top" src="/php/Img/img-produto4.jpg" alt="Card image cap">
                        <div class="mask flex-center">
                        </div>
                        <div class="mask flex-center rgba-black-strong">
                            <h3 class="white-text "></h3>
                        </div>
                    </div>
                </div>
                <div class="blue darken-4 card-body">
                    <p class="card-text text-center font-weight-bold text-white">Motores</p>
                </div>
            </div>
            <div class="z-depth-2 ml-4 mt-4 mt-md-0 card animated fadeInLeft " style="width: 18rem;">
                <div class="view overlay">
                    <div class="view overlay zoom">
                        <img class="card-img-top" src="/php/Img/img-produto5.jpg" alt="Card image cap">
                        <div class="mask flex-center">
                        </div>
                        <div class="mask flex-center rgba-black-strong">
                            <h3 class="white-text"></h3>
                        </div>
                    </div>
                </div>
                <div class="blue darken-4 card-body">
                    <p class="card-text text-center font-weight-bold text-white">Peças</p>
                </div>
            </div>
            <div class="z-depth-2 ml-4 mt-4 mt-md-0 card animated fadeInLeft " style="width: 18rem;">
                <div class="view overlay">
                    <div class="view overlay zoom">
                        <img class="card-img-top" src="/php/Img/img-produto6.png" alt="Card image cap">
                        <div class="mask flex-center">
                        </div>
                        <div class="mask flex-center rgba-black-strong">
                            <h3 class="white-text"></h3>
                        </div>
                    </div>
                </div>
                <div class="blue darken-4 card-body">
                    <p class="card-text text-center font-weight-bold text-white">Faróis</p>
                </div>
            </div>
        </div>
    </section>
    <!---------------------- PRODUTOS-FIM------------------------>

    <!---------------------- QUEM SOMOS-INICIO------------------------>
    <section id="sobre" class="quemSomos altura py-5">
        <div class="textoSobre d-flex flex-row justify-content-center">
            <div class="divSobre col-8 text-light">
                <h1 class="text-center">Quem Somos</h1>
                <p class="textoSobre h4-responsive mb-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sint ratione odio quasi, accusantium dolores. Pariatur quidem perspiciatis ducimus. Nulla modi odit nihil labore tenetur id maiores quas? Saepe illum aliquid excepturi atque mollitia ipsam, temporibus reprehenderit et ex quas eaque. Necessitatibus consequatur, suscipit eligendi ab debitis explicabo quis iusto tempora numquam neque! Non, obcaecati, corporis quis explicabo voluptatum nobis, aperiam magni aliquid excepturi vitae iusto eaque? Ipsa eum est cupiditate ullam ab qui molestiae. Ducimus illum totam fugit tempora ipsa cum repellendus amet laudantium voluptate? Cum labore maxime esse reprehenderit minima, explicabo tempora repudiandae non blanditiis dolore hic quasi, id maiores consectetur ullam pariatur voluptas, harum praesentium minus ad? Similique facere officiis, assumenda eveniet nesciunt sint architecto aspernatur inventore adipisci! Impedit, sit. Sapiente excepturi vel, delectus veritatis odit, ea reprehenderit, tenetur facilis nam explicabo obcaecati quam harum repellendus recusandae eveniet dolorem?</p>
            </div>
        </div>
    </section>
    <!---------------------- QUEM SOMOS-FIM------------------------>

    <!---------------------- PARCEIROS-INICIO------------------------>
    <section id="parceiros" class="parceiros py-5 mb-5">
        <h1 class="text-center mb-5">Nossos Parceiros</h1>
        <div id="carouselExampleIndicators" class="sliderParceiros carousel slide parcas" data-ride="carousel">
            <div class="carousel-inner">
                <div class="logoParceiros carousel-item active">
                    <div class="row justify-content-center">
                        <img height="200" class="col-3 d-block" src="/php/Img/parceiro1.png">
                        <img height="200" class="col-3 d-block" src="/php/Img/parceiro2.png">
                        <img height="200" class="col-3 d-block ml-5" src="/php/Img/parceiro3.png">
                    </div>
                </div>
                <div class="logoParceiros carousel-item">
                    <div class="row justify-content-center">
                        <img height="200" class="col-3 d-block" src="/php/Img/parceiro4.png">
                        <img height="200" class="col-3 d-block" src="/php/Img/parceiro5.png">
                        <img height="200" class="col-3 d-block ml-5" src="/php/Img/parceiro5.png">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="bg-dark carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="bg-dark carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!---------------------- PARCEIROS-FIM------------------------>
    <script>
        var $target = $('.fadeInLeft'),
        animationClass = '.animated',
        offset = $(window).height()*3/4;

        function animeScroll(){
            var documentoTop = $(document).ScrollTop();

            $target.each(function(){
                var itemTop = $(this).offset().top;
                if (documetoTop > itemTop - offset ) {
                    $(this).addClass(animationClass);
                } else{
                    $(this).removeClass(animationClass);
                }
            })
        }
        animeScroll();

        $(document).scroll(function(){
            animeScroll()
        }) 
    </script>
    <?php require '../php/arquivosRequire/footer.php';?>
</body>
</html>