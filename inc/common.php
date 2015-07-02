<?php

function getBodyContent() {
    switch (@$_GET['p']) {
        case 'produtos':
            include 'inc/_product-list.php';
            break;
        case 'sobre':

            break;
        case 'contato':

            break;
        case 'user-form':
            include 'inc/_user-form.php';
            break;
        case 'user-welcome':
            break;
        case 'product-form':
            include 'inc/_product-form.php';
            break;
        default:
//            include 'product.php';
    }
}

function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    exit;
}

function newDbConnection() {
    return new mysqli('127.0.0.1', 'root', '', 'exemplo-senac');
//    return new mysqli('192.168.33.11', 'root', 'root', 'exemplo-senac');
}
