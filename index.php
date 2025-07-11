<?php
// Simple index page for Index CLI with ngrok-like style

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<link rel='icon' type='image/svg+xml' href='data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 48 48\"><defs><linearGradient id=\"cli-grad\" x1=\"0\" y1=\"0\" x2=\"1\" y2=\"1\"><stop offset=\"0%25\" stop-color=\"%236c47ff\"/><stop offset=\"100%25\" stop-color=\"%2300e6d0\"/></linearGradient></defs><rect width=\"48\" height=\"48\" rx=\"12\" fill=\"url(%23cli-grad)\"/><g><path d=\"M15 28c5-2 13-2 18 0\" stroke=\"white\" stroke-width=\"2.2\" fill=\"none\" stroke-linecap=\"round\"/></g><text x=\"50%25\" y=\"58%25\" text-anchor=\"middle\" font-size=\"16\" font-family=\"Fira Mono, Consolas, monospace\" fill=\"%2300e6d0\" font-weight=\"bold\">cli</text></svg>'>";
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
// Spotify-like logotype with ngrok color style
echo "<svg width=\"64\" height=\"64\" viewBox=\"0 0 64 64\" style=\"margin-bottom:18px;\" xmlns=\"http://www.w3.org/2000/svg\">
    <defs>
        <linearGradient id=\"cli-grad\" x1=\"0\" y1=\"0\" x2=\"1\" y2=\"1\">
            <stop offset=\"0%\" stop-color=\"#6c47ff\"/>
            <stop offset=\"100%\" stop-color=\"#00e6d0\"/>
        </linearGradient>
    </defs>
    <rect x=\"0\" y=\"0\" width=\"64\" height=\"64\" rx=\"19\" fill=\"url(#cli-grad)\"/>
    <!-- Spotify-like waves, ngrok color style -->
    <g>
    <path d=\"M20 38c7-3 17-3 24 0\" stroke=\"#fff\" stroke-width=\"3.2\" fill=\"none\" stroke-linecap=\"round\"></path>
    <path d=\"M22 32c6-2 14-2 20 0\" stroke=\"#e6e6ff\" stroke-width=\"2.2\" fill=\"none\" stroke-linecap=\"round\"></path>
    <path d=\"M24 27c5-1 11-1 16 0\" stroke=\"#00e6d0\" stroke-width=\"1.6\" fill=\"none\" stroke-linecap=\"round\"></path>
    </g>
    <!-- ngrok-style text -->
    <text x=\"50%\" y=\"19\" text-anchor=\"middle\" font-size=\"22\" font-family=\"Fira Mono, Consolas, monospace\" fill=\"#fff\" font-weight=\"bold\" letter-spacing=\"-2\">Index</text>
    <text x=\"50%\" y=\"55\" text-anchor=\"middle\" font-size=\"18\" font-family=\"Fira Mono, Consolas, monospace\" fill=\"#00e6d0\" font-weight=\"bold\" letter-spacing=\"-1\">CLI</text>
</svg>";
echo "<h1>Welcome to Index CLI</h1>";
echo "<p>This is the index page located at ".$_SERVER['REQUEST_URI']."</p>";
echo "<p>Run CLI script to Open CLI Dashboard</p>";
echo '<button id="runCliBtn">Dashboard</button>';
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
            btn.enabled = true;
            btn.textContent = 'Run CLI Script';
        })
        .catch(() => {
            document.getElementById('cliOutput').style.display = 'block';
            document.getElementById('cliOutput').textContent = 'Error running CLI script.';
            btn.enabled = true;
            btn.textContent = 'Run CLI Script';
        });
};
</script>";
echo "</div>";
echo "<footer style=\"text-align: center; margin-top: 20px; color: #aaa;\">
  <p>&copy; Index CLI. All rights reserved.</p>
</footer>";
echo "</body>";
echo "</html>";
?>