<?php

include('./php/conect.php');
include('./php/rotas.php');
include('./php/functions.php');
include('./php/session.php');
include('./php/postRequest.php');
include('./php/getRenque.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDB</title>
    <link rel="shortcut icon" href="./assets/img/logo/RDB_HEADER.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/global/style.css">
    <link rel="stylesheet" href="./css/renque/style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>

<body>

<div class="container">

    <div class="menu_lateral">
        <div class="logo">
            <img src="./assets/img/galery/RDB_NOT_BACKGROUND.png" alt="">
        </div>

        <div class="list_pages">
            <ul>
                <li><a class='listPQC desabledSetor' href="#PQC">P.Q.C</a></li>
                <li><a class='listROTO desabledSetor' href="#ROTO">ROTO</a></li>
                <br/>
                <br/>
                <li><a id="voltar" onclick="navigation('./rastreamento.php')"><i class="fa-solid fa-circle-arrow-left"></i>Voltar</a></li>
            </ul>
        </div>
    </div>

    <div class="contConteudo">

    <div class="headerPrincipal">
        
    <div class="contMarc">
        <a id="voltar" onclick="navigation('./rastreamento.php')"><i class="fa-solid fa-circle-arrow-left"></i></a>
        <div class="logo">
            <img src="./assets/img/galery/RDB_NOT_BACKGROUND.png" alt="">
        </div>
    </div>

        <ul>
            <li><a class='listPQC desabledSetor' href="#PQC">P.Q.C</a></li>
            <li><a class='listROTO desabledSetor' href="#ROTO">ROTO</a></li>
        </ul>

    </div>

        <div class="headerCentro">
            <div class="outputCentro">
                <div class="matriz1"> MTZO </div>
                <div class="matriz2"> AMNZ </div>
            </div>
        </div>
        
        <div class="contMatrizP" id="PQC">
            <div class="contCanvas">
                <div class="valueCanvas">

                    <div class="rows rowA">
                        <span>A</span>
                        
                        <div class="columns column1">A1</div>
                        <div class="columns column2">A2</div>
                        <div class="columns column3">A3</div>
                        <div class="columns column4">A4</div>
                        <div class="columns column5">A5</div>
                        <div class="columns column6">A6</div>
                        <div class="columns column7">A7</div>
                        <div class="columns column8">A8</div>
                        
                    </div>
                    
                    <div class="rows rowB">
                        <span>B</span>
                        
                        <div class="columns column1">B1</div>
                        <div class="columns column2">B2</div>
                        <div class="columns column3">B3</div>
                        <div class="columns column4">B4</div>
                        <div class="columns column5">B5</div>
                        <div class="columns column6">B6</div>
                        <div class="columns column7">B7</div>
                        <div class="columns column8">B8</div>
                        
                    </div>

                    <div class="rows rowC">
                        <span>C</span>

                        <div class="columns column1">C1</div>
                        <div class="columns column2">C2</div>
                        <div class="columns column3">C3</div>
                        <div class="columns column4">C4</div>
                        <div class="columns column5">C5</div>
                        <div class="columns column6">C6</div>
                        <div class="columns column7">C7</div>
                        <div class="columns column8">C8</div>
                        
                    </div>
                    <div class="rows rowD">
                        <span>D</span>
                        
                        <div class="columns column1">D1</div>
                        <div class="columns column2">D2</div>
                        <div class="columns column3">D3</div>
                        <div class="columns column4">D4</div>
                        <div class="columns column5">D5</div>
                        <div class="columns column6">D6</div>
                        <div class="columns column7">D7</div>
                        <div class="columns column8">D8</div>
                        
                    </div>
                    <div class="rows rowE">
                        <span>E</span>
                        
                        <div class="columns column1">E1</div>
                        <div class="columns column2">E2</div>
                        <div class="columns column3">E3</div>
                        <div class="columns column4">E4</div>
                        <div class="columns column5">E5</div>
                        <div class="columns column6">E6</div>
                        <div class="columns column7">E7</div>
                        <div class="columns column8">E8</div>
                        
                    </div>
                    
                </div>
                </div>
            </div>
        





        <div class="contMatrizR" id="ROTO">
            <div class="contCanvas">
                <div class="valueCanvas">

                <div class="rows rowA">
                        <span>A</span>
                        
                        <div class="columns column1">A1</div>
                        <div class="columns column2">A2</div>
                        <div class="columns column3">A3</div>
                        <div class="columns column4">A4</div>
                        <div class="columns column5">A5</div>
                        <div class="columns column6">A6</div>
                        <div class="columns column7">A7</div>
                        <div class="columns column8">A8</div>
                        <div class="columns column9">A9</div>
                        <div class="columns column10">A10</div>
                        <div class="columns column11">A11</div>
                        <div class="columns column12">A12</div>
                        
                    </div>
                    
                    <div class="rows rowB">
                        <span>B</span>
                        
                        <div class="columns column1">B1</div>
                        <div class="columns column2">B2</div>
                        <div class="columns column3">B3</div>
                        <div class="columns column4">B4</div>
                        <div class="columns column5">B5</div>
                        <div class="columns column6">B6</div>
                        <div class="columns column7">B7</div>
                        <div class="columns column8">B8</div>
                        <div class="columns column9">B9</div>
                        <div class="columns column10">B10</div>
                        <div class="columns column11">B11</div>
                        <div class="columns column12">B12</div>
                        
                    </div>

                    <div class="rows rowC">
                        <span>C</span>

                        <div class="columns column1">C1</div>
                        <div class="columns column2">C2</div>
                        <div class="columns column3">C3</div>
                        <div class="columns column4">C4</div>
                        <div class="columns column5">C5</div>
                        <div class="columns column6">C6</div>
                        <div class="columns column7">C7</div>
                        <div class="columns column8">C8</div>
                        <div class="columns column9">C9</div>
                        <div class="columns column10">C10</div>
                        <div class="columns column11">C11</div>
                        <div class="columns column12">C12</div>
                        
                    </div>
                    <div class="rows rowD">
                        <span>D</span>
                        
                        <div class="columns column1">D1</div>
                        <div class="columns column2">D2</div>
                        <div class="columns column3">D3</div>
                        <div class="columns column4">D4</div>
                        <div class="columns column5">D5</div>
                        <div class="columns column6">D6</div>
                        <div class="columns column7">D7</div>
                        <div class="columns column8">D8</div>
                        <div class="columns column9">D9</div>
                        <div class="columns column10">D10</div>
                        <div class="columns column11">D11</div>
                        <div class="columns column12">D12</div>
                        
                    </div>
                    <div class="rows rowE">
                        <span>E</span>
                        
                        <div class="columns column1">E1</div>
                        <div class="columns column2">E2</div>
                        <div class="columns column3">E3</div>
                        <div class="columns column4">E4</div>
                        <div class="columns column5">E5</div>
                        <div class="columns column6">E6</div>
                        <div class="columns column7">E7</div>
                        <div class="columns column8">E8</div>
                        <div class="columns column9">E9</div>
                        <div class="columns column10">E10</div>
                        <div class="columns column11">E11</div>
                        <div class="columns column12">E12</div>
                        
                    </div>
                    
                </div>
                </div>
            </div>
            
        </div>
        
        </div>

    
</div>

</body>


<script>
        let theme = <?= $infoPerfil['theme'] ?>;

        let locationRenque = '<?= $infoRenque['localizacao'] ?>';

        let setorRenque = '<?= $infoRenque['setor'] ?>';

        window.addEventListener('load', () => {

            if (theme === 1) {
                document.body.classList.add('dark');
            }

            // Localização
            if(locationRenque == 'MTZO'){
                document.querySelector('.outputCentro .matriz1').classList.add('activedOutputCentro');
            }
            else if(locationRenque == 'AMNZ'){
                document.querySelector('.outputCentro .matriz2').classList.add('activedOutputCentro');
            }
            else{
                return;
            }

            if(setorRenque == 'ROTO'){
                document.querySelector('#ROTO .row<?= $infoRenque['linha'] ?> .column<?= $infoRenque['coluna'] ?>').classList.add('activedRenque');
            }
            else if(setorRenque == 'P.Q.C'){
                document.querySelector('#PQC .row<?= $infoRenque['linha'] ?> .column<?= $infoRenque['coluna'] ?>').classList.add('activedRenque');
            }
            else{
                return;
            }
            
        })
</script>

<script src="./js/renderItem.js"></script>
<script src='./js/renderRenque.js'></script>
<script src="https://kit.fontawesome.com/1c9db29424.js" crossorigin="anonymous"></script>

</html>