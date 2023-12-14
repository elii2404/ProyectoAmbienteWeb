<?php

class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    public function __construct(
        $dbname = "heladeria",
        $tablename = "productos",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        $this->con = mysqli_connect($servername, $username, $password);

        if (!$this->con) {
            die("Connection failed : " . mysqli_connect_error());
        }

        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        if (mysqli_query($this->con, $sql)) {
            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            if (!$this->con) {
                die("Connection failed after creating the database: " . mysqli_connect_error());
            }

            $sql = "CREATE TABLE IF NOT EXISTS $tablename
                        (productoID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         productoNombre VARCHAR(50) NOT NULL,
                         productoCantidad VARCHAR(123) NOT NULL,
                         productoDescripcion VARCHAR(50) NOT NULL,
                         productoPrecio DECIMAL(10,2) NOT NULL,
                         imagen VARCHAR(255) NOT NULL,
                         categoriaID INT(11) DEFAULT NULL
                        );";

            if (!mysqli_query($this->con, $sql)) {
                die("Error creating table : " . mysqli_error($this->con));
            }

        } else {
            die("Error creating database : " . mysqli_error($this->con));
        }
    }

    public function getData()
    {
        $sql = "SELECT * FROM $this->tablename";
        $result = mysqli_query($this->con, $sql);

        if (!$result) {
            die("Error in SQL query: " . mysqli_error($this->con));
        }

        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            die("No data found in the table.");
        }
    }
}
?>
