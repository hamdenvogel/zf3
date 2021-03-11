<?php

namespace Core\Stdlib;

use Zend\Stdlib\RequestInterface;

trait CurrentUrl
{
    public function getUrl(RequestInterface $request)
    {
        $protocol = 'http://';
        if ($request->getServer('HTTPS') != null) {
            $protocol = 'https://';
        }

        return $protocol.$request->getServer('HTTP_HOST');
    }
}