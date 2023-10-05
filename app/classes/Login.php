<?php 
namespace app\classes;

class Login
{
    public $email;
    public $password;

    public function auth()
    {
        return 'Email: ' . $this->email . ' - Senha: ' . $this->password;
    }
}
