<?php

namespace Core\Model;

use Zend\Hydrator\Reflection;

trait CoreModelTrait
{
    public function exchangeArray(array $data)
    {
        (new Reflection())->hydrate($data, $this);
    }

    public function getArrayCopy()
    {
        return (new Reflection())->extract($this);
    }
}