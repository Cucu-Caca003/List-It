<?php
require_once 'db.php';

class TaskController{
    private $db;

    public function __construct($db){
        $this->db=$db;
    }

/*take reference 🥲*/


    public function index(){
    $result=$this->db->query('SELECT * FROM tasks');
    $tasks=[];
    while ($row=$result->fetchArray(SQLITE3_ASSOC)){
       $tasks[]=$row;
    }
    require 'views/task_list.php';
}


/*take reference 🥲*/

public function add(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task']) && !empty($_POST['task'])){
        $stmt=$this->db->prepare('INSERT INTO tasks (description, completed) VALUES (:description, :completed)');
        $stmt->bindValue(':description', $_POST['task'], SQLITE3_TEXT);
        $stmt->bindValue(':completed', 0, SQLITE3_INTEGER);
        $stmt->execute();
    }
    header('Location: index.php');
}

public function Complete(){
    if (isset($_GET['id'])){
        $stmt=$this->db->prepare('UPDATE tasks SET completed=1 WHERE id=:id');
        $stmt->bindValue(':id', $_GET['id'], SQLITE3_INTEGER);
        $stmt->execute();
    }
    header('Location: index.php');
}

public function Delete(){
    if (isset($_GET['id'])){
        $stmt=$this->db->prepare('DELETE FROM tasks WHERE id=:id');
        $stmt->bindValue(':id', $_GET['id'], SQLITE3_INTEGER);
        $stmt->execute();
    }
    header('Location: index.php');
}
}
?>
