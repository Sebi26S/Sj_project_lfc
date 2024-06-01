<?php

    class Menu{

        private $pages;

        public function __construct($pages){
            $this->pages = $pages;
        }

       function generate_menu(): string{
    $menuItems = ''; 



            foreach($this->pages as $page_name => $page_url){
                $menuItems .= '<li class="nav-item"><a class="nav-link " href="' . $page_url . '">' . $page_name . '</a></li>';
            }

            return $menuItems;
            }



            


    }

?>