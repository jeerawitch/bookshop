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
            $sql = "UPDATE book SET Title = ?, Author = ?, Publisher = ?, Price = ?, ImageURL = ? WHERE BookID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $title, PDO::PARAM_STR);
            $stmt->bindParam(2, $author, PDO::PARAM_STR);
            $stmt->bindParam(3, $publisher, PDO::PARAM_STR);
            $stmt->bindParam(4, $price, PDO::PARAM_STR);
            $stmt->bindParam(5, $imageurl, PDO::PARAM_STR);
            $stmt->bindParam(6, $bookid, PDO::PARAM_STR);
            $stmt-> execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function deleteProduct($bookid){
        try{
            $sql = "DELETE FROM book WHERE BookID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $bookid, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getOrderByID($orderitemid){
        try{
            $sql = "SELECT * FROM orderitem WHERE OrderItemID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $orderitemid, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function updateOrder($orderitemid, $quantity, $totalprice){
        try{
            $sql = "UPDATE orderitem SET Quantity = ?, Price = ? WHERE OrderItemID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $quantity, PDO::PARAM_STR);
            $stmt->bindParam(2, $totalprice, PDO::PARAM_STR);
            $stmt->bindParam(3, $orderitemid, PDO::PARAM_STR);
            $stmt-> execute();

            $sqlpurchase = "UPDATE purchaseorder SET TotalAmount = ? WHERE OrderID = ?";
            $stmtpurchase = $this->db->prepare($sqlpurchase);
            $stmtpurchase->bindParam(1, $totalprice, PDO::PARAM_INT);
            $stmtpurchase->bindParam(2, $orderitemid, PDO::PARAM_INT);
            $stmtpurchase-> execute();

            $sqlpayment = "UPDATE payment SET PaymentAmount = ? WHERE PaymentID = ?";
            $stmtpayment = $this->db->prepare($sqlpayment);
            $stmtpayment->bindParam(1, $totalprice, PDO::PARAM_STR);
            $stmtpayment->bindParam(2, $orderitemid, PDO::PARAM_STR);
            $stmtpayment-> execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function deleteOrder($orderitemid){
        try{
            $sqlorder = "DELETE FROM orderitem WHERE OrderItemID = ?";
            $stmtorder = $this->db->prepare($sqlorder);
            $stmtorder->bindParam(1, $orderitemid, PDO::PARAM_INT);
            $stmtorder->execute();

            $sqlpayment = "DELETE FROM payment WHERE PaymentID = ?";
            $stmtpayment = $this->db->prepare($sqlpayment);
            $stmtpayment->bindParam(1, $orderitemid, PDO::PARAM_INT);
            $stmtpayment->execute();

            $sqlshipping = "DELETE FROM shipping WHERE ShippingID = ?";
            $stmtshipping = $this->db->prepare($sqlshipping);
            $stmtshipping->bindParam(1, $orderitemid, PDO::PARAM_INT);
            $stmtshipping->execute();

            $sqlpurchase = "DELETE FROM purchaseorder WHERE OrderID = ?";
            $stmtpurchase = $this->db->prepare($sqlpurchase);
            $stmtpurchase->bindParam(1, $orderitemid, PDO::PARAM_INT);
            $stmtpurchase->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

}

?>