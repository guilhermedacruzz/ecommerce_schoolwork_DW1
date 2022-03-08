
(function() {
    "use strict";

    // Scroll Header
    let selectHeader = document.getElementById('header');
    let selectTopbar = document.getElementById('topbar');

    console.log(selectHeader)
    if (selectHeader) {
        console.log("sds")
        const headerScrolled = () => {
            if (window.scrollY > 100) {
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

})()