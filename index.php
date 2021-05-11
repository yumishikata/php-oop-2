<?php

ini_set('display_errors', 1);

require_once 'User.php';
require_once 'Editor.php';

$user1 = new User('Yumi','Shikata');
$user1->email = 'yumishika17@gmail.com';
$user1->role = 'editor';
$user1->setUsername('yumi_37');
$user1->setPassword('yasfdgakd');

var_dump($user1);

if ($user1->role == 'editor') {
    $editor1 = new Editor($user1->name, $user1->surname);
    $editor1->email = $user1->email;
    $editor1->role = $user1->role;
    $editor1->setUsername($user1->getUsername());
    $editor1->setPassword($user1->getPassword());
    $editor1->editorType = 'author';

}

var_dump($editor1);
