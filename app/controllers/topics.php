<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validateTopic.php');
$table = 'topics';
$errors = array();
$id = '';
$name = '';
$description = '';
$topics = selectAll($table);

if(isset($_POST['add-topic'])){
    $errors = validateTopic($_POST);
    if(count($errors) === 0){
        unset($_POST['add-topic']);
    $topic_id = create('topics', $_POST);
    $_SESSSION['message'] = 'Topic added successfully';
    $_SESSSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
    }else{
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
    
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $topics = selectOne($table, ['id' => $id]);
    $id = $topics['id'];
    $name = $topics['name'];
    $description = $topics['description'];
}
if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $topics = delete($table, $id);
    $_SESSSION['message'] = 'Topic deleted successfully';
    $_SESSSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}

if(isset($_POST['update-topic'])){
    $errors = validateTopic($_POST);
    if(count($errors) === 0){
    $id = $_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic_id = update($table, $id, $_POST);
    $_SESSSION['message'] = 'Topic updated successfully';
    $_SESSSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
    }
    else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}
?>

