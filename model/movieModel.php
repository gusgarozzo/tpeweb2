<?php 

    class MovieModel{

        private $db;

        function __constructor(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
        }

        //traigo todos los elementos de la tabla pelicula
        function getAllMovies(){
            $query = $this->db->prepare('SELECT * FROM pelicula');
            $query->execute();
            $movies = $query->fetchAll(PDO::FETCH_OBJ);
            return $movies;
        }

        //traigo todos los elementos de la tabla sala
        function getRoom(){
            $query = $this->db->prepare('SELECT * FROM sala');
            $query->execute();
            $room = $query->fetchAll(PDO::FETCH_OBJ);
            return $room;
        }

        //traigo pelicula por genero
        function getMoviesByGenre($genre){
            var_dump($genre);
            $query = $this->db->prepare('SELECT * FROM pelicula WHERE genero = ?');
            $query->execute([$genre]);
            $movieByGenre = $query->fetchAll(PDO::FETCH_OBJ);
            return $movieByGenre;
        }

        //traigo pelicula por sala
        function getMoviesByRoom($room){
            $query = $this->db->prepare('SELECT * FROM pelicula WHERE id_sala = ?');
            $query->execute([$room]);
            $movieByRoom = $query->fetchAll(PDO::FETCH_OBJ);
            return $movieByRoom;
        }
    }


?>