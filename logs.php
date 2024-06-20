<?php
ini_set('display_erros', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# Inclure les bibliothèques nécessaires
require '../vendor/autoload.php';

use phpseclib3\Net\SSH2;

$server_ip = "192.168.0.110";
$port = 22;
$username = "debian-srv";
$password = "Azerty123";
$log_file_path = "/var/log/squid/access.log";

$ssh = new SSH2($server_ip, $port);

if (!$ssh->login($username, $password)) {
     exit('Connexion SSH échouée.');
}

$log = $ssh->exec('cat ' . $log_file_path);

function parseLogLine($line)
{
     $parts = preg_split('/\s+/', $line);
     return $parts;
}

function formatDateTime($timestamp)
{
     $date = DateTime::createFromFormat('U.u', $timestamp, new DateTimeZone('UTC'));
     if ($date) {
          $date->setTimezone(new DateTimeZone('Europe/Paris'));
          return $date->format('d/m/Y H:i:s');
     }

     return $timestamp;
}

$logLines = explode("\n", $log);
$logEntries = array_map('parseLogLine', $logLines);
$logEntries = array_reverse($logEntries);
?>

<?php print_r($logEntries) ?>