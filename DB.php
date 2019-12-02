<?php


class DB
{
    public $db;
    public $dbHost;
    public $dbUser;
    public $dbPass;
    public $dbName;

    public function __construct($dbHost, $dbUser, $dbPass, $dbName)
    {
        $this->dbHost = $dbHost;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
        $this->dbName = $dbName;
        $this->db = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
    }


    public function saveTable($array)
    {
        $string = json_encode( $array );
        $query = "INSERT INTO 'last_table' (`serial`) VALUES ('$string')";
        $this->db->query($query);
    }

    public function selectTable()
    {
        $query = "SELECT * FROM `last_table` ORDER BY id DESC LIMIT 1";
        $result = $this->db->query($query)->fetch_assoc();
        $string = $result['serial'];
        return json_decode( $string, true );

    }

}