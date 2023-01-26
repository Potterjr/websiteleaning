<?php
class member
{
    private $db;
    public $user = null;

    private function connectdb()
    {
        try {

            $login = 'root';
            $pass = '';
            $connect = "mysql:host=localhost;dbname=sec2";
            $this->db = new PDO($connect, $login, $pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo"connect sucess";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function __construct()
    {
        $this->connectdb();
    }
    public function add_member($id, $name, $email, $phone, $salary)
    {

        $sql = "INSERT INTO 
         `member`(`id`, `name`, `email`, `phone`, `salary`)
          VALUES (:id,:name,:email,:phone,:salary)";
        $stmt = $this->db->prepare($sql);
        $result = 1;
        try {
            $stmt->bindValue(':id',    $id,    PDO::PARAM_INT);
            $stmt->bindValue(':name',  $name,  PDO::PARAM_STR);
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
            $stmt->bindValue(':salary', $salary, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            $result = 0;
        }
        return $result;
    }
    public function delete_member($id)
    {
        $sql = "DELETE FROM `member` WHERE `id`=:id;";
        $stmt = $this->db->prepare($sql);
        $result = 1;
        try {
            $stmt->bindValue(':id',    $id,    PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            $result = 0;
        }
        return $result;
    }
    public function delete_memberall()
    {
        $sql = "DELETE FROM `member`";
        $stmt = $this->db->prepare($sql);
        $result = 1;
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            $result = 0;
        }
        return $result;
    }
    public function update_member($id, $name, $email, $phone, $salary)
    {
        $sql = "UPDATE `member` SET 
        `id`=:id,
        `name`=:name,
        `email`=:email,
        `phone`=:phone,
        `salary`=:salary 
        WHERE `id`=:id;";
        $stmt = $this->db->prepare($sql);
        $result = 1;
        try {
            $stmt->bindValue(':id',    $id,    PDO::PARAM_INT);
            $stmt->bindValue(':name',  $name,  PDO::PARAM_STR);
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
            $stmt->bindValue(':salary', $salary, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            $result = 0;
        }
        return $result;
    }
    public function select_member($id)
    {
        $sql = "SELECT `id`, `name`, `email`, `phone`, `salary`, `date` FROM `member` 
        WHERE `id`=:id;";
        $stmt = $this->db->prepare($sql);
        $result = 1;



        try {
            $stmt->bindValue(':id',    $id,    PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone</th>";
                echo "<th>Salary</th>";
                echo "</tr>";
                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['salary'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                }
            } else {
                echo "No data found." . "<br>";
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
            $result = 0;
        }
        return $result;
    }
    public function select_allmember()
    {
        $sql = "SELECT * FROM `member`WHERE 1";
        $stmt = $this->db->prepare($sql);

        $result = 1;
        try {
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone</th>";
                echo "<th>Salary</th>";
                echo "</tr>";
                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['salary'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                }
            } else {
                echo "No data found." . "<br>";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            $result = 0;
        }
        return $result;
    }
}
$member_controler = new member();
//$member_controler->add_member(123,"a","a@gmail.com","0950063660",15000);
//$member_controler->delete_member(123);
//$member_controler->update_member(123,"b","b@gmail.com","0630643319",200000);
$member_controler->delete_memberall();
//$member_controler->select_allmember();
