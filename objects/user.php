<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $id;
    public $name;
    public $email_address;
    public $password;
    public $timestamp;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    // create product 
    function create(){
 
        //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    name=:name, 
                    email_address=:email_address,
                    password=:password,
                    created=:created";
 
        $stmt = $this->conn->prepare($query);

    
 
        // posted values
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email_address=htmlspecialchars(strip_tags($this->email_address));
        $this->password=htmlspecialchars(strip_tags($this->password));

        // to get time-stamp for 'created' field
        $this->timestamp = date('Y-m-d H:i:s');

        $hash_password = password_hash($this->password, PASSWORD_BCRYPT);

        // bind values 
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email_address", $this->email_address);
        $stmt->bindParam(":password", $hash_password);
        $stmt->bindParam(":created", $this->timestamp);
 
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
 
    }
}
?>