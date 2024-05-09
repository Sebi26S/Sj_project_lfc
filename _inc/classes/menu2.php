
<?php

class Menu2{

    private $pages;

    public function __construct($pages){
        $this->pages = $pages;
    }

    function generate_footer(): string{
        $menuItems = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu
    
        // Prechádza všetky položky v zadanom zozname stránok a URL adries
        foreach($this->pages as $page_name => $page_url){
            // Pre každú stránku pridá odkaz do navigačného menu
            $menuItems .= '<li class="page-item"><a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white " href="' . $page_url . '">' . $page_name . '</a></li>';
        }
    
        // Vráti vygenerovaný HTML kód pre navigačné menu
        return $menuItems;
    }



        


}
