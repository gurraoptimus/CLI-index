<?php
if (isset($_GET['run']) && $_GET['run'] === 'cli') {
    header('Content-Type: text/plain');
    // Run your shell command here — keep it safe
    // Example: show user and uptime
    $output = shell_exec('whoami && uptime 2>&1');
    echo $output ?: 'No output or command failed.';
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Index CLI Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 48'><defs><linearGradient id='cli-grad' x1='0' y1='0' x2='1' y2='1'><stop offset='0%25' stop-color='%236c47ff'/><stop offset='100%25' stop-color='%2300e6d0'/></linearGradient></defs><rect width='48' height='48' rx='12' fill='url(%23cli-grad)'/><path d='M15 28c5-2 13-2 18 0' stroke='white' stroke-width='2.2' fill='none' stroke-linecap='round'/><text x='50%25' y='58%25' text-anchor='middle' font-size='16' font-family='Fira Mono, Consolas, monospace' fill='%2300e6d0' font-weight='bold'>cli</text></svg>">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: #0a0a23;
      color: #fff;
      margin: 0;
      padding: 0;
    }
    header {
      background: #181826;
      padding: 20px;
      text-align: center;
      font-size: 1.6rem;
      font-weight: bold;
      border-bottom: 1px solid #23234d;
    }
    .container {
      max-width: 700px;
      margin: 40px auto;
      padding: 32px;
      background: #181826;
      border-radius: 14px;
      box-shadow: 0 6px 32px rgba(0,0,0,0.18);
    }
    h2 {
      margin-top: 0;
      font-size: 1.8rem;
    }
    button {
      background: linear-gradient(90deg, #6c47ff 0%, #00e6d0 100%);
      border: none;
      padding: 12px 24px;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      color: white;
      cursor: pointer;
      margin-top: 10px;
      transition: 0.2s;
    }
    button:disabled {
      opacity: 0.6;
      cursor: not-allowed;
    }
    pre {
      background: #23234d;
      color: #e6e6ff;
      padding: 18px;
      border-radius: 10px;
      margin-top: 24px;
      font-family: 'Fira Mono', monospace;
      white-space: pre-wrap;
      word-break: break-word;
      display: none;
    }
    .logo {
      display: flex;
      justify-content: center;
      margin-bottom: 18px;
    }
    svg {
      height: 64px;
      width: 64px;
    }
    @media (max-width: 600px) {
      .container { padding: 20px 16px; }
      h2 { font-size: 1.4rem; }
    }
  </style>
</head>
<body>

<header>
  Index CLI Dashboard
</header>

<div class="container">
  <div class="logo">
    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="cli-grad" x1="0" y1="0" x2="1" y2="1">
          <stop offset="0%" stop-color="#6c47ff" />
          <stop offset="100%" stop-color="#00e6d0" />
        </linearGradient>
      </defs>
      <rect width="64" height="64" rx="18" fill="url(#cli-grad)" />
      <path d="M20 38c7-3 17-3 24 0" stroke="#fff" stroke-width="3.2" fill="none" stroke-linecap="round" />
      <path d="M22 32c6-2 14-2 20 0" stroke="#e6e6ff" stroke-width="2.2" fill="none" stroke-linecap="round" />
      <path d="M24 27c5-1 11-1 16 0" stroke="#00e6d0" stroke-width="1.6" fill="none" stroke-linecap="round" />
      
      <text x="50%" y="19" text-anchor="middle" font-size="22" font-family="Fira Mono, Consolas, monospace" fill="#fff" font-weight="bold" letter-spacing="-2">Index</text>
      <text x="50%" y="55" text-anchor="middle" font-size="18" font-family="Fira Mono, Consolas, monospace" fill="#00e6d0" font-weight="bold" letter-spacing="-1">CLI</text>
    </svg>
  </div>

  <h2>Run CLI Command</h2>
  <p>Click below to execute the CLI script on your server:</p>
  <button id="runCliBtn">Run CLI</button>
  <pre id="cliOutput"></pre>
</div>

<script>
document.getElementById('runCliBtn').onclick = async function () {
  const btn = this;
  const output = document.getElementById('cliOutput');
  btn.disabled = true;
  btn.textContent = 'Running...';
  output.style.display = 'block';
  output.textContent = 'Running command...';

  try {
    const res = await fetch('?run=cli');
    const text = await res.text();
    output.textContent = text;
  } catch (err) {
    output.textContent = 'Failed to run CLI.';
  }

  btn.disabled = false;
  btn.textContent = 'Run CLI';
};
</script>

</body>
</html>
