<?php
/**
 * Framework configuration - the configuration parameters of the Framework components.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 * @date December 15th, 2015
 */

use Nova\Config;
use Nova\Events\Manager as Events;


/**
 * Logger configuration
 */
Config::set('logger', array(
    'display_errors' => false
));

/**
 * Profiler configuration
 */
Config::set('profiler', array(
    'use_forensics' => false,
    'with_database' => false
));

/**
 * Cache configuration
 */
Config::set('cache', array(
    'storage'       => 'files', // Blank for auto
    'default_chmod' => 0777,    // 0777, 0666, 0644

    /*
     * Fall back when Driver is not supported.
     */
    'fallback'    => "files",

    'securityKey' => 'auto',
    'htaccess'    => true,
    'path'        => CACHEPATH,

    'memcache' => array(
        array("127.0.0.1",11211,1),
    ),
    'redis' => array(
        'host'     => '127.0.0.1',
        'port'     => '',
        'password' => '',
        'database' => '',
        'timeout'  => ''
    ),
    'ssdb' => array(
        'host'     => '127.0.0.1',
        'port'     => 8888,
        'password' => '',
        'timeout'  => ''
    ),
    'extensions' => array(),
));

/**
 * Routing configuration
 */
Config::set('routing', array(
    'patterns' => array(
        //':hex'    => '[[:xdigit:]]+',
        //':uuidV4' => '\w{8}-\w{4}-\w{4}-\w{4}-\w{12}'
    ),
    'auto_dispatch' => array(
        'default_controller' => 'Welcome',
        'default_method'     => 'index'
    )
));

/**
 * Set the Framework's timezone.
 */
Config::set('timezone', 'Europe/Rome');

/**
 * All known Languages
 */
Config::set('languages', array(
    'cz' => array('info' => 'Czech',    'name' => 'čeština',    'locale' => 'cz_CZ'),
    'de' => array('info' => 'German',   'name' => 'Deutsch',    'locale' => 'de_DE'),
    'en' => array('info' => 'English',  'name' => 'English',    'locale' => 'en_US'),
    'es' => array('info' => 'Spanish',  'name' => 'Español',    'locale' => 'es_ES'),
    'fr' => array('info' => 'French',   'name' => 'Français',   'locale' => 'fr_FR'),
    'it' => array('info' => 'Italian',  'name' => 'italiano',   'locale' => 'it_IT'),
    'nl' => array('info' => 'Dutch',    'name' => 'Nederlands', 'locale' => 'nl_NL'),
    'pl' => array('info' => 'Polish',   'name' => 'polski',     'locale' => 'pl_PL'),
    'ro' => array('info' => 'Romanian', 'name' => 'Română',     'locale' => 'ro_RO'),
    'ru' => array('info' => 'Russian',  'name' => 'ру́сский',    'locale' => 'ru_RU')
));


/**
 * Email (PHPMailer) configuration
 */
Config::set('emailer', array(
    'charset'       => 'iso-8859-1',
    'from_name'     => 'Nova Website',
    'from_email'    => 'nova@localhost',
    'mailer'        => 'mail',           // Could be 'mail' => 'sendmail' or 'smtp'

    /** Only when using smtp as mailer: */
    'smtp_host'     => 'localhost',
    'smtp_port'     => 25,
    'smtp_secure'   => '',    // Options: '' => 'ssl' or 'tls'
    'smtp_auth'     => false, // Use SMTPAuth, (false or true)
    'smtp_user'     => '',    // Only when using SMTPAuth
    'smtp_pass'     => '',    // Only when using SMTPAuth
    'smtp_authtype' => ''     // Options are LOGIN (default), PLAIN, NTLM, CRAM-MD5. Blank when not use SMTPAuth.
));

/**
 * Active Packages
 */
Config::set('packages', array(
    'DBAL',
));

/**
 * Active Modules
 */
Config::set('modules', array(
    'Demo',
));
