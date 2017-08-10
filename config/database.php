<!DOCTYPE html>
<html lang="en">
<head>
        <title>Labo-Riadi</title>
        <meta charset="utf-8">
</head>
<body>
<?php
          class Database
          {

                       
                        public $host = "tkck4yllxdrw0bhi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
                        public $db_name = "ppnnp921ek8iylc1";
                        public $username = "x79ugfdeaf2l37zh";
                        public $password = "gaf62w8w4zpvrhtq";
                        public $con;
                           public function dbConnection()
                            {
                              $this->con = null ;
                                try {
                                $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8",$this->username, $this->password);
                                $this->con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION) ;
                                    }
                             catch(PDOException $exception)
                              {
                              echo "Connection error: " . $exception->getMessage();
                              }
                              return $this->con;
                            }

          }

?>
</body>
</html>