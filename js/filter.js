const inputOrdemSearch = document.querySelector('.ordemProducao');
const inputIdBob = document.querySelector('.idBob');
const table_search = document.querySelector('.tableSearch');

inputOrdemSearch.addEventListener('change', () => {
    let expressao = inputOrdemSearch.value.toLowerCase();

    let linhas = table_search.getElementsByTagName('tr');

    for (let position in linhas) {
        if (isNaN(position) === true) {
            continue;
        }

        let conteudoLine = linhas[position].children[0].innerHTML.toLowerCase();

        if (conteudoLine.includes(expressao)) {
            linhas[position].style.display = '';
        } else {
            linhas[position].style.display = 'none';
        }

    }
})

inputIdBob.addEventListener('change', () => {
    let expressao = inputIdBob.value.toLowerCase();

    let linhas = table_search.getElementsByTagName('tr');

    for (let position in linhas) {
        if (isNaN(position) === true) {
            continue;
        }

        let conteudoLine = linhas[position].children[1].innerHTML.toLowerCase();

        if (conteudoLine.includes(expressao)) {
            linhas[position].style.display = '';
        } else {
            linhas[position].style.display = 'none';
        }

    }
})
