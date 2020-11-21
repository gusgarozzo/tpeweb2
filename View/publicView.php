<?php 

    require_once './libs/smarty/Smarty.class.php';
    

    class MovieView{

        public function __construct(){
            $this->title = "MODOCINE";
            $this->smarty = new Smarty();
        }

        function renderHome($user = null, $mensaje = ''){
            $this->smarty->assign('titulo', $this->title);
            $this->smarty->assign('mensaje', $mensaje);
            $this->smarty->assign('user', $user);
            $this->smarty->display('./templates/index.tpl');
        }


        function renderContacto(){
            $this->smarty->assign('titulo', "Modocine");
            $this->smarty->assign('inicio', "Inicio");
            $this->smarty->assign('estrenos', "Estrenos");
            $this->smarty->assign('contacto', "Contacto");
            $this->smarty->display('./templates/contacto.tpl');     
        }
        

        function renderEstrenos($movies){
            $this->smarty->assign('titulo', $this->title);
            $this->smarty->assign('movies', $movies);
            $this->smarty->display('./templates/mainEstrenos.tpl');
        }

        function renderMoviesByGenre($movies){
            $this->renderEstrenos($movies);
        }

        function renderMoviesByRoom($movies){
            $this->renderEstrenos($movies);
        }

        function renderMovieById($movie, $usuario){ 
            $this->smarty->assign('titulo', $this->title);
            $this->smarty->assign('movies', $movie);
            $this->smarty->assign('usuario', $usuario);
            $this->smarty->display('./templates/asideEstrenosDetalles.tpl');
        }

        function renderRooms($rooms){
            $this->smarty->assign('titulo', $this->title);
            $this->smarty->assign('rooms', $rooms);
            $this->smarty->display('./templates/rooms.tpl');

        }

        function renderRoomById($rooms){
            $this->smarty->assign('titulo', $this->title);
            $this->smarty->assign('rooms', $rooms);
            $this->smarty->display('./templates/asideRoomDetalle.tpl');
        }

        function renderSearch($results){
            $this->smarty->assign('titulo', $this->title);
            $this->smarty->assign('results', $results);
            $this->smarty->display('./templates/asideSearch.tpl'); // falta armar
        }

        function ShowHomeLocation(){
            header("Location: ".BASE_URL."home");
        }

        function renderAdmin($user = null, $mensaje = ''){
            $this->smarty->assign('titulo', $this->title);
            $this->smarty->assign('mensaje', $mensaje);
            $this->smarty->assign('user', $user);
            $this->smarty->display('./templates/aIndex.tpl');
        }

    }