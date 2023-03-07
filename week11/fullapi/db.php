<?php
class database
{
    private $db;

    private function connectdb()
    {
        try {

            $login = 'root';
            $pass = '';
            $connect = "mysql:host=localhost;dbname=word";
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
    public function add($vocap, $selection, $mean)
    {
        $sql = "INSERT INTO text (vocap, type_code, Mean) 
        VALUES (:vocap, :selection, :mean)";
        $stmt = $this->db->prepare($sql);
        try {
            $stmt->bindParam(':vocap',$vocap);
            $stmt->bindParam(':selection', $selection);
            $stmt->bindParam(':mean', $mean);
            $stmt->execute();
            return array("status" => "success", "message" => "Data inserted successfully");
        } catch(PDOException $e) {
          return array("status" => "error", "message" => $e->getMessage());
        }
    }
    public function show()
    {
        try {
            $sql="SELECT * FROM text";
            $stmt = $this->db->prepare($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            header('Content-Type: application/json');
        
          } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
          return $data;
    }
    public function deldete($del)
    {
        try {
            
            $sql="SELECT * FROM text";
            $stmt = $this->db->prepare($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($data);
          } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
    }
    
}
