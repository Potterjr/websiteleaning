<?php
session_start();
class data{
    private $db = null;
    public function __construct()
    {
        $this->db_connect();
    }
    private function db_connect()
    {
        try {
            $host = "mysql:host=localhost;dbname=midterm;charset=utf8";
            $id = "root";
            $password = "";
            $this->db = new PDO($host,$id, $password);

            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
            
        }
    }                           
    private function db_close()
    {
        $this->db=null;
    }
    
    public function login($id,$password)
    {
        try {
          
            $stmt = $this->db->prepare("SELECT * FROM personal WHERE
             id = :id
            AND 
             password = :password
             " );

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $status = $result['status'];
            if ($status=='admin') {
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $id;
                $_SESSION['status'] = $status;
                echo "login sucessfuly";
                header( "refresh:1;url=panel.php" );
            }
            else if ($status=='user') { 
                $status = $result['status'];
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $id;
                $_SESSION['status'] = $status;
                echo "login sucessfuly";
                header( "refresh:1;url=user.php" );
            }
            else {
                echo "Incorrect username or password.";
                header( "refresh:1;url=main.php" );
     

            }
        } catch(PDOException $e) {
            echo  $e->getMessage();
             header( "refresh:1;url=main.php" );
        }
        
    }
    public function datatable(){
        $sql = "SELECT * FROM `personal` ";
        $res = $this->db->query($sql);
        $data=$res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function adduser($user){
        $sql="INSERT INTO 
        `table1`
        (`ISBN`, `name`, `type`, `price`, `qty`)
         VALUES 
         (:isbn,
         :name,
         :type,
         :price,
         :qty)
         ";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(":isbn", $user[0], PDO::PARAM_STR);
            $stmt->bindValue(":name", $user[1], PDO::PARAM_STR);
            $stmt->bindValue(":type", $user[2], PDO::PARAM_STR);

            $stmt->execute();
            $status = 1;
        }catch(PDOException $e){
            $status = 0;
           
        }
        return $status;
    }
   
}
?>


