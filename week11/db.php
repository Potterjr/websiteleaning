<?php
class database
{ 
    private $db = null;
    public function __construct()
    {
        $this->db_connect();
    }
    private function db_connect()
    {
        try {

            $this->db = new PDO("mysql:host=localhost;dbname=reg;charset=utf8"
            ,'porto', 'password');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
       
        } catch (PDOException $e) {
            echo $e->getMessage();
            
        }
    }   
    public function selectallrow(){
        $sql = "SELECT * FROM `reglog` ";
        $res = $this->db->query($sql);
        $data=$res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    
}

?>
