<?php
require_once('database.php');

class Student{
    protected static $table_name="details";
	protected static $db_fields = array();
    
    public $fname;
	public $lname;
	public $Address_no;
    public $Address_street;
    public $Address_city;
    public $con;    
    public $email;
    public $no_meters;
    public $Meter_id;
	public $password;
    public $Confirmpassword; 
    
    public function create() {
		global $database;
	  $sql = "INSERT INTO ".self::$table_name." (";
		$sql .= "fname, lname, Address_no,Address_street, Address_city, con, email, no_meters, mid, password, conpassword ";
	  $sql .= ") VALUES ('";
		$sql .= $database->escape_value($this->fname)."', '";
		$sql .= $database->escape_value($this->lname)."', '";
		$sql .= $database->escape_value($this->Address_no)."', '";
		$sql .= $database->escape_value($this->Address_street)."', '";
		$sql .= $database->escape_value($this->Address_city)."', '";
		$sql .= $database->escape_value($this->con)."', '";
		$sql .= $database->escape_value($this->email)."', '";
		$sql .= $database->escape_value($this->no_meters)."', '";
		$sql .= $database->escape_value($this->Meter_id)."', '";
		$sql .= $database->escape_value($this->password)."', '";
		$sql .= $database->escape_value($this->Confirmpassword)."')";
	 $database->query($sql);
	}
}

?>