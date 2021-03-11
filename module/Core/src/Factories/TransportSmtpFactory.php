<?php

namespace Core\Factories;

use Zend\Mail\Transport\SmtpOptions;
use Interop\Container\ContainerInterface;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\ServiceManager\Factory\FactoryInterface;

class TransportSmtpFactory implements FactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('config');
        $transport = new SmtpTransport();
        $options = new SmtpOptions($config['mail']);
        $transport->setOptions($options);

        return $transport;
    }
}