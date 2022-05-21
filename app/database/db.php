<?php
session_start();
require('connect.php');

function dd($values)
{
    echo '<pre>' . print_r($values, true) . '</pre>';
    die();
}

function executeQuery($sql, $data)
{
    global $conn;
    $statement = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $statement->bind_param($types, ...$values);
    $statement->execute();
    return $statement;
}
function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $statement = $conn->prepare($sql);

        $statement->execute();

        $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    } else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql .= " WHERE $key =?";
            } else {
                $sql .= " AND $key =?";
            }
            $i++;
        }
        $statement = executeQuery($sql, $conditions);
        $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    }
}

function selectOne($table, $conditions)
{
    global $conn;
    $sql = "SELECT * FROM $table";
    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i === 0) {
            $sql .= " WHERE $key =?";
        } else {
            $sql .= " AND $key =?";
        }
        $i++;
    }
    $sql = $sql . " LIMIT 1";
    $statement = executeQuery($sql, $conditions);

    $records = $statement->get_result()->fetch_assoc();
    return $records;
}

function create($table, $data)
{
    global $conn;
    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql .= "$key =?";
        } else {
            $sql .= ", $key =?";
        }
        $i++;
    }
    $statement = executeQuery($sql, $data);
    $id = $statement->insert_id;
    return $id;
}
function update($table, $id, $data)
{
    global $conn;
    $sql = "UPDATE $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i == 0) {
            $sql .= "$key =?";
        } else {
            $sql .= ", $key =?";
        }
        $i++;
    }
    $sql .= " WHERE id = $id";
    $statement = executeQuery($sql, $data);
    return $statement->affected_rows > 0;
}




function delete($table, $id)
{
    global $conn;
    $sql = "DELETE FROM $table WHERE id =?";
    $statement = executeQuery($sql, ['id' => $id]);
    return $statement->affected_rows > 0;
}

function getPublishedPosts()
{
    global $conn;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id = u.id WHERE p.published = ? ORDER BY p.created_at DESC";
    $statement = executeQuery($sql, ['published' => 1]);
    $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);

    return $records;
}

function getPostsByTopic($topic_id)
{
    global $conn;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id = u.id WHERE p.published = ? AND topic_id=? ORDER BY p.created_at DESC";
    $statement = executeQuery($sql, ['published' => 1,'topic_id'=>$topic_id]);
    $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);

    return $records;
}

function searchPosts($term){
    $match = '%' . $term . '%';
    global $conn;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id = u.id WHERE p.published = ? AND p.title LIKE ? OR p.body LIKE ? ORDER BY p.created_at DESC";
    $statement = executeQuery($sql, ['published' => 1, 'title' => $match, 'body' => $match]);
    $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
    
    return $records;

}


$data = [
    'username' => 'prajwal12345',
    'admin' => 0,
    'email' => 'prajwal1@mail.com',
    'password' => '1234'
];


// $id = delete('users',38);
// dd($id);
