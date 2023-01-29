<?php
class book
{
    
    private $db = null;
    public function __construct()
    {
        $this->db_connect();
    }
    private function db_connect()
    {
        try {

            $this->db = new PDO("mysql:host=localhost;dbname=face;charset=utf8"
            ,'porto', 'password');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
       
        } catch (PDOException $e) {
            echo $e->getMessage();
            
        }
    }
    private function db_close()
    {
        $this->db=null;
    }
    public function addnewbook($book){
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
            $stmt->bindValue(":isbn", $book[0], PDO::PARAM_STR);
            $stmt->bindValue(":name", $book[1], PDO::PARAM_STR);
            $stmt->bindValue(":type", $book[2], PDO::PARAM_STR);
            $stmt->bindValue(":price",$book[3], PDO::PARAM_INT);
            $stmt->bindValue(":qty",$book[4], PDO::PARAM_INT);
            $stmt->execute();
            $status = 1;
        }catch(PDOException $e){
            $status = 0;
           
        }
        return $status;
    }
    public function selectallrow(){
        $sql = "SELECT * FROM `table1` ";
        $res = $this->db->query($sql);
        $data=$res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function removebook($id){
        $sql = "DELETE FROM `table1` WHERE `ISBN`=?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

    }
    public function getbookid($id)
    {
        $sql = "SELECT * FROM `table1` WHERE `ISBN`='$id'";
        $res = $this->db->query($sql);
        return $res->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id,$up)
    {
        $sql = "UPDATE `table1` SET 
        `ISBN`=:isbn,
        `name`=:name,
        `type`=:type,
        `price`=:price,
        `qty`=:qty 
        WHERE `ISBN`='$id'";
        $stmt = $this->db->prepare($sql);
        $result = 1;
        try {
            $stmt->bindValue(':isbn',    $up[0],    PDO::PARAM_STR);
            $stmt->bindValue(':name',  $up[1],  PDO::PARAM_STR);
            $stmt->bindValue(':type', $up[2], PDO::PARAM_STR);
            $stmt->bindValue(':price', $up[3], PDO::PARAM_INT);
            $stmt->bindValue(':qty', $up[4], PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            $result = 0;
        }
        return $result;
    }
  
    
}

?>
