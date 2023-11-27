<?php 
    function sendData($firstName, $lastName, $email, $subject, $message) {
      
        include 'dbConnection.php';
  
        try {
            $pdoStatement = $conn->prepare('
            INSERT INTO messages (first_name, last_name, email, subject, message)
            VALUES (:first_name, :last_name, :email, :subject, :message)
            ');
    
            $pdoStatement->bindValue(':first_name', $firstName, PDO::PARAM_STR);
            $pdoStatement->bindValue(':last_name', $lastName, PDO::PARAM_STR);
            $pdoStatement->bindValue(':email', $email, PDO::PARAM_STR);
            $pdoStatement->bindValue(':subject', $subject, PDO::PARAM_STR);
            $pdoStatement->bindValue(':message', $message, PDO::PARAM_STR);
  
            $pdoStatement->execute();
            return true;
        } catch (Exception $e) {
            echo "Database query failed no data sent: " . $e->getMessage();
            exit;
        }
      }
  
?>