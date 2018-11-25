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

    public static function create($name, $login, $pass, $role)
    {
        global $mysqli;

        $query = "INSERT INTO users (name, login, pass, role)
                  VALUES ('$name', '$login', '$pass', '$role')";

        $mysqli->query($query);
    }

    public function update($name, $login, $pass, $role) 
    {
        global $mysqli;

        $query = "UPDATE users SET name='$name', login='$login', pass='$pass', role='$role'
                  WHERE user_id=$this->id";

        $mysqli->query($query);
    }

    public function delete() 
    {
        global $mysqli;

        $query = "DELETE FROM users WHERE user_id=$this->id";

        $mysqli->query($query);
    }
}
