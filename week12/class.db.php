<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
class Database
{
    private $db=null;

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
    public function show()
    {
    
        try {
            $sql = "SELECT * FROM `air1`ORDER BY id DESC LIMIT 1 ";
            $res = $this->db->query($sql);
            $data = $res->fetchAll(PDO::FETCH_ASSOC);
           

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $data;
    }
    
}
