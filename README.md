<p align="center">
<svg width='64' height='64' viewBox='0 0 64 64' style='margin-bottom:18px;' xmlns='http://www.w3.org/2000/svg'><defs><linearGradient id='cli-grad' x1='0' y1='0' x2='1' y2='1'><stop offset='0%' stop-color='%236c47ff'/><stop offset='100%' stop-color='%2300e6d0'/></linearGradient></defs><rect x='0' y='0' width='64' height='64' rx='18' fill='url(%23cli-grad)'/><g><path d='M20 38c7-3 17-3 24 0' stroke='%23fff' stroke-width='3.2' fill='none' stroke-linecap='round'></path><path d='M22 32c6-2 14-2 20 0' stroke='%23e6e6ff' stroke-width='2.2' fill='none' stroke-linecap='round'></path><path d='M24 27c5-1 11-1 16 0' stroke='%2300e6d0' stroke-width='1.6' fill='none' stroke-linecap='round'></path></g><text x='50%' y='28' text-anchor='middle' font-size='22' font-family='Fira Mono, Consolas, monospace' fill='%23fff' font-weight='bold' letter-spacing='-2'>Index</text><text x='50%' y='48' text-anchor='middle' font-size='18' font-family='Fira Mono, Consolas, monospace' fill='%2300e6d0' font-weight='bold' letter-spacing='-1'>CLI</text></svg>
</p>

<div align="center">
    <sub>
        <b>Modern PHP CLI index page</b><br>
        Inspired by the ngrok dashboard with a gradient background and clean UI.
    </sub>
</div>

---

## 💡 Welcome to **Index CLI**!

A simple and modern landing page for running your PHP CLI scripts—styled after the ngrok dashboard and built for clarity and ease.

---

## ✨ Features

- ✅ Clean, responsive UI
- ▶️ "Run CLI Script" button to execute `cli.php` directly from the browser
- 🌐 Web terminal-style dashboard with real-time output

---

## 🧪 Example

### Main UI
<img src="https://raw.githubusercontent.com/gurraoptimus/Index-CLI/refs/heads/main/screenshot.png" alt="Screenshot of Index CLI UI" width="320" />

### CLI Dashboard
<img src="https://raw.githubusercontent.com/gurraoptimus/Index-CLI/refs/heads/main/dashboard.png" alt="Screenshot of Index CLI UI Dashboard" width="320" />

---

## 🚀 Usage

1. Place `index.php` and `cli.php` in your project directory (e.g., `C:/xampp/htdocs/Index-CLI/`).
2. Start your local server (e.g., XAMPP/Apache).
3. Open [Index-CLI](http://localhost/Index-CLI/) in your browser.

---

## ⚙️ How it works

- Clicking the **Run CLI Script** button sends an HTTP request to `cli.php`.
- The output from `cli.php` is displayed dynamically in the UI.
- `dashboard.php` can be extended for a web terminal or detailed output view.

---

## 🗂 File Structure
```
/Index-CLI/
├── index.php # Main UI
├── cli.php # Executes CLI logic
├── dashboard.php # Optional dashboard/terminal output
└── README.md
```
---

## 🛠️ Getting Started

1. **Clone the repository:**
```
 gh repo clone gurraoptimus/Index-CLI cd Index-CLI
```
2. **Start your server (XAMPP, Apache, etc.)**

3. **Navigate to:**
   [http://localhost/Index-CLI/](http://localhost/Index-CLI/)

---

## 🎨 Customization

- Edit `index.php` to change layout, text, or styling.
- Modify `cli.php` to run your own CLI logic or scripts.
- Extend `dashboard.php` for live logs, command history, etc.

---

> 📍 **Default Path:** `C:/xampp/htdocs/Index-CLI/index.php`
