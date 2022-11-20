// const { tns } = require("tiny-slider");

class KTProductLibrary {
    static init(){
        // tns = tiny slider library
        let libraries = document.querySelectorAll('.product-library');
        libraries.forEach((library) => {
            let slider = tns({
                container: library.querySelector('.product-library__container'),
                items: 3,
                slideBy: 'page',
                mouseDrag: true,
                gutter: 4,
                loop: false,
                rewind: true,
                controlsText: ['Prev', 'Next'],
            })
            slider.getInfo().prevButton.classList.add('btn', 'btn-sm', 'btn-danger', 'fw-bolder');
            slider.getInfo().nextButton.classList.add('btn', 'btn-sm', 'btn-primary', 'fw-bolder');
        })
    }
}

KTProductLibrary.init();