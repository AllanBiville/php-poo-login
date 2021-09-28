<?php
class User
{
    private $_email;
    private $_password;
    private $_role;

//################################################################
    public function get_email()
    {
        return $this->_email;
    }
    public function set_email($_email)
    {
        $this->_email = $_email;
        return $this;
    }
//################################################################
    public function get_password()
    {
        return $this->_password;
    }
    public function set_password($_password)
    {
        $this->_password = $_password;
        return $this;
    }
//################################################################
    public function get_role()
    {
        return $this->_role;
    }
    public function set_role($_role)
    {
        $this->_role = $_role;
        return $this;
    }
//################################################################
}
