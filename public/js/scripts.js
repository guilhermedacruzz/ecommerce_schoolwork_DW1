
(function() {
    "use strict";

    /*--------------------------------------------------------------
    # Iniciando o AOS
    --------------------------------------------------------------*/
    AOS.init();

    /*--------------------------------------------------------------
    # Deixando a relação Topbar-Header dinâmica
    --------------------------------------------------------------*/
    let selectHeader = document.getElementById('header');
    let selectTopbar = document.getElementById('topbar');

    console.log(selectHeader)
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 70) {
                selectHeader.classList.add('header-scrolled')
                if (selectTopbar) {
                    selectTopbar.classList.add('topbar-scrolled')
                }
            } else {
                selectHeader.classList.remove('header-scrolled')
                if (selectTopbar) {
                    selectTopbar.classList.remove('topbar-scrolled')
                }
            }
        }
        window.addEventListener('load', headerScrolled)
        document.addEventListener('scroll', headerScrolled)
    }

    /*--------------------------------------------------------------
    # Removendo o PreLoader
    --------------------------------------------------------------*/
    let preloader = document.getElementById('preloader');
    if (preloader) {
        window.addEventListener('load', () => {
        preloader.remove()
        });
    }

})()