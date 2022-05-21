<?php

function validatePost($post)
{
  $errors = array();
  if (empty($post['title'])) {
    array_push($errors, "Title is required");
  }
  if (empty($post['body'])) {
    array_push($errors, "Posts can't be empty");
  }
  if (empty($post['topic_id'])) {
    array_push($errors, "Please select a topic");
  }
  $existingPost = selectOne('posts', ['title' => $post['title']]);
  if ($existingPost) {
    if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
      array_push($errors, "Title already exists");
    }
     if (isset($post['add-post'])) {
      array_push($errors, "Title already exists");
    }
  }

  return $errors;
}
