<?php
// Simple index page for CLI-index with added style

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>CLI Index</title>";
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 60px auto;
        background: #fff;
        padding: 32px 24px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        text-align: center;
    }
    h1 {
        color: #333;
        margin-bottom: 16px;
    }
    p {
        color: #555;
    }
</style>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";
echo "<h1>Welcome to CLI Index</h1>";
echo "<p>This is the index page located at /C:/xampp/htdocs/CLI-index/index.php</p>";
echo "<p>To run the CLI script, use the command:</p>";
echo "<pre>php cli.php</pre>";
echo "</div>";
echo "</body>";
echo "</html>";
?>