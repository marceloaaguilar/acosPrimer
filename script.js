function processaForm(e){
    e.preventDefault();
    const nomeOrcamento     = document.getElementById("nameClient");
    const telefoneOrcamento = document.getElementById("phoneNumber");
    const emailOrcamento    = document.getElementById("email");
    const produtoOrcamento  = document.getElementById("typeProduct");

    fetch("classes/enviaEmail.php", {
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        method: "POST",
        body: JSON.stringify({
            "nome"      : nomeOrcamento.value,
            "telefone"  : telefoneOrcamento.value,
            "email"     : emailOrcamento.value,
            "produto"   : produtoOrcamento.value
        })
    }).then(function (response) {
        if (response.status == 200){
            window.location.href = 'https://www.acosprimer.com.br/obrigado';
        }
    })
}

const formOrcamento = document.getElementById("formOrcamentoPrimer");
formOrcamento.addEventListener("submit", processaForm);



window.addEventListener("load", function (event) {

    if (window.location.pathname == '/obrigado'){
        setTimeout(()=> {
            window.location. href = 'https://api.whatsapp.com/send/?phone=5521959142173&text=Ol%C3%A1%2C+gostaria+de+fazer+uma+cota%C3%A7%C3%A3o%21+&type=phone_number&app_absent=0'; 
        },1000)
    }
    document.getElementById('hero-video').play();

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 40,
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
              slidesPerView: 3,
              spaceBetween: 40
            }
        }
    });
});
