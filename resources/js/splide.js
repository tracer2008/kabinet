import Splide from '@splidejs/splide';
import "@splidejs/splide/dist/css/splide-core.min.css";

document.addEventListener('DOMContentLoaded', () => {
    var elms = document.getElementsByClassName( 'splide' );
// console.log(Splide);
    for ( var i = 0; i < elms.length; i++ ) {
        new Splide( elms[ i ], {
            breakpoints:{
                425:{
                    perPage: 2,
                },
                700:{
                    perPage: 2,
                },
                1000:{
                    perPage: 3,
                },
                4000:{
                    perPage: 3,
                },
            },
            width: '370',
            autoplay: true,
            interval: 2000,
            type   : 'loop',
            // fixedWidth: 370,
            gap: 20,
            arrows: false,
            pagination: false,
        } ).mount();
    }
});


/*document.addEventListener('DOMContentLoaded', () => {

    var one_splide = new Splide( '.splide_one_product', {
        rewind: true,
        arrows: false,
        gap: 15,
    } );
    one_splide.mount();

});*/
