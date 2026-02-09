<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    :root {
        --hd-orange: #F57C00;
        --hd-orange-brown: #E67E22;
        --hd-dark-red: #B03A2E;
        --hd-black: #000000;
        --hd-grey: #333333;
        --hd-text-muted: #6b7280;
    }

    .top-bar {
        background: var(--hd-orange);
        padding: 12px 24px;
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .top-logo {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .top-logo img {
        width: 44px;
        height: 44px;
        border-radius: 8px;
        border: 2px solid #ffffff;
    }

    .top-logo-text {
        font-weight: 800;
        font-size: 20px;
        color: #ffffff;
    }

    .top-icons {
        margin-left: auto;
        display: flex;
        gap: 28px;
        align-items: center;
    }

    .icon-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #ffffff;
        text-decoration: none;
        font-size: 12px;
        font-weight: 500;
        position: relative;
    }

    .icon-item i {
        font-size: 20px;
        margin-bottom: 4px;
    }
</style>

<header class="top-bar">
    <div class="top-logo">
        <img src="{{ asset('images/homeDomeLogo.png') }}" alt="HomeDome logo">
        <span class="top-logo-text">HomeDome</span>
    </div>

    <div class="top-icons">
        <div class="icon-item">
            <i class="fa-solid fa-shield-halved"></i>
            <span>Admin Security</span>
        </div>
    </div>
</header>