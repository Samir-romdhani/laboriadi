<!DOCTYPE html>
<html lang="en">
<head>
        <title>labo-membres</title>
        <meta charset="utf-8">
</head>
<body>
<?php
          class Database
          {
                       /* public $host = "us-cdbr-iron-east-03.cleardb.net";
                        public $db_name = "heroku_24b9f95d4c7ac81";
                        public $username = "bd38260874d9e2";
                        public $password = "3a2208f3";*/
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