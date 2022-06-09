<?php
class user{
    protected $username;
    protected $password;
    protected $email;
    protected $id;
    function set_username($username)
    {
        $this->username=$username;
    }
    function get_username()
    {
        return $this->username;
    }
    function set_password($password)
    {
        $this->password=$password;
    }
    function get_password()
    {
        return $this->password;
    }
    function set_email($email)
    {
        $this->email=$email;
    }
    function get_email()
    {
        return $this->email;
    }
    function set_id($id)
    {
        $this->id=$id;
    }
    function get_id()
    {
        return $this->id;
    }
}