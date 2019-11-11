<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'mysql.hostinger.co.id';
$CFG->dbname    = 'u713260332_proto';
$CFG->dbuser    = 'u713260332_kol';
$CFG->dbpass    = 'P4sswordR4hasia';
$CFG->prefix    = 'bk_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://officialdevbjb.com/id/materi';
$CFG->dataroot  = '/home/u873115817/domains/officialdevbjb.com/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!