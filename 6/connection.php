<?php
class con
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "arkademy";
    private $connection;
    public function __construct()
    {
        try {
            $con = new PDO('mysql:host='.$this->host.';dbname='.$this->database.';charset=utf8mb4', $this->user, $this->password);
            $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection = $con;
        } catch (Exception $e) {
            print "Query Error: ".$e->getMessage()."<br/>";
            die();
        }
    }
    public function ambilUsers()
    {
        try {
            $query = $this->connection->prepare("SELECT * FROM users");
            $query->execute();

            while ($data = $query->fetch()) {
                $result[] = $data;
            }

            return $result;
        } catch (Exception $e) {
            print "Query Error: ".$e->getMessage()."<br/>";
            die();
        }
    }
    public function ambilSkills($id)
    {
        try {
            $query = $this->connection->prepare("SELECT * FROM skills WHERE user_id = :user_id");
            $query->bindParam(':user_id', $id);
            $query->execute();
            
            while ($data = $query->fetch()) {
                $result[] = $data['name'];
            }

            if (count($result)) {
                return implode(',', $result);
            } else {
                return '';
            }
        } catch (Exception $e) {
            print "Query Error: ".$e->getMessage()."<br/>";
            die();
        }
    }
    public function inputUser($name)
    {
        try {
            $query = $this->connection->prepare("INSERT INTO users(name) values (:name)");
            $query->bindParam(":name", $name);
            $query->execute();
        } catch (Exception $e) {
            print "Query Error: ".$e->getMessage()."<br/>";
            die();
        }
    }
    public function inputSkill($name, $user_id)
    {
        try {
            $query = $this->connection->prepare("INSERT INTO skills(name, user_id) values (:name, :user_id)");
            $query->bindParam(":name", $name);
            $query->bindParam(":user_id", $user_id);
            $query->execute();
        } catch (Exception $e) {
            print "Query Error: ".$e->getMessage()."<br/>";
            die();
        }
    }
}
