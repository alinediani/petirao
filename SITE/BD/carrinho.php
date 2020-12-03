<?php
function add_prod($id)
{
    $id = intval($id);
    if (!isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id] = 1;
    } else {
        $_SESSION['carrinho'][$id] += 1;
    }
}

function sub_prod($id)
{
    $id = intval($id);
    if (!isset($_SESSION['carrinho'][$id])) { } else {
        if ($_SESSION['carrinho'][$id] > 1) {
            $_SESSION['carrinho'][$id] -= 1;
        } else {
            unset($_SESSION['carrinho'][$id]);
        }
    }
}

function del_prod($id)
{
    $id = intval($id);
    if (!isset($_SESSION['carrinho'][$id])) { } else {
        unset($_SESSION['carrinho'][$id]);
    }
}

function init_prod($id, $qntd)
{
    if(!isset($_SESSION['carrinho'][$id])){
        $id = intval($id);
        $_SESSION['carrinho'][$id] = $qntd;
    }
    else{
        $id = intval($id);
        $_SESSION['carrinho'][$id] += 1;
    }
}
