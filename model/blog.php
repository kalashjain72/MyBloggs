<?php
require_once("../model/connection.php");

class Blog
{
    public $title;
    public $author;
    public $date;
    public $content;

    // public function __construct($title, $author, $date, $content)
    // {
    //     $this->title = $title;
    //     $this->author = $author;
    //     $this->date = $date;
    //     $this->content = $content;
    // }
    function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function save($conn)
    {
        $sql = "INSERT INTO blog (title, author, date, content) VALUES ('$this->title', '$this->author', '$this->date', '$this->content')";
        // execute the query
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../index.php?=Blog saved successfully.");
            return true;
        } else {
            false;
        }
    }

    public function update($conn, $id)
    {

        $sql = "UPDATE blog SET title = '$this->title', date = '$this->date', content = '$this->content' WHERE id = $id";
        // execute the query
        $result = mysqli_query($conn, $sql);
        echo "hi";
        if ($result) {
            header("Location: ../index.php?=Blog updated successfully.");
            return true;
        } else {
            false;
        }
    }
    public function delete($conn, $id)
    {
        $sql = "DELETE FROM blog WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../index.php?=Blog deleted successfully.");
            return true;
        } else {
            false;
        }
    }


}
