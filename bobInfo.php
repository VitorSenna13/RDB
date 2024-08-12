<?php

include('./php/conect.php');
include('./php/rotas.php');
include('./php/sociais.php');
include('./php/session.php');
include('./php/postRequest.php');
include('./php/functions.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDB</title>
    <link rel="shortcut icon" href="./assets/img/logo/RDB_HEADER.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/global/style.css">
    <link rel="stylesheet" href="./css/centroR/style.css">
</head>

<body>

    <?php include('./componentes/navbar.php') ?>

    <div class="container">
        <div class="contMap">

        </div>
    </div>


    <?php include('./componentes/footer.php') ?>

</body>

<script>

    let map;
    
    async function gerarMapa(latitude, longitude) {
        const position = { lat: latitude, lng: longitude };
    
        const { Map } = await google.maps.importLibrary("maps");
        const { AdvancedMarkerView } = await google.maps.importLibrary("marker");
    
        map = new Map(document.querySelector('.container .contMap'), {
            zoom: 20,
            center: position,
            mapId: "DEMO_MAP_ID",
        });
    
        const marker = new AdvancedMarkerView({
            map: map,
            position: position,
            title: "Senai Mocca",
        });
    }

    let theme = <?= $infoPerfil['theme'] ?>;

    window.addEventListener('load', () => {
        if (theme === 1) {
            document.body.classList.add('dark');
        }


    gerarMapa(-23.548799, -46.600312);

    })
</script>

<script>(g => { var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window; b = b[c] || (b[c] = {}); var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams, u = () => h || (h = new Promise(async (f, n) => { await (a = m.createElement("script")); e.set("libraries", [...r] + ""); for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]); e.set("callback", c + ".maps." + q); a.src = `https://maps.${c}apis.com/maps/api/js?` + e; d[q] = f; a.onerror = () => h = n(Error(p + " could not load.")); a.nonce = m.querySelector("script[nonce]")?.nonce || ""; m.head.append(a) })); d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n)) })
            ({ key: "AIzaSyDZCcpo7EuZWQh8QxcddFPpqeC8kcGHvZ4", v: "beta" });</script>

<script src="./js/responsivo.js"></script>
<script src="./js/renderItem.js"></script>
<script src="./js/scroll.js"></script>
<script src="https://kit.fontawesome.com/1c9db29424.js" crossorigin="anonymous"></script>

</html>