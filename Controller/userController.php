<?php

class User{
    private $db;

    function __construct($connect){
        $this->db=$connect;
    }

    function insertUser($username, $password){
        try{
            $result = $this->getUserByUserName($username);
            if($result["num"] > 0){
                return false;
            }else{
                $new_password = md5($password.$username);
                $sql = "INSERT INTO userlogin(username, password) VALUES (?, ?) ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(1, $username, PDO::PARAM_STR);
                $stmt->bindParam(2, $new_password, PDO::PARAM_STR);
                $stmt->execute();

                //Customer
                $name = 'John Doe';
                $address = '52 347 Phahonyothin Rd, Lak Hok, Mueang Pathum Thani District, Pathum Thani 12000';
                $phone = '02 791 6000';
                $email = 'Example@gmail.com';

                $userID = $this->db->lastInsertId();
                $sqlCustomer = "INSERT INTO customer (UserID, Name, Address, Phone, Email) VALUES (?, ?, ?, ?, ?)";
                $stmtCustomer = $this->db->prepare($sqlCustomer);
                $stmtCustomer->bindParam(1, $userID, PDO::PARAM_INT);
                $stmtCustomer->bindParam(2, $name, PDO::PARAM_STR);
                $stmtCustomer->bindParam(3, $address, PDO::PARAM_STR);
                $stmtCustomer->bindParam(4, $phone, PDO::PARAM_STR);
                $stmtCustomer->bindParam(5, $email, PDO::PARAM_STR);
                $stmtCustomer->execute();
                return true;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getUserByUserName($username){
        try{
            $sql = "SELECT COUNT(*) as num FROM userlogin WHERE username = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $username, PDO::PARAM_STR);
            $stmt->execute();  
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getUser($username, $password){
        try{
            $sql = "SELECT * FROM userlogin WHERE username = ? AND password = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $username, PDO::PARAM_STR);
            $stmt->bindParam(2, $password, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function getCustomer($userid){
        try{
            $sql = "SELECT * FROM customer WHERE UserID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $userid, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function updateCustomer($name, $address, $phone, $email, $userid){
        try{
            // $userid = 12;

            $sql = "UPDATE customer SET Name = ?, Address = ?, Phone = ?, Email = ? WHERE UserID = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $name, PDO::PARAM_STR);
            $stmt->bindParam(2, $address, PDO::PARAM_STR);
            $stmt->bindParam(3, $phone, PDO::PARAM_STR);
            $stmt->bindParam(4, $email, PDO::PARAM_STR);
            $stmt->bindParam(5, $userid, PDO::PARAM_STR);
            $stmt-> execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    function insertOrder($userid, $date, $price, $payment, $shipping){
        try{

            $orderstatus = "Pending";

            $sql = "INSERT INTO purchaseorder(CustomerID, OrderDate, TotalAmount, OrderStatus, PaymentStatus, ShippingMethod) VALUES (?, ?, ?, ?, ?, ?) ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $userid, PDO::PARAM_INT);
            $stmt->bindParam(2, $date, PDO::PARAM_STR);
            $stmt->bindParam(3, $price, PDO::PARAM_INT);
            $stmt->bindParam(4, $orderstatus, PDO::PARAM_STR);
            $stmt->bindParam(5, $payment, PDO::PARAM_STR);
            $stmt->bindParam(6, $shipping, PDO::PARAM_STR);
            $stmt->execute();


            $orderid = $this->db->lastInsertId();

            //Payment
            $paymentstatus = "Pending";

            $sqlPayment = "INSERT INTO payment (OrderId, PaymentAmount, PaymentMethod, PaymentDate, PaymentStatus) VALUES (?, ?, ?, ?, ?)";
            $stmtPayment = $this->db->prepare($sqlPayment);
            $stmtPayment->bindParam(1, $orderid, PDO::PARAM_INT);
            $stmtPayment->bindParam(2, $price, PDO::PARAM_STR);
            $stmtPayment->bindParam(3, $payment, PDO::PARAM_STR);
            $stmtPayment->bindParam(4, $date, PDO::PARAM_STR);
            $stmtPayment->bindParam(5, $paymentstatus, PDO::PARAM_STR);
            $stmtPayment->execute();

            //Shipping
            $shippingstatus = "Pending";
            $trackingnumber = "A1B2-C3D4-E5F6";

            $sqlPayment = "INSERT INTO shipping (OrderId, ShippingMethod, ShippingStatus, TrackingNumber) VALUES (?, ?, ?, ?)";
            $stmtPayment = $this->db->prepare($sqlPayment);
            $stmtPayment->bindParam(1, $orderid, PDO::PARAM_INT);
            $stmtPayment->bindParam(2, $shipping, PDO::PARAM_STR);
            $stmtPayment->bindParam(3, $shippingstatus, PDO::PARAM_STR);
            $stmtPayment->bindParam(4, $trackingnumber, PDO::PARAM_STR);
            $stmtPayment->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}

?>