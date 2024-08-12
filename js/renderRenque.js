const ROTO = document.getElementById('ROTO');

const observar = new IntersectionObserver((entries) => {

    if(entries[0].isIntersecting === true){
        document.querySelector('.list_pages ul li .listROTO').classList.add('activedSetor');
        document.querySelector('.headerPrincipal ul li .listROTO').classList.add('activedSetor');

        document.querySelector('.list_pages ul li .listPQC').classList.remove('activedSetor');
        document.querySelector('.headerPrincipal ul li .listPQC').classList.remove('activedSetor');
    }else{
        document.querySelector('.list_pages ul li .listROTO').classList.remove('activedSetor');
        document.querySelector('.headerPrincipal ul li .listROTO').classList.remove('activedSetor');

        document.querySelector('.list_pages ul li .listPQC').classList.add('activedSetor');
        document.querySelector('.headerPrincipal ul li .listPQC').classList.add('activedSetor');
    }
}) 

observar.observe(ROTO);