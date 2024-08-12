<?php

function filterDesc($desc)
{
    if (strlen($desc) < 33) {
        echo $desc;
    } else {
        echo substr($desc, 0, 30) . '...';
    }
};

function siglasNome($nome, $sobrenome)
{
    echo substr($nome, 0, 1) . substr($sobrenome, 0, 1);
};

function navigationString($rota)
{
    echo $rota;
}

function navigation($rota)
{
    header('Location: ' . $rota);
}
