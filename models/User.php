<?php

require_once '../db.php';

class User 
{
    public $id;
    public $name;
    public $login;
    public $pass;
    public $role;

    
    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT * FROM users WHERE user_id=$id";
        $result = $mysqli->query($query);

        $user_data = $result->fetch_assoc();

        $this->id = $user_data['user_id'];
        $this->name = $user_data['name'];
        $this->login = $user_data['login'];
        $this->pass = $user_data['pass'];
        $this->role = $user_data['role'];
    }

    public static function getAll() 
    {
        global $mysqli;

        $query = "SELECT user_id FROM users";
        $result = $mysqli->query($query);

        $users = [];
        while ($user_data = $result->fetch_assoc()) {
            $users[] = new User($user_data['user_id']);
        }

        return $users;
    }

    public static function getUserByLoginPass($login, $pass)  // создание функции
    {
        global $mysqli;  // подключение к базе
        $query = "SELECT user_id FROM users WHERE login='$login' AND pass='$pass'"; //выбираем из базы что чему ровняется
        $result = $mysqli->query($query); // создаем переменную где содержание в базе ровняется запросу из переменной $query
        if ($result->num_rows != 0) { // задаем условие при котором "если $result не равен 0, то такой пользователь есть, иначе - такого пользователя нет"
            return true;
        } else {
            return false;
        }
        
    }

    public static function create($name, $login, $pass, $role)
    {
        global $mysqli;
        // потестила, этот пункт работает
        $query  = "SELECT login FROM users WHERE login='$login'";
        $result = $mysqli->query($query);
        if ($result->num_rows==1) {
            return false;
        }


        $query = "INSERT INTO users (name, login, pass, role)
                  VALUES ('$name', '$login', '$pass', '$role')";

        $mysqli->query($query);
        return true;
    }

    public function update($name, $login, $pass, $role) 
    {
        global $mysqli;
        // думаю здесь проверка по имени не очень нужна, так что тоже сделала проверку только по логину
        $query  = "SELECT login FROM users WHERE login='$login'";
        $result = $mysqli->query($query);
        if ($rusult->num_rows==1) {
            return false;
        }


        $query = "UPDATE users SET name='$name', login='$login', pass='$pass', role='$role'
                  WHERE user_id=$this->id";

        $mysqli->query($query);
        return true;
    }

    public function delete() 
    {
        global $mysqli;

        $query = "DELETE FROM users WHERE user_id=$this->id";

        $mysqli->query($query);
    }
}
