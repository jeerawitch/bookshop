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

    function getPurchaseByID($orderid){
        try{
            $sql = "SELECT * FROM purchaseorder WHERE OrderID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $orderid, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function updatePurchase($orderid,$purchasestatus){
        try{
            $sql = "UPDATE purchaseorder SET OrderStatus = ? WHERE OrderID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $purchasestatus, PDO::PARAM_STR);
            $stmt->bindParam(2, $orderid, PDO::PARAM_STR);
            $stmt-> execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getPaymentByID($paymentid){
        try{
            $sql = "SELECT * FROM payment WHERE PaymentID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $paymentid, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function updatePayment($paymentid, $paymentmethod, $paymentstatus){
        try{
            $sql = "UPDATE payment SET PaymentMethod = ?, PaymentStatus = ? WHERE PaymentID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $paymentmethod, PDO::PARAM_STR);
            $stmt->bindParam(2, $paymentstatus, PDO::PARAM_STR);
            $stmt->bindParam(3, $paymentid, PDO::PARAM_STR);
            $stmt-> execute();

            $sqlpurchase = "UPDATE purchaseorder SET PaymentStatus = ? WHERE OrderID = ?";
            $stmtpurchase = $this->db->prepare($sqlpurchase);
            $stmtpurchase->bindParam(1, $paymentmethod, PDO::PARAM_STR);
            $stmtpurchase->bindParam(2, $paymentid, PDO::PARAM_STR);
            $stmtpurchase-> execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getShippingByID($shippingid){
        try{
            $sql = "SELECT * FROM shipping WHERE ShippingID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $shippingid, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function updateShipping($shippingid, $shippingmethod, $shippingstatus, $trackingnumber){
        try{
            $sql = "UPDATE shipping SET ShippingMethod = ?, ShippingStatus = ?, TrackingNumber = ? WHERE ShippingID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $shippingmethod, PDO::PARAM_STR);
            $stmt->bindParam(2, $shippingstatus, PDO::PARAM_STR);
            $stmt->bindParam(3, $trackingnumber, PDO::PARAM_STR);
            $stmt->bindParam(4, $shippingid, PDO::PARAM_STR);
            $stmt-> execute();

            $sqlpurchase = "UPDATE purchaseorder SET Shippingmethod = ? WHERE OrderID = ?";
            $stmtpurchase = $this->db->prepare($sqlpurchase);
            $stmtpurchase->bindParam(1, $shippingmethod, PDO::PARAM_STR);
            $stmtpurchase->bindParam(2, $shippingid, PDO::PARAM_STR);
            $stmtpurchase-> execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

}

?>