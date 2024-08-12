<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aços Prime</title>
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Swiper cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- icon -->
    <link rel="icon" href="imgs/icon.png" type="image/png">
</head>
<body>

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="imgs/logoAcosPrimer.webp" alt="Logo" height="40">
            </a>

            <!-- Botão de toggler para dispositivos móveis -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" id="toggleIcon"></span>
            </button>

            <!-- Links do Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/projetos.php">Catálogo</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>

                <!-- Botão -->
                <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="" class="btn ms-lg-3" id="btnCta">
                    <svg id="iconWpp" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" ></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"></path> </g></svg>
                    Solicitar Orçamento
                </a>
            </div>
        </div>
    </nav>

    <!-- Botão do Whatsapp -->
    <div id="whatsappBtn">
        <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="">
          <img src="imgs/whatsapp_logo_icon_147205.png"  id="whatsappImg" alt="">
        </a>
    </div>

      <!-- Header -->
    <section id="hero" class="text-center text-white">
        <video autoplay muted loop id="hero-video">
            <source src="video/videoPrincipal.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <h1 id="titleHeader">Construindo sonhos <br> com aço inoxidável</h1>
            <p id="descriptionHeader">São 10 anos de realizações notáveis e parcerias duradouras</p>
            <a href="#products" class="btn" id="btnCta2">Conheça a Primer</a>
        </div>
    </section>

    <!-- Seção sobre -->
    <section id="sectionAbout">
        <div class="container">
            <div class="row" id="rowAbout">
                <div class="col-lg-5"  >
                    <h5>SOBRE</h5>
                    <h3>Fornecemos soluções em móveis, equipamentos e utensílios para empresas do segmento de culinária e hospedagem</h3>
                    <p>Especializados na criação e fabricação com aço inoxidável, atendemos uma ampla gama de infraestruturas, desde cocção e refrigeração até exposição, mobília e distribuição.</p>
                    <button class="btn" id="btnCta3">Ler Mais</button>

                    <div id="boxInfoRow" class="row">

                        <div id="boxInfo" class="col-4">
                            <h3>400</h3>
                            <p>Produtos disponíveis</p>
                        </div>
                        
                        

                        <div id="boxInfo"  class="col-4">
                            <h3>5650</h3>
                            <p>Entregas concluídas</p>
                        </div>
                        
                        

                        <div id="boxInfo"  class="col-4">
                            <h3>180</h3>
                            <p>Parceiros Comerciais</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-1">
                    <div class="d-flex" id="dividerColumn" style="height: 40rem;">
                        <div class="vr" id="divider"></div>
                    </div>
                </div>

                <div class="col-lg-6" id="colAbout">
                    <img src="imgs/imgSobre.webp" id="imgAbout" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <hr class="hr"></hr>
    
    </section>

    <!-- Seção Produtos Mais Vendidos -->
    <section id="mostSold">
        <h5>DESTAQUES</h5>
        <h3>Os Produtos mais vendidos</h3>

        <!-- Swiper -->
        <div class="row">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div id="imgBoxSwiper">
                            <img class="img-fluid" id="imgSwiper" src="imgs/fogoes/fogaoAltaPerformance.webp" alt="Imagem de um Fogão de Alta Performance">
                        </div>
                        <h4 id="descProduct">Fogão de Alta Performance</h4>
                    </div>
                    
                    <div class="swiper-slide">
                        <div id="imgBoxSwiper">
                            <img class="img-fluid" id="imgSwiper" src="imgs/fogoes/mesaAquecida.webp" alt="Imagem da mesa aquecida para montagem">
                        </div>
                        <h4 id="descProduct">Mesa Aquecida para montagem</h4>
                    </div>
                    
                    <div class="swiper-slide">
                        <div id="imgBoxSwiper">
                            <img class="img-fluid" id="imgSwiper" src="imgs/fogoes/balcaoHorizontal.webp" alt="Imagem do Balcão Horizontal">
                        </div>
                        <h4 id="descProduct">Balcão Horizontal Alto Refrigerado 4 Portas</h4>
                    </div>
                    
                    <div class="swiper-slide">
                        <div id="imgBoxSwiper">
                            <img class="img-fluid" id="imgSwiper" src="imgs/fogoes/coifaIndustrial.webp" alt="Imagem da Coifa Industrial">
                        </div>
                        <h4 id="descProduct">Coifas Industriais</h4>
                    </div>
                    
                    <div class="swiper-slide">
                        <div id="imgBoxSwiper">
                            <img class="img-fluid" id="imgSwiper" src="imgs/fogoes/mesaDeEncosto.webp" alt="Mesa de Encosto com prateleira lisa">
                        </div>
                        <h4 id="descProduct">Mesa de Encosto com Prateleira Lisa</h4>
                    </div>
                </div>
                <div class="swiper-button-next" id="swiperBtn"></div>
                <div class="swiper-button-prev" id="swiperBtn"></div>
            </div>
        </div>

    </section>

    <!-- Seção de catálogo -->
    <section id="catalogo">
        <div class="container">
            <div class="row">

                <div class="col-lg-4" id="colCatalogo">
                    <h5 id="title">Catálogo</h5>   
                    <h3 id="titlePrincipal">Oferecemos produtos para todo tipo de demanda</h3>   
                    <button class="btn" id="btnCta3">Catálogo Completo</button>
                </div>
    
                <div class="col-lg-4" style="border-left: 1px solid #ffff; padding: 0rem">
                    <div id="contentGroupCatalogo">
                        <div id="contentCatalogo" style="border-bottom: 1px solid #ffff;">
                            <img class="img-fluid" id="iconCatalogo" src="imgs/icons/hob.png" alt="Imagem de um fogão">
                            <h3 id="title">Cocção</h3>
                            <p>Produtos feitos para cozinhas profissionais, que trabalham com o preparo de uma alta quantidade de alimento diariamente e para quem quer muita qualidade para a preparação dos pratos.</p>
                        </div>
                        
                        <div id="contentCatalogo">
                            <img class="img-fluid" id="iconCatalogo" src="imgs/icons/exaustor.png" alt="Imagem de um fogão">
                            <h3 id="title">EXAUSTÃO</h3>
                            <p>Atua na purificação e renovação do ar, evacuando vapores carregados com partículas de gordura e dispersando os odores da comida.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4" style="border-left: 1px solid #ffff; padding: 0rem">
                    <div id="contentGroupCatalogo">

                        <div id="contentCatalogo" style="border-bottom: 1px solid #ffff; border-right: 1px solid #ffff;" >
                            <img class="img-fluid" id="iconCatalogo" src="imgs/icons/frigorifico.png" alt="Imagem de um fogão">
                            <h3 id="title">Refrigeração</h3>
                            <p>Produtos de refrigeração são os responsáveis por manter bebidas, proteínas, doces e mais alimentos na temperatura correta e preservá-los para o consumo.</p>
                        </div>
                        
                        <div id="contentCatalogo" style="border-right: 1px solid #ffff;">
                            <img class="img-fluid" id="iconCatalogo" src="imgs/icons/armario-de-roupa.png" alt="Imagem de um fogão">
                            <h3 id="title">MOBILIÁRIO</h3>
                            <p>Planejado para proporcionar eficiência e rapidez no preparo dos alimentos, além de, sobretudo, atender às normas da vigilância sanitária, garantindo alimentos de qualidade ao consumidor final.</p>
                        </div>
                    </div>
                </div>

            </div>
            

        </div>



    </section>

    <!-- Seção de clientes -->
    <section id="clientes">
        <div class="container">
            <h5 id="title">Nossos Clientes</h5>
            <h3 id="titlePrincipal">Acreditamos que cada cliente é um parceiro valioso</h3>
            <div id="clientImgs">
                <div class="row" id="clients">
                    <img id="imageClient" src="imgs/clientes/fornes.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/wwo.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/goldpao.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/mendesSantos.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/cosechas.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/pasta.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/costalavos.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/omatuto.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/bucaneiros.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/sapore.png" alt="" class="img-fluid"> 
                </div>

                <div class="row" id="clients">
                    <img id="imageClient" src="imgs/clientes/fogoDeChao.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/sodexo.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/shopper.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/juiceToast.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/duecuochi.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/greenPeople.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/ttburguer.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/mercosul.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/mammaJamma.webp" alt="" class="img-fluid"> 
                </div>

                <div class="row" id="clients">
                    <img id="imageClient" src="imgs/clientes/restauranteFantastico.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/vizinhando.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/mercosulStore.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/ravis.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/granCoffee.webp" alt="" class="img-fluid"> 
                    <img id="imageClient" src="imgs/clientes/rappi.webp" alt="" class="img-fluid"> 
                </div>

            </div>



        </div>



    </section>

    <!-- Footer -->
    <footer class="pt-5 pb-4">
        <div class="container ">
            <div class="row">

                <!-- Coluna 1: Links -->
                <div class="col-lg-3 col-md-6 mb-4" id="footerColumn" >
                    <h5 id="title">Institucional</h5>
                    <div id="colFooter">
                        <ul class="list-unstyled" id="linksSite">
                            <li><a href="/">Início</a></li>
                            <li><a href="/projetos.php">Catálogo</a></li>
                            <li><a href="/sobre.php">Sobre</a></li>
                            <li><a href="">Contato</a></li>
                        </ul>

                        <img id="logoFooter" src="imgs/logoAcosPrimerBlack.jpg" alt="" class="img-fluid">
                    </div>

                </div>
                
                <!-- Coluna 2: Sede -->
                <div class="col-lg-3 col-md-6 mb-4" id="footerColumn">
                    <h5 id="title">Sede</h5>
                    <div id="colFooter">
                        <p>
                        R. Cel. Francisco Soares, 739<br>
                        Centro, Nova Iguaçu -RJ <br>
                        CEP 26216-031
                        </p>

                        <p id="phone">(21) 95914-2173 <br>
                        contato@acosprimer.com.br</p>

                    </div>


                </div>
                
                <!-- Coluna 3: Redes Sociais -->
                <div class="col-lg-3 col-md-6 mb-4" id="footerColumn" >
                    <h5 id="title">Redes Sociais</h5>
                    <ul class="list-unstyled" id="colFooter">
                        <div id="linksFooter">
                            <li><a href="https://www.facebook.com/acosprimer">Facebook</a></li>
                            <li><a href="https://www.instagram.com/acosprimer/">Instagram</a></li>
                            <li><a href="http://bit.ly/atendimentoprimer">Whatsapp</a></li>
                        </div>
                    </ul>
                </div>

                <!-- Coluna 4: Solicitações -->
                <div class="col-lg-3 col-md-6 mb-4" id="footerColumn">
                    <h5 id="title">Solicitações</h5>
                    <div id="colFooter">
                        <p>Gostaria de receber um orçamento?</p>
                        
                        <!-- Botão -->
                        <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="" class="btn ms-lg-3" id="btnCta">Solicitar Orçamento</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center py-3 mt-4" style="background-color: #333;">
            <small>© 2024 Aços Primer - Todos os direitos reservados.</small>
        </div>
    </footer>

     <!-- Modal -->
    <div class="modal fade" id="modalWhatsapp" tabindex="-1" aria-labelledby="modalWhatsappLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalWhatsappLabel">Entrar em contato pelo Whatsapp</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>

                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nome:</label>
                  <input type="text" required class="form-control" id="recipient-name">
                </div>

                <div class="mb-3">
                  <label for="phoneNumber" class="col-form-label">Telefone:</label>
                  <input class="form-control" required id="phoneNumber"></input>
                </div>

                <div class="mb-3">
                  <label for="email" class="col-form-label">E-mail:</label>
                  <input class="form-control" required id="email"></input>
                </div>

                <div class="mb-3">
                  <label for="typeProduct" class="col-form-label">Qual produto deseja?</label>
                  <input class="form-control" required id="typeProduct"></input>
                </div>

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="btnModalWhatsapp" class="btn btn-whatsapp">Enviar</button>
            </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>
