<?php
// 'user' object
class User
{

    // database connection and table name
    private $conn;
    private $table_name = "users";

    // object properties
    public $id;
    public $username;
    public $email;
    public $password;

    // constructor
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // create new user record
    public function create()
    {

        // insert query
        $query = "INSERT INTO " . $this->table_name . "
            SET
                username = :username,
                email = :email,
                password = :password";

        // prepare the query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));

        // bind the values
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);

        // hash the password before saving to database
        $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password_hash);

        // execute the query, also check if query was successful
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
    // check if given email exist in the database
    public function emailExists()
    {

        // query to check if email exists
        $query = "SELECT id, username, password
            FROM " . $this->table_name . "
            WHERE email = ?
            LIMIT 0,1";

        // prepare the query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->email = htmlspecialchars(strip_tags($this->email));

        // bind given email value
        $stmt->bindParam(1, $this->email);

        // execute the query
        $stmt->execute();

        // get number of rows
        $num = $stmt->rowCount();

        // if email exists, assign values to object properties for easy access and use for php sessions
        if ($num > 0) {

            // get record details / values
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // assign values to object properties
            $this->id = $row['id'];
            $this->username = $row['username'];
            $this->password = $row['password'];

            // return true because email exists in the database
            return true;
        }

        // return false if email does not exist in the database
        return false;
    }

    // update a user record
    public function update()
    {
        // if password needs to be updated
        $password_set = !empty($this->password) ? ", password = :password" : "";

        // if no posted password, do not update the password
        $query = "UPDATE " . $this->table_name . "
            SET
                username = :username,
                email = :email
                {$password_set}
            WHERE id = :id";

        // prepare the query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->email = htmlspecialchars(strip_tags($this->email));

        // bind the values from the form
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);

        // hash the password before saving to database
        if (!empty($this->password)) {
            $this->password = htmlspecialchars(strip_tags($this->password));
            $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $password_hash);
        }

        // unique ID of record to be edited
        $stmt->bindParam(':id', $this->id);

        // execute the query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function read()
    {
        $query = "SELECT u.id, username, c.date, c.message
        FROM " . $this->table_name . " u
        JOIN comments c ON
        u.id=c.id";

        // prepare the query
        $stmt = $this->conn->prepare($query);

        // execute the query
        $stmt->execute();

        // get number of rows
        return $stmt;
    }

    public function delete()
    {
        $query = "DELETE
        FROM " . $this->table_name . " 
        WHERE id= :id";

        // prepare the query
        $stmt = $this->conn->prepare($query);

        // unique ID of record
        $this->id = htmlspecialchars(strip_tags($this->id));

        // unique ID of record to be deleted
        $stmt->bindParam(':id', $this->id);

        // execute the query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
