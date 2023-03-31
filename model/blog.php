<?php
namespace Model;
require_once("../vendor/autoload.php");
use Model\connection;

class blog 
{
    public $title;
    public $author;
    public $date;
    public $content;
    public $db;
    function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
        $this->db = new connection();
    }

    public function save()
    {
        $sql = "INSERT INTO blog (title, author, date, content) VALUES ('$this->title', '$this->author', '$this->date', '$this->content')";
        //execute the query.
        $result = mysqli_query($this->db->conn, $sql);
        if ($result) {
            header("Location: ../index.php?=Blog saved successfully.");
            return true;
        } else {
            false;
        }
    }

    public function update($id)
    {
        $sql = "UPDATE blog SET title = '$this->title', date = '$this->date', content = '$this->content' WHERE id = $id";
        // execute the query
        $result = mysqli_query($this->db->conn, $sql);
        if ($result) {
            header("Location: ../index.php?=Blog updated successfully.");
            return true;
        } else {
            false;
        }
    }
    public function delete( $id)
    {
        $sql = "DELETE FROM blog WHERE id = $id";
        $result = mysqli_query($this->db->conn, $sql);
        if ($result) {
            header("Location: ../index.php?=Blog deleted successfully.");
            return true;
        } else {
            false;
        }
    }


}
