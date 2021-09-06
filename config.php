<?php  // Moodle configuration file 
unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'sqlsrv';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '10.50.150.11';
$CFG->dbname    = 'Aula2020';
$CFG->dbuser    = 'aplicaciones';
$CFG->dbpass    = 'disico';
$CFG->prefix    = 'mdl_';
$CFG->sslproxy=true;
$CFG->disablelogintoken = true;
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 1433,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'https://aulavirtualpre2020.uv.cl';
$CFG->dataroot  = '/mnt/NFSPregrado/aula2020';
$CFG->dirout   = 'https://portal.uv.cl';
$CFG->admin     = 'admin';

$CFG->localcachedir = '/var/local/cache';


$CFG->directorypermissions = 0777;


$CFG->xsendfile = 'X-Accel-Redirect';
$CFG->xsendfilealiases = array(
    '/dataroot/' => $CFG->dataroot,
    '/localcachedir/' => '/var/local/cache',
    '/filedir' => '/mnt/NFSPregrado/aula2020/filedir',

);

$CFG->session_handler_class = '\core\session\redis';
$CFG->session_redis_host = '10.50.100.4';
$CFG->session_redis_port = 6379;  // Optional.
$CFG->session_redis_database = 0;  // Optional, default is db 0.
$CFG->session_redis_auth = 'disico'; // Optional, default is don't set one.
$CFG->session_redis_prefix = 'saula_migrada'; // Optional, default is don't set one.
$CFG->session_redis_acquire_lock_timeout = 120;
$CFG->session_redis_lock_expire = 7200;
$CFG->session_redis_serializer_use_igbinary = false; // Optional, default is PHP builtin serializer.

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
