<?php

namespace User\Model;

use Core\Model\CoreModelTrait;

class User
{
    use CoreModelTrait;

    public $id;
    public $name;
    public $email;
    public $password;
    public $token;
    public $email_confirmed;
}