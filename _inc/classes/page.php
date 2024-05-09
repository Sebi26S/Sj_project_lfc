<?php

    class Page{
        private $page_name;

        public function set_page_name($page_name)
        {
            $this->page_name = $page_name;
        }

        function add_stylesheet() {
            $result =  '<link rel="stylesheet" href="../css/main.css">
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">;
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">;
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">';
           //$page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
            
            switch($this->page_name){
                case 'register':
                    $result .= '<link rel="stylesheet" href="../css/register.css">';
                    break;
                case 'login':
                    $result .= '<link rel="stylesheet" href="../css/register.css">';
                    break;
                case 'admin':
                    $result .= '<link rel="stylesheet" href="../css/admin-history.css">';
                     break;


            }
            return $result;
        }

     

        function add_scripts(){
            $result = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>';
            //$page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
            switch($this->page_name){
  
            case 'history':
                $result .= '<script src="../js/accordion.js"></script>';
                break;  
            
            case 'index':
                $result .= '<script src="../js/cookies.js"></script>';
                break;  
            
    
            }
            return $result;   
        }


        
        function redirect_homepage(){
            header("Location: templates/index.php");
            die("Nepodarilo sa nájsť Domovskú stránku");
        }

    }

?>