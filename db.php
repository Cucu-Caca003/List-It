<?php
$db=new SQLite3('todolist.db');

$db->exec("CREATE TABLE IF NOT EXISTS tasks (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    description TEXT NOT NULL,
    completed INTEGER DEFAULT 0
)");
?>
