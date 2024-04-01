<?php


function generate_menu(array $pages): string{
    $menuItems = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu

    // Prechádza všetky položky v zadanom zozname stránok a URL adries
    foreach($pages as $page_name => $page_url){
        // Pre každú stránku pridá odkaz do navigačného menu
        $menuItems .= '<li class="nav-item"><a class="nav-link " href="' . $page_url . '">' . $page_name . '</a></li>';
    }

    // Vráti vygenerovaný HTML kód pre navigačné menu
    return $menuItems;
}

function generate_footer(array $pages): string{
    $menuItems = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu

    // Prechádza všetky položky v zadanom zozname stránok a URL adries
    foreach($pages as $page_name => $page_url){
        // Pre každú stránku pridá odkaz do navigačného menu
        $menuItems .= '<li class="page-item"><a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white " href="' . $page_url . '">' . $page_name . '</a></li>';
    }

    // Vráti vygenerovaný HTML kód pre navigačné menu
    return $menuItems;
}

function redirect_homepage(){
    header("Location: templates/index.php");
    die("Nepodarilo sa nájsť Domovskú stránku");
}








?>