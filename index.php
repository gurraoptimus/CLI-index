<?php
// Simple index page for CLI-index with ngrok-like style

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";

echo "<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap'>";
echo "<title>Index CLI</title>";
echo "<style>
    body {
        font-family: 'Inter', Arial, sans-serif;
        background: #0a0a23;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        color: #fff;
    }
    .container {
        max-width: 480px;
        margin: 80px auto;
        background: #181826;
        padding: 40px 32px 32px 32px;
        border-radius: 18px;
        box-shadow: 0 6px 32px rgba(0,0,0,0.18);
        text-align: center;
        border: 1px solid #23234d;
    }
    h1 {
        color: #fff;
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 18px;
        letter-spacing: -1px;
    }
    p {
        color: #b3b3cc;
        font-size: 1.08rem;
        margin-bottom: 18px;
    }
    #runCliBtn {
        background: linear-gradient(90deg, #6c47ff 0%, #00e6d0 100%);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 13px 32px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(108,71,255,0.10);
        transition: background 0.2s, box-shadow 0.2s;
        margin-top: 10px;
    }
    #runCliBtn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }
    #cliOutput {
        margin-top: 28px;
        text-align: left;
        background: #23234d;
        color: #e6e6ff;
        padding: 20px;
        border-radius: 10px;
        font-size: 1rem;
        font-family: 'Fira Mono', 'Consolas', monospace;
        box-shadow: 0 1px 4px rgba(0,0,0,0.10);
        display: none;
        white-space: pre-wrap;
        word-break: break-all;
    }
    @media (max-width: 600px) {
        .container {
            padding: 24px 8px;
        }
        h1 {
            font-size: 1.4rem;
        }
    }
</style>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";
echo "<h1>Welcome to Index CLI</h1>";
echo "<p>This is the index page located at <b>/C:/xampp/htdocs/CLI-index/index.php</b></p>";
echo "<p>To run the CLI script, use the command below or click the button:</p>";
echo '<button id="runCliBtn">Run CLI Script</button>';
echo '<pre id="cliOutput"></pre>';
echo "<script>
document.getElementById('runCliBtn').onclick = function() {
    var btn = this;
    btn.disabled = true;
    btn.textContent = 'Running...';
    fetch('cli.php')
        .then(response => response.text())
        .then(output => {
            document.getElementById('cliOutput').style.display = 'block';
            document.getElementById('cliOutput').textContent = output;
            btn.disabled = false;
            btn.textContent = 'Run CLI Script';
        })
        .catch(() => {
            document.getElementById('cliOutput').style.display = 'block';
            document.getElementById('cliOutput').textContent = 'Error running CLI script.';
            btn.disabled = false;
            btn.textContent = 'Run CLI Script';
        });
};
</script>";
echo "</div>";
echo "</body>";
echo "</html>";
?>