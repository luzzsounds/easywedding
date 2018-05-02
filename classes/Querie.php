<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 26/04/2018
 * Time: 16:55
 */



class Querie
{
    private $dsn ="mysql:dbname=easywedding;host=localhost;charset=utf8";
    private $user = "root";
    private $password = "";
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO($this->dsn, $this->user, $this->password);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }

        catch (PDOException $e){
            Log::logWrite($e->getMessage());
        }
    }
    public function selectMethod($sql)
    {
        if (!empty($sql) > 0 || !empty($sql)) {


            $result = $this->db->prepare($sql);
            $result->execute();
            return $result->fetchAll();
        }
       else{
            return false;
       }
    }


}

//public function __destruct()
{
    //unset($this->db);
}