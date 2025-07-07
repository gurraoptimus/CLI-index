<?php
// Simple CLI PHP script

if (php_sapi_name() !== 'cli') {
    echo "This script must be run from the command line.\n";
    exit(1);
}

echo "Hello from the PHP CLI!\n";
echo "Arguments:\n";
foreach ($argv as $index => $arg) {
    echo "[$index]: $arg\n";
}
?>