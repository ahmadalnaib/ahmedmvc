<?php
/*
 * PDO Database Class
 * Connect to Database
 * Create prepared statements
 * Bind values
 * Return rows ans results
 * */

class Database {
    private $host =DB_HOST;
    private $user =DB_USER;
    private $pass=DB_PASS;
    private $dbname= DB_NAME;

    private  $dbh;
    private  $stmt;
    private  $error;

    public  function  __construct()
    {
        //set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' .$this->dbname;
        $options=[
          PDO::ATTR_PERSISTENT=>true,
          PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ];

        //Create PDO instance

        try {
         $this->dbh= new PDO($dsn,$this->user,$this->pass,$options);
        }catch (PDOException $e) {
            $this->error=$e->getMessage();
            echo  $this->error;
        }
    }

//


}