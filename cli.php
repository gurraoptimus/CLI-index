<?php
// CLI PHP script to open a PHP dashboard

if (php_sapi_name() !== 'cli') {
    echo "This script must be run from the command line.\n";
    exit(1);
}

$dashboardFile = 'dashboard.php';
$host = 'localhost';
$port = 8000;
$url = "http://$host:$port/$dashboardFile";

// Start PHP built-in server in the background
echo "Starting PHP server at $host:$port...\n";
shell_exec("php -S $host:$port > /dev/null 2>&1 &");

// Wait a second to make sure the server is up
sleep(1);

// Open in default browser
echo "Opening dashboard at $url\n";
switch (PHP_OS_FAMILY) {
    case 'Windows':
        shell_exec("start $url");
        break;
    case 'Darwin': // macOS
        shell_exec("open $url");
        break;
    case 'Linux':
        shell_exec("xdg-open $url");
        break;
    default:
        echo "Please open this URL manually: $url\n";
}
