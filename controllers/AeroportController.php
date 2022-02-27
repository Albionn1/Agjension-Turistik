<?php
    require_once '../config/Database.php';

    class AeroportController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        //CRUD-S

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM aeroportet');

            return $query->fetchAll();
        }
        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT INTO aeroportet(EmriIAeroportit, Qyteti) VALUES (:menu_Aeroport, :menu_Qyteti)');

            $query->bindParam(':menu_Aeroport', $request['Aeroporti']);
            $query->bindParam(':menu_Qyteti', $request['Qyteti']);

            $query->execute();

            return header('Location: aeroportDashboard.php');
        }
        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM aeroportet WHERE Id = :id');
            $query->bindParam(':id', $id);
            $query->execute();

            return $query->fetch();
        }
        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE aeroportet SET EmriIAeroportit = :menu_Aeroport, Qyteti = :menu_Qyteti WHERE Id =:id');
             
            $query->bindParam(':menu_Aeroport', $request['Aeroporti']);
            $query->bindParam(':menu_Qyteti', $request['Qyteti']);
            $query->bindParam(':id', $id);

            $query->execute();

            return header('Location: aeroportDashboard.php');
        }
        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE FROM aeroportet WHERE Id=:id');
            $query->bindParam(':id', $id);

            $query->execute();

            return header("Location: aeroportDashboard.php");
        }
    }
    
?>