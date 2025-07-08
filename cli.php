<?php
// CLI PHP script to open a dashboard in the browser

// This script checks if a dashboard file exists, creates it if not, and opens it in the default web browser.
// Ensure the script is run from the command line
if (php_sapi_name() !== 'cli') {
    die("This script can only be run from the command line.\n");
}
// Define the path to the dashboard file
$dashboardFile = __DIR__ . '/dashboard.php';

// Check if the file exists
if (!file_exists($dashboardFile)) {
    // Create a simple HTML dashboard if it doesn't exist
    file_put_contents($dashboardFile, <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>
    <p>This dashboard was opened by a PHP CLI script.</p>
</body>
</html>
HTML);
}

// Start a PHP built-in server (on port 8000)
$command = "php -S localhost:8000 > /dev/null 2>&1 &";
shell_exec($command);

// Open the dashboard in the default web browser
$url = 'http://localhost:8000/' . basename($dashboardFile);
echo "Opening dashboard at: $url\n";

// Cross-platform browser launcher
if (PHP_OS_FAMILY === 'Windows') {
    shell_exec("start $url");
} elseif (PHP_OS_FAMILY === 'Darwin') {
    shell_exec("open $url");
} else {
    shell_exec("xdg-open $url");
}
