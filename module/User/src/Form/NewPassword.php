<?php

namespace User\Form;

use User\Form\Filter\NewPasswordFilter;
use Zend\Form\Form;
use Zend\Form\Element\Csrf;
use Zend\Form\Element\Email;

class NewPassword extends Form
{
    public function __construct()
    {
        parent::__construct('new-password', []);

        $this->setInputFilter(new NewPasswordFilter());
        $this->setAttributes(['method' => 'POST']);

        $email = new Email('email');
        $email->setAttributes([
            'placeholder' => 'Email',
            'class' => 'form-control',
            'maxlength' => 255
        ]);
        $this->add($email);

        $csrf = new Csrf('csrf');
        $csrf->setOptions([
            'csrf_options' => [
                'timeout' => 600
            ]
        ]);
        $this->add($csrf);
    }
}