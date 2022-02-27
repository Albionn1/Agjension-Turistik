<?php
    require_once '../config/Database.php';

    class VendetController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        //CRUD-S

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM vendi');

            return $query->fetchAll();
        }
        public function insert($request){
            $request['image'] = './images/' .$request['image'];
            $query = $this->db->pdo->prepare('INSERT INTO vendi(Photo, Qyteti, Shteti) VALUES (:menu_Photo , :menu_Qyteti, :menu_Shteti)');

            $query->bindParam(':menu_Photo', $request['image']);
            $query->bindParam(':menu_Qyteti', $request['Qyteti']);
            $query->bindParam(':menu_Shteti', $request['Shteti']);

            $query->execute();

            return header('Location: VendetDashboard.php');
        }
        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM vendi WHERE Id = :id');
            $query->bindParam(':id', $id);
            $query->execute();

            return $query->fetch();
        }
        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE vendi SET Photo = :menu_Photo, Qyteti = :menu_Qyteti, Shteti = :menu_Shteti WHERE Id =:id');
             
            $query->bindParam(':menu_Photo', $request['image']);
            $query->bindParam(':menu_Qyteti', $request['Qyteti']);
            $query->bindParam(':menu_Shteti', $request['Shteti']);
            $query->bindParam(':id', $id);

            $query->execute();

            return header('Location: VendetDashboard.php');
        }
        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE FROM vendi WHERE Id=:id');
            $query->bindParam(':id', $id);

            $query->execute();

            return header("Location: VendetDashboard.php");
        }
    }
    
?>