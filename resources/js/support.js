class Support {

    openSupportMenu() {
        document.querySelector('.header').classList.toggle('show');
    }

    openClose(class_name) {
        let elem = document.querySelector("."+class_name);
        elem.classList.toggle('show');
    }

    tab(elem) {
        let id = elem.id;
        let id_pane = document.getElementById(  id + '_tab');
        let li = elem.parentElement.children ;
        let pane = elem.parentElement.nextElementSibling.children;

        for (let i = 0; i < li.length; i++) {
            li[i].classList.remove('active');
        }
        elem.classList.add('active');

        for (let i = 0; i < pane.length; i++) {
            pane[i].classList.remove('active');
        }
        id_pane.classList.add('active');
    }
}

export default Support;
