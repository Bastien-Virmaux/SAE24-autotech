<?php
// Configuration des informations de connexion SSH
$ssh_host = '192.168.0.110';
$ssh_port = 22;
$ssh_user = 'srv-debian'; // Remplacez par votre nom d'utilisateur SSH
$ssh_key = '/path/to/private/key'; // Chemin vers la clé privée SSH

// Chemin du fichier de log Squid sur le serveur distant
$log_file_path = '/var/log/squid/access.log';

// Initialiser la connexion SSH
$connection = ssh2_connect($ssh_host, $ssh_port);

if (!$connection) {
     die('Erreur : Impossible de se connecter au serveur SSH');
}

// Authentification via clé privée
if (!ssh2_auth_pubkey_file($connection, $ssh_user, $ssh_key . '.pub', $ssh_key)) {
     die('Erreur : Authentification SSH échouée');
}

// Lire le fichier de log
$sftp = ssh2_sftp($connection);
$log_file = fopen("ssh2.sftp://$sftp$log_file_path", 'r');

if (!$log_file) {
     die('Erreur : Impossible de lire le fichier de log');
}

// Afficher les logs
echo '<h1>Logs de Squid</h1>';
echo '<pre>';

while ($line = fgets($log_file)) {
     echo htmlspecialchars($line);
}

echo '</pre>';

fclose($log_file);

// Fermer la connexion SSH
ssh2_disconnect($connection);
