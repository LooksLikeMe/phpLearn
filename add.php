<?php
 $task = $_POST['task'];
 if($task == '') {
     echo 'Введите само задание';
     exit();
 }
 require 'configdb.php';

 $sql = 'INSERT INTO tasks(task) VALUES(:task)';
 $query = $pdo->prepare($sql);
 $query->execute(['task' => $task]);

 header('Location: /');
?>