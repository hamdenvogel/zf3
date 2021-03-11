<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'db' => [
        'driver' => 'Pdo_Mysql',
        'host' => 'localhost',
        'database' => 'zf3_helpdesk',
        'username' => 'root',
        'password' => 'root'
    ],
    'mail' => [
        'name' => 'smtp.mailtrap.io', #SMTP do servidor de e-mail
        'host' => 'smtp.mailtrap.io', #No google só repetir o SMTP
        'port' => 2525, #Porta do servidor de e-mail Gmail 465
        'connection_class' => 'login', #Diz que será feito uma autenticação para disparar os e-mail
        'connection_config' => [
            'from' => 'zf3napratica@teste.com', # DE!
            'username' => '4b12bb0337b56a', #E-Mail de autenticação
            'password' => 'ed264245c3eb25', #Senha do e-mail para autenticar
            //'ssl' => 'ssl', #Tipo do envio ssl => ssl para Gmail
            'auth' => 'CRAM-MD5',
        ],
    ],
];
