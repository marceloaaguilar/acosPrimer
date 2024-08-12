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

    <!-- Seção Sobre -->
    <section>
        <div id="containerRow">
            <div class="col-lg-7 container" id="sucessoCol" >
                <div class="row" id="colSucesso">
                    <h4 id="title">O sucesso é proveniente de boas parcerias</h4>
                    <h3 id="titlePrincipal">Construindo juntos o futuro</h3>
                </div>

                <div class="row">
                    <img src="imgs/imgAbout.webp" id="imgGuiaSobre"  alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-5">
                <p id="txtAbout" >Na Primer Inox, entendemos que a infraestrutura ideal é a base para o sucesso e o crescimento de restaurantes e acomodações. <br> <br>
                    Somos especialistas em fornecer soluções completas em aço inoxidável, personalizadas para atender às necessidades de quem busca consistência e eficiência. <br> <br>
                    Nossa experiência nos direciona para estreitar a colaboração com você e compreender seus desafios e objetivos. <br> <br>
                    Com ótimas parcerias, projetamos e fabricamos produtos e móveis de alta qualidade que otimizam a sustentabilidade da sua cozinha, garantem a higiene e elevam a experiência dos seus clientes.
                </p>

                <div id="servicesAbout">
                    <h5 id="title">Serviços</h5>
                    <p id="description">Nossa qualificação e especialização garante que cada peça produzida atenda aos mais rigorosos padrões de qualidade. Utilizamos materiais de primeira linha e tecnologia de fabricação avançadas para uma engenharia de produção  que promove a durabilidade e a resistência de nossos produtos em aço inoxidável.</p>
                </div>

                <div id="servicesAbout">
                    <h5 id="title">Experiência</h5>
                    <p id="description">Uma jornada de 10 anos de inteligência de mercado, conhecimento técnico e responsabilidade profissional que suporta a inovação de infraestrutura necessária para gerar parcerias de sucesso com confiança e longevidade no setor gastronômico.</p>
                    
                     <!-- Botão -->
                    <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="" class="btn" id="btnCtaWhatsapp">
                        <svg id="iconWppLight" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" ></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"></path> </g></svg>
                        Solicitar Orçamento
                    </a>
                </div>

            </div>  
        </div>

        
        <div id="rowMissao">
            <div class="col-lg-6" id="colMission">
                <h5 id="title">Missão</h5>
                <h3 id="titlePrincipal">Aqui o próximo passo está no presente</h3>
                <p>Acreditamos que cozinhas excepcionais não são um mistério, e sim um passo importante para seu negócio.
                    Enxergamos o aço inoxidável como uma chave para desbloquear um mundo de possibilidades, por isso nossa missão é desenvolver e fornecer máquinas e móveis de inox da mais alta qualidade, soluções acessíveis que atendam às necessidades de todos os tipos de cozinhas. <br> <br>
                    Levamos alta performance, independentemente do porte do negócio. Criamos produtos intuitivos e fáceis de usar para todos os níveis de expertise, oferecemos um atendimento excepcional com foco na solução e construímos parcerias estratégicas para ampliar o alcance da nossa missão. </p>
                
                    <!-- Botão -->
                    <a data-bs-toggle="modal" data-bs-target="#modalWhatsapp" href="" class="btn" id="btnCtaWhatsapp">
                        <svg id="iconWppLight" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" ></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"></path> </g></svg>
                        Solicitar Orçamento
                    </a>
                    
            </div>
            <div class="col-lg-6">
                <img src="imgs/corte a laser.webp" id="corteLaser" class="img-fluid" alt="">
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
</body>