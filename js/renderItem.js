// Renderizar Elementos

const observer = new IntersectionObserver(entries => {

    Array.from(entries).forEach(entry => {

        if (entry.intersectionRatio >= .5) {
            entry.target.classList.add('sobreNosOffHidden');
        }

    })

}, {
    threshold: [0, .5, 1]
})

Array.from(document.querySelectorAll('.contInfo > *')).forEach(element => {
    observer.observe(element)
})





// Navegar entre páginas
function navigation(url) {
    window.location.href = url;
}

function navigationDeletar(url, id) {
    var urlId = url + '?idFeed=' + encodeURIComponent(id);
    window.location.href = urlId;
}

function navigationObj(url, obj) {
    var urlId = url + '?obj=' + encodeURIComponent(obj);
    window.location.href = urlId;
}



// Deslogar
function logOut() {
    window.location.href = '../php/logOut.php';
}