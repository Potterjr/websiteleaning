<?php
class database
{
    private $db;

    private function connectdb()
    {
        try {

            $login = 'root';
            $pass = '';
            $connect = "mysql:host=localhost;dbname=air";
            $this->db = new PDO($connect, $login, $pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function __construct()
    {
        $this->connectdb();
    }
    public function add($station, $pm)
    {
        $sql = "INSERT INTO recorddata (vocap, type_code, Mean) 
        VALUES (:location_id, :pm25)";
        $stmt = $this->db->prepare($sql);
        try {
            $stmt->bindParam(':location_id',$station);
            $stmt->bindParam(':pm25', $pm);
   
            $stmt->execute();
            return array("status" => "success", "message" => "Data inserted successfully");
        } catch(PDOException $e) {
          return array("status" => "error", "message" => $e->getMessage());
        }
    }
}
?>