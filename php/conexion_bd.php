<?php

   // $conexion = mysqli_connect("https://201.148.105.104/phpmyadmin/", "scrumsales_dev", "2Z4w6USXZ", "registro_cliente");
    // $conexion = mysqli_connect("localhost", "root", "", "scrumsales_dev");
    class DB{
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;

        public function __construct(){
            $this->host     = 'localhost';
            $this->db       = 'scrumsales_dev';
            $this->user     = 'root';
            $this->password = '';
            $this->charset  = 'utf8mb4';
        }

        function connect(){


            try{

            
                $connection = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                //$pdo = new PDO($connection, $this->user, $this->password, $options);
                $pdo = new PDO($connection,$this->user,$this->password);
            
                return $pdo;
    
    
            }catch(PDOException $e){
                print_r('Error connection: ' . $e->getMessage());
            }   

        }
         
        }


?>

