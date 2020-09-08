<?php

class Connection
{
    private $SERVERNAME = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DBNAME = 'tattooshop';
    private $CONN;

    function __construct()
    {
        // Create connection
        $conn = mysqli_connect($this->SERVERNAME, $this->USERNAME, $this->PASSWORD, $this->DBNAME);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $this->CONN = $conn;
    }

    function getClients()
    {
        $sql = 'SELECT * FROM clients';
        $result = $this->CONN->query($sql);
        $resultArray = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($resultArray, $row);
            }
        }
        $this->CONN->close();
        return $resultArray;
    }
}