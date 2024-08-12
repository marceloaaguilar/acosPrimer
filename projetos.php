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

    <!-- Seção geral de produtos -->
    <section id="products">
        <div class="container">
            <div id="productsTitle">
                <h5 id="title">PRODUTOS</h5>
                <h3 id="titlePrincipal">Nossa linha de produtos é a essência da funcionalidade e estilo para o setor culinário e de hospitalidade.</h3>
            </div>
        </div>
        
        <div id="productsCatalogo">
            <div class="row" id="rowProducts">
                <div class="col-lg-2" id="contentCatalogoProducts">
                    <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/hob.png" alt="Imagem de um fogão">
                    <h3 id="title">Cocção</h3>
                </div>
                
                <div class="col-lg-2" id="contentCatalogoProducts">
                    <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/exaustor.png" alt="Imagem de um fogão">
                    <h3 id="title">EXAUSTÃO</h3>
                </div>
    
                <div class="col-lg-2" id="contentCatalogoProducts" >
                    <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/frigorifico.png" alt="Imagem de um fogão">
                    <h3 id="title">Refrigeração</h3>
                </div>
                            
                <div class="col-lg-2" id="contentCatalogoProducts">
                    <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/armario-de-roupa.png" alt="Imagem de um fogão">
                    <h3 id="title">MOBILIÁRIO</h3>
                </div>

                <div class="col-lg-2" id="contentCatalogoProducts">
                    <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/restaurante.png" alt="Imagem de um fogão">
                    <h3 id="title">Distribuição</h3>
                </div>

                <div class="col-lg-2" id="contentCatalogoProducts">
                    <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/coquetel.png" alt="Imagem de um fogão">
                    <h3 id="title">Bares</h3>
                </div>
            </div>
        </div>

    </section>

    <!-- Produtos de cocção -->
     <section id="produtosCoccao">
        <div id="coccaoLine">
            <div class="col-lg-2" id="contentCatalogoProducts">
                <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/hob.png" alt="Imagem de um fogão">
                <h3 id="title">Cocção</h3>
            </div>
        </div>

        <div class="container" id="containerBoxProdutos">
            <div class="row" id="rowCatalogoProdutos">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/cb800.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">CB 800</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/fogaoAltaPerformance.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Fogão de Alta Performance</h4>
                </div>

                 <!-- Botão -->
                <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="" class="btn ms-lg-3" id="btnCtaWhatsapp">
                    <svg id="iconWppLight" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" ></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"></path> </g></svg>
                    Solicitar Orçamento
                </a>
                
            </div>
        </div>

        <!-- Produtos de refrigeração -->
        <div id="coccaoLine">
            <div class="col-lg-2" id="contentCatalogoProducts">
                <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/frigorifico.png" alt="Imagem de um fogão">
                <h3 id="title">Refrigeração</h3>
            </div>
        </div>

        <div class="container"  id="containerBoxProdutos">
            <div class="row" id="rowCatalogoProdutos">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/balcaoHorizontal.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Balcão Horizontal Alto Refrigerado 4 portas</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/balcaoVertical.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Balcão Vertical Alto Refrigerado 2 Portas</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/balcaoHorizontalBaixo.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Balcão Horizontal Baixo Refrigerado 4 Gavetas</h4>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/cabecoteRefrigerado.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Cabeçote Refrigerado</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/balcaoRefrigerado.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Balcão Refrigerado Horizontal Para Montagem</h4>
                </div>

                 <!-- Botão -->
                 <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="" class="btn ms-lg-3" id="btnCtaWhatsapp">
                    <svg id="iconWppLight" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" ></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"></path> </g></svg>
                    Solicitar Orçamento
                </a>

            </div>
        </div>

        <!-- Produtos de exaustão -->
        <div id="coccaoLine">
            <div class="col-lg-2" id="contentCatalogoProducts">
                <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/exaustor.png" alt="Imagem de um fogão">
                <h3 id="title">Exaustão</h3>
            </div>
        </div>

        <div class="container"  id="containerBoxProdutos">
            <div class="row" id="rowCatalogoProdutos">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/coifa.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Coifa</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/coifaIndustrial.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Coifa</h4>
                </div>

                 <!-- Botão -->
                 <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="" class="btn ms-lg-3" id="btnCtaWhatsapp">
                    <svg id="iconWppLight" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" ></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"></path> </g></svg>
                    Solicitar Orçamento
                </a>

            </div>
        </div>

        <!-- Produtos de mobiliário -->
        <div id="coccaoLine">
            <div class="col-lg-2" id="contentCatalogoProducts">
                <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/armario-de-roupa.png" alt="Imagem de um fogão">
                <h3 id="title">Mobiliário</h3>
            </div>
        </div>

        <div class="container"  id="containerBoxProdutos">
            <div class="row" id="rowCatalogoProdutos">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes//carroPlataforma.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Carro Plataforma cp-90</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/carroRemolho.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Carro Remolho</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/carroEsqueleto.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Carro Esqueleto</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/carroChassi.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Carro chassi</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/carroTanque.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Carro Tanque</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/carroUtilidades.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Carro Utilidades</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/piaAssepsia.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">pia assepsia</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/tanque.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Tanque (tq-60)</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/mesaPrateleira.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Mesa prateleira lisa (m-pl190)</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/mesaEspelhoPrateleira.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">mesa espelho prateleira lisa (me-pl190)</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/mesaContraventada.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Mesa Contraventada (m-c190)</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/mesaEspelho1Cuba.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Mesa espelho 1 cuba contraventada (me-1cb)</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/mesaEspelhoContraventada.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">mesa espelho contraventada (me-c190)</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/mesaEspelho2Cuba.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">mesa espelho 2 cubas contraventada (me-2cb)</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/estruturaContraventada.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Estrutura Contraventada (es-c190)</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/estruturaPrateleiraLisa.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">estrutura prateleira lisa (es-pl190)</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/prateleiraAerea.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">prateleira aérea</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/prateleiraTubular.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Prateleira tubular</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/estruturaLisa.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">estante lisa</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/estruturaPerfurada.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">estante perfurada</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/carroPratos.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Carro pratos</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/prateleiraSuspensaPerfurada.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">prateleira suspensa perfurada</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/prateleiraSuspensaLisa.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">prateleira suspensa lisa</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/base.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">base</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/moduloBase.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">módulo base/h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/moduloBasePorta.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">módulo base com porta</h4>
                </div>

                 <!-- Botão -->
                <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="" class="btn ms-lg-3" id="btnCtaWhatsapp">
                    <svg id="iconWppLight" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" ></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"></path> </g></svg>
                    Solicitar Orçamento
                </a>

            </div>
        </div>

         <!-- Produtos de distribuição -->
         <div id="coccaoLine">
            <div class="col-lg-2" id="contentCatalogoProducts">
                <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/restaurante.png" alt="Imagem de um fogão">
                <h3 id="title">Exaustão</h3>
            </div>
        </div>

        <div class="container"  id="containerBoxProdutos">
            <div class="row" id="rowCatalogoProdutos">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/mesaAquecida.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">mesa aquecida para montagem</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/pistaAquecida.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Pista aquecida</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/pistaAquecidaSec.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Pista aquecida seca</h4>
                </div>
            </div>

            <div class="row" id="rowCatalogoProdutos">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/pistaAquecidaBanhoMaria.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">pista aquecida banho maria</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/pistaRefrigeradaPlana.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">pista refrigerada plana</h4>
                </div>

                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/pistaRefrigerada.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">Pista refrigerada</h4>
                </div>

                <!-- Botão -->
                <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="" class="btn ms-lg-3" id="btnCtaWhatsapp">
                    <svg id="iconWppLight" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" ></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"></path> </g></svg>
                    Solicitar Orçamento
                </a>

            </div>
        </div>

        <!-- Produtos de bares -->
        <div id="coccaoLine">
            <div class="col-lg-2" id="contentCatalogoProducts">
                <img class="img-fluid" id="iconCatalogoProdutos" src="imgs/icons/coquetel.png" alt="Imagem de um fogão">
                <h3 id="title">Bares</h3>
            </div>
        </div>

        <div class="container"  id="containerBoxProdutos">
            <div class="row" id="rowCatalogoProdutos">
                <div class="col-lg-4" id="boxCatalogoProdutos">
                    <div id="boxImgCatalogoProdutos">
                        <img class="img-fluid" id="imgBoxCatalogoProdutos" src="imgs/fogoes/balcaoHorizontalModuloRefrigerado.webp" alt="Imagem de um Fogão de Alta Performance">
                    </div>
                    <h4 id="descProduct">balcão horizontal módulo bar refrigerado</h4>
                </div>

                <!-- Botão -->
                <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="" class="btn ms-lg-3" id="btnCtaWhatsapp">
                    <svg id="iconWppLight" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" ></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"></path> </g></svg>
                    Solicitar Orçamento
                </a>
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