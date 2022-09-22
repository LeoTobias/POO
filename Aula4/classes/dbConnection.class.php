<?php

class DatabaseConnection{

    public $DB_DRIVE;
    public $DB_HOST;
    public $DB_NAME;
    public $DB_USER;
    public $DB_PASS;


    public function __construct()
    {
        $this->setDBDRIVE('mysql');
        $this->setDBHOST('127.0.0.1');
        $this->setDBNAME('protocolo');
        $this->setDBUSER('root');
        $this->setDBPASS('');
    }

    public function setConnection(){
        $dns = "mysql:host={$this->DB_HOST};dbname={$this->DB_NAME}";
        $user = $this->DB_USER;
        $pass = $this->DB_PASS;

        try {
            $conn = new PDO($dns, $user, $pass);
            return $conn;

        } catch (\Exception $e) {
            echo $e;
        }
    }


    public function setDBDRIVE($DB_DRIVE)
    {
        $this->DB_DRIVE = $DB_DRIVE;

        return $this;
    }

    public function getDBDRIVE()
    {
        return $this->DB_DRIVE;
    }

    public function setDBHOST($DB_HOST)
    {
        $this->DB_HOST = $DB_HOST;

        return $this;
    }


    public function getDBHOST()
    {
        return $this->DB_HOST;
    }


    public function setDBNAME($DB_NAME)
    {
        $this->DB_NAME = $DB_NAME;

        return $this;
    }


    public function getDBNAME()
    {
        return $this->DB_NAME;
    }


    public function setDBUSER($DB_USER)
    {
        $this->DB_USER = $DB_USER;

        return $this;
    }


    public function getDBUSER()
    {
        return $this->DB_USER;
    }


    public function setDBPASS($DB_PASS)
    {
        $this->DB_PASS = $DB_PASS;

        return $this;
    }


    public function getDBPASS()
    {
        return $this->DB_PASS;
    }

}
