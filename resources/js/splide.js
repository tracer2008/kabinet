import Splide from '@splidejs/splide';
import "@splidejs/splide/dist/css/splide-core.min.css";

document.addEventListener('DOMContentLoaded', () => {
    var elms_students = document.getElementsByClassName( 'splide_students' );
    for ( let i = 0; i < elms_students.length; i++ ) {
        new Splide( elms_students[ i ], {
            autoplay: false,
            interval: 2000,
            type   : 'loop',
            perPage: 1,
            gap: 20,
            arrows: true,
            pagination: true,
        } ).mount();
    }

    var elms_teachers = document.getElementsByClassName( 'splide_teachers' );
    for ( let i = 0; i < elms_teachers.length; i++ ) {
        new Splide( elms_teachers[ i ], {
            autoplay: false,
            interval: 2000,
            type   : 'loop',
            perPage: 1,
            gap: 20,
            arrows: false,
            pagination: true,
        } ).mount();
    }

    var elms_employees = document.getElementsByClassName( 'splide_employees' );
    for ( let i = 0; i < elms_employees.length; i++ ) {
        new Splide( elms_employees[ i ], {
            autoplay: false,
            interval: 2000,
            type   : 'loop',
            perPage: 1,
            gap: 20,
            arrows: false,
            pagination: true,
        } ).mount();
    }
});


