
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KECHART - Two People. One Connection.</title>
<link rel="stylesheet" href="assets/css/style.css">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #f5f3ff;
    color: #201b35;
    min-height: 100vh;
}

button, input {
    font: inherit;
}

button {
    cursor: pointer;
    border: none;
}

.auth-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.auth-card {
    background: white;
    width: 100%;
    max-width: 420px;
    padding: 38px;
    border-radius: 20px;
    box-shadow: 0 12px 45px rgba(60, 35, 120, .10);
}

.logo {
    text-align: center;
    font-size: 30px;
    font-weight: 800;
    color: #7544db;
    letter-spacing: 2px;
}

.tagline {
    text-align: center;
    color: #9992aa;
    margin: 10px 0 30px;
    font-size: 14px;
}

.tabs {
    display: flex;
    background: #f3efff;
    padding: 5px;
    border-radius: 10px;
    margin-bottom: 25px;
}

.tabs button {
    flex: 1;
    padding: 12px;
    border-radius: 8px;
    background: transparent;
    color: #777;
    font-weight: bold;
}

.tabs button.active {
    background: #7544db;
    color: white;
}

.auth-card h2 {
    margin-bottom: 8px;
    font-size: 23px;
}

.description {
    color: #999;
    font-size: 14px;
    margin-bottom: 24px;
}

.field {
    margin-bottom: 17px;
}

.field label {
    display: block;
    font-size: 13px;
    font-weight: bold;
    margin-bottom: 8px;
}

.field input {
    width: 100%;
    padding: 14px;
    border: 1px solid #e5e0ee;
    border-radius: 9px;
    outline: none;
}

.field input:focus {
    border-color: #7544db;
}

.primary-btn {
    background: #7544db;
    color: white;
    width: 100%;
    padding: 15px;
    border-radius: 9px;
    font-weight: bold;
    margin-top: 5px;
}

.primary-btn:hover {
    background: #6032c1;
}

.auth-note {
    text-align: center;
    margin-top: 22px;
    color: #999;
    font-size: 12px;
}

/* CHAT DASHBOARD */

#dashboard {
    display: none;
    min-height: 100vh;
    padding: 25px;
}

.chat-app {
    max-width: 1100px;
    height: 85vh;
    min-height: 550px;
    margin: auto;
    background: white;
    border-radius: 18px;
    overflow: hidden;
    display: flex;
    box-shadow: 0 12px 45px rgba(60, 35, 120, .10);
}

.sidebar {
    width: 330px;
    border-right: 1px solid #eee;
    display: flex;
    flex-direction: column;
}

.sidebar-header {
    padding: 24px;
    border-bottom: 1px solid #eee;
}

.sidebar-header .logo {
    text-align: left;
    font-size: 25px;
}

.user-profile {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: 20px;
}

.avatar {
    width: 43px;
    height: 43px;
    background: #eee5ff;
    color: #7544db;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
}

.user-info strong {
    font-size: 14px;
}

.user-info small {
    display: block;
    color: #999;
    margin-top: 4px;
}

.search {
    margin: 18px;
}

.search input {
    width: 100%;
    border: none;
    background: #f7f5fb;
    padding: 13px;
    border-radius: 9px;
    outline: none;
}

.chat-person {
    display: flex;
    align-items: center;
    padding: 17px 20px;
    gap: 12px;
    background: #f7f3ff;
    cursor: pointer;
}

.chat-person:hover {
    background: #eee7ff;
}

.chat-details {
    flex: 1;
}

.chat-details strong {
    font-size: 14px;
}

.chat-details small {
    display: block;
    color: #999;
    margin-top: 5px;
}

.chat-window {
    flex: 1;
    display: flex;
    flex-direction: column;
    min-width: 0;
}

.chat-header {
    padding: 20px;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
    gap: 12px;
}

.chat-header small {
    display: block;
    color: #25ae77;
    margin-top: 5px;
}

.messages {
    flex: 1;
    padding: 25px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 15px;
    background: #fcfbff;
}

.message {
    max-width: 75%;
    padding: 13px 16px;
    border-radius: 13px;
    font-size: 14px;
    line-height: 1.5;
}

.received {
    align-self: flex-start;
    background: #eee9f8;
}

.sent {
    align-self: flex-end;
    background: #7544db;
    color: white;
}

.message-time {
    display: block;
    font-size: 10px;
    opacity: .65;
    margin-top: 5px;
}

.message-input {
    padding: 18px;
    display: flex;
    gap: 10px;
    border-top: 1px solid #eee;
}

.message-input input {
    flex: 1;
    min-width: 0;
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 13px;
    outline: none;
}

.send-btn {
    padding: 0 22px;
    background: #7544db;
    color: white;
    border-radius: 10px;
}

.logout {
    margin-top: auto;
    padding: 20px;
    color: #d44;
    background: white;
    text-align: left;
    border-top: 1px solid #eee;
}

@media(max-width:650px) {
    #dashboard {
        padding: 0;
    }

    .chat-app {
        height: 100vh;
        min-height: 100vh;
        border-radius: 0;
    }

    .sidebar {
        width: 90px;
    }

    .sidebar-header {
        padding: 15px 5px;
    }

    .sidebar-header .logo {
        font-size: 16px;
        text-align: center;
    }

    .user-profile {
        justify-content: center;
    }

    .user-info, .search, .chat-details,
    .logout span {
        display: none;
    }

    .chat-person {
        justify-content: center;
        padding: 15px 5px;
    }

    .messages {
        padding: 15px;
    }

    .auth-card {
        padding: 27px;
    }
}
</style>
</head>

<body>

<!-- LOGIN / REGISTER -->

<div class="auth-container" id="auth">
    <div class="auth-card">

        <div class="logo">KECHART</div>
        <div class="tagline">Two people. One connection.</div>

        <div class="tabs">
            <button class="active" id="loginTab" onclick="showForm('login')">Login</button>
            <button id="registerTab" onclick="showForm('register')">Register</button>
        </div>

        <div id="loginForm">
            <h2>Welcome back 👋</h2>
            <p class="description">Sign in to continue your conversations.</p>

            <form onsubmit="demoLogin(event)">
                <div class="field">
                    <label>Email address</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>

                <div class="field">
                    <label>Password</label>
                    <input type="password" placeholder="Enter your password" required>
                </div>

                <button class="primary-btn">Login to KECHART</button>
            </form>
        </div>

        <div id="registerForm" style="display:none">
            <h2>Create your account ❤️</h2>
            <p class="description">Join KECHART and connect with someone.</p>

            <form onsubmit="demoRegister(event)">
                <div class="field">
                    <label>Your name</label>
                    <input id="newName" type="text" placeholder="Enter your name" required>
                </div>

                <div class="field">
                    <label>Email address</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>

                <div class="field">
                    <label>Password</label>
                    <input type="password" placeholder="Create a password" required>
                </div>

                <button class="primary-btn">Create Account</button>
            </form>
        </div>

        <div class="auth-note">
            KECHART © 2026. Your space to connect.
        </div>
    </div>
</div>

<!-- CHAT DASHBOARD -->

<div id="dashboard">
    <div class="chat-app">

        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo">KECHART</div>

                <div class="user-profile">
                    <div class="avatar" id="myAvatar">K</div>
                    <div class="user-info">
                        <strong id="myName">Guest</strong>
                        <small>My account</small>
                    </div>
                </div>
            </div>

            <div class="search">
                <input type="text" placeholder="Search chats...">
            </div>

            <div class="chat-person">
                <div class="avatar">A</div>
                <div class="chat-details">
                    <strong>Alex</strong>
                    <small>Start a conversation</small>
                </div>
            </div>

            <button class="logout" onclick="logout()">↪ <span>Logout</span></button>
        </div>

        <div class="chat-window">

            <div class="chat-header">
                <div class="avatar">A</div>
                <div>
                    <strong>Alex</strong>
                    <small>Demo conversation</small>
                </div>
            </div>

            <div class="messages" id="messages">
                <div class="message received">
                    Hey! Welcome to KECHART 👋
                    <span class="message-time">Demo message</span>
                </div>

                <div class="message received">
                    This is where your conversations will appear.
                    <span class="message-time">Demo message</span>
                </div>
            </div>

            <form class="message-input" onsubmit="sendMessage(event)">
                <input id="messageText" type="text"
                       placeholder="Write a message..." required>
                <button class="send-btn">Send ➤</button>
            </form>

        </div>
    </div>
</div>

<script>
function showForm(type) {
    document.getElementById('loginForm').style.display =
        type === 'login' ? 'block' : 'none';

    document.getElementById('registerForm').style.display =
        type === 'register' ? 'block' : 'none';

    document.getElementById('loginTab').classList.toggle(
        'active', type === 'login'
    );

    document.getElementById('registerTab').classList.toggle(
        'active', type === 'register'
    );
}

function openDashboard(name) {
    document.getElementById('auth').style.display = 'none';
    document.getElementById('dashboard').style.display = 'block';

    document.getElementById('myName').textContent = name;
    document.getElementById('myAvatar').textContent =
        name.charAt(0).toUpperCase();
}

function demoLogin(event) {
    event.preventDefault();
    openDashboard('Guest');
}

function demoRegister(event) {
    event.preventDefault();

    const name = document.getElementById('newName').value.trim();

    openDashboard(name);
}

function logout() {
    document.getElementById('dashboard').style.display = 'none';
    document.getElementById('auth').style.display = 'flex';
}

function sendMessage(event) {
    event.preventDefault();

    const input = document.getElementById('messageText');
    const message = input.value.trim();

    if (!message) return;

    const messageBox = document.createElement('div');
    messageBox.className = 'message sent';
    messageBox.textContent = message;

    const time = document.createElement('span');
    time.className = 'message-time';
    time.textContent = new Date().toLocaleTimeString([], {
        hour: '2-digit',
        minute: '2-digit'
    });

    messageBox.appendChild(time);

    document.getElementById('messages').appendChild(messageBox);

    input.value = '';

    const messages = document.getElementById('messages');
    messages.scrollTop = messages.scrollHeight;
}
</script>

</body>
</html>
