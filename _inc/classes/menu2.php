
<?php

class Menu2{

    private $pages;

    public function __construct($pages){
        $this->pages = $pages;
    }

    function generate_footer(): string{
        $menuItems = ''; 

        foreach($this->pages as $page_name => $page_url){
            $menuItems .= '<li class="page-item"><a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white " href="' . $page_url . '">' . $page_name . '</a></li>';
        }
    
        return $menuItems;
    }



        


}
