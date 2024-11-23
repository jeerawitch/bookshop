<?php

class Admin{
    private $db;

    function __construct($connect){
        $this->db=$connect;
        // echo "มีการเรียกใช้งาน Controller";
    }

    function getProduct(){
        try{
            $sql = "SELECT * FROM book";
            $result = $this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getProductByID($bookid){
        try{
            $sql = "SELECT * FROM book WHERE BookID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $bookid, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function addProduct($image, $title, $author, $publisher, $price){
        try{
            $sql = "INSERT INTO book(title, author, publisher, price, imageurl) VALUES (?, ?, ?, ?, ?) ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $title, PDO::PARAM_STR);
            $stmt->bindParam(2, $author, PDO::PARAM_STR);
            $stmt->bindParam(3, $publisher, PDO::PARAM_STR);
            $stmt->bindParam(4, $price, PDO::PARAM_INT);
            $stmt->bindParam(5, $image, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getAllUser(){
        try{
            $sql = "SELECT * FROM customer";
            $result = $this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getAllPayment(){
        try{
            $sql = "SELECT * FROM payment";
            $result = $this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getAllPurchase(){
        try{
            $sql = "SELECT * FROM purchaseorder";
            $result = $this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getAllOrder(){
        try{
            $sql = "SELECT * FROM orderitem";
            $result = $this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getAllShipping(){
        try{
            $sql = "SELECT * FROM shipping";
            $result = $this->db->query($sql);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function updateProduct($bookid,$imageurl, $title, $author, $publisher, $price){
        try{
            // $userid = 12;

            $sql = "UPDATE book SET Title = ?, Author = ?, Publisher = ?, Price = ?, ImageURL = ? WHERE BookID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $title, PDO::PARAM_STR);
            $stmt->bindParam(2, $author, PDO::PARAM_STR);
            $stmt->bindParam(3, $publisher, PDO::PARAM_STR);
            $stmt->bindParam(4, $price, PDO::PARAM_STR);
            // $stmt->bindParam(5, $userid, PDO::PARAM_STR);
            // $stmt-> execute();
            // return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}

?>