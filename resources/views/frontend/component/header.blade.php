<style>
.hdr { background: #0C447C; padding: 0 2rem; border-bottom: 3px solid #378ADD; }
.hdr-inner { max-width: 960px; margin: 0 auto; height: 64px; display: flex; align-items: center; justify-content: space-between; }
.hdr-logo { display: flex; align-items: center; gap: 10px; text-decoration: none; }
.hdr-logo-box { width: 36px; height: 36px; background: #378ADD; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 18px; color: white; }
.hdr-logo-text { font-size: 18px; font-weight: 500; color: #E6F1FB; }
.hdr-logo-text span { color: #FAC775; }
.hdr-nav { display: flex; align-items: center; gap: 2px; }
.hdr-nav a { text-decoration: none; color: #B5D4F4; font-size: 14px; padding: 6px 14px; border-radius: 6px; transition: background 0.15s, color 0.15s; }
.hdr-nav a:hover, .hdr-nav a.active { background: #185FA5; color: #E6F1FB; }
.hdr-actions { display: flex; align-items: center; gap: 10px; }
.hdr-login { font-size: 14px; color: #B5D4F4; text-decoration: none; padding: 6px 12px; }
.hdr-cta { background: #FAC775; color: #412402; border: none; padding: 8px 20px; border-radius: 6px; font-size: 14px; font-weight: 500; cursor: pointer; }
.hdr-cta:hover { background: #EF9F27; }
</style>

<header class="hdr">
    <div class="hdr-inner">

        <a href="{{ url('/') }}" class="hdr-logo">
            <div class="hdr-logo-box">&#9889;</div>
            <span class="hdr-logo-text">My<span>App</span></span>
        </a>

        <nav class="hdr-nav">
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Portfolio</a>
            <a href="#">Contact</a>
        </nav>

        <div class="hdr-actions">
            <a href="#" class="hdr-login">Login</a>
            <button class="hdr-cta">Get Started</button>
        </div>

    </div>
</header>