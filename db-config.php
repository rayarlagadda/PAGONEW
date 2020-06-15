<?php 
$con = mysqli_connect("localhost","root","SmartHireIn@6664");
mysqli_select_db($con, "smarthirein_db");
// echo 'Connected';
// $con_phase2= mysqli_connect("localhost","root","SmartHireIn@6664");
// mysqli_select_db($con_phase2,"");
$digital_ocean= mysqli_connect("localhost","root","SmartHireIn@6664");
mysqli_select_db($digital_ocean,"smarthirein_db");

session_start();

$siteurl = "http://dev.smarthirein.ai";
class Database
{

	private $host = "localhost";
    private $db_name = "smarthirein_db";
    private $username = "root";
    private $password = "SmartHireIn@6664";
	// private $db_name_2 = "needyin_phase2";
    // private $username_2 = "root";
    // private $password_2 = "N@edy1n.C0m_P";
    public $conn;   
	// public $conn_phase2;    
    public function dbConnection()
	{
        $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }         
        return $this->conn;
    }
	// public function dbConnectionPhase2()
	// {
    //     $this->conn_phase2=null;
    //     try
	// 	{
    //         $this->conn_phase2= new PDO("mysql:host=localhost;dbname=".$this->db_name_2, $this->username_2, $this->password_2);
    //         $this->conn_phase2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
    //     }
	// 	catch(PDOException $exception)
	// 	{
    //         echo "Connection error: " . $exception->getMessage();
    //     }         
    //     return $this->conn_phase2;
    // }
}
?>