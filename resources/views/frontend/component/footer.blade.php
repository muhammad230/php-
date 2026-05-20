<style>
.footer { background: #0C447C; padding: 60px 2rem 0; }
.footer-inner { max-width: 960px; margin: 0 auto; }
.footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 40px; padding-bottom: 40px; }
.footer-brand-logo { display: flex; align-items: center; gap: 10px; margin-bottom: 16px; text-decoration: none; }
.footer-brand-box { width: 36px; height: 36px; background: #378ADD; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 18px; color: white; }
.footer-brand-name { font-size: 18px; font-weight: 500; color: #E6F1FB; }
.footer-brand-name span { color: #FAC775; }
.footer-desc { font-size: 14px; color: #B5D4F4; line-height: 1.8; margin-bottom: 20px; }
.footer-socials { display: flex; gap: 10px; }
.footer-social { width: 36px; height: 36px; background: #185FA5; border-radius: 8px; display: flex; align-items: center; justify-content: center; text-decoration: none; color: #E6F1FB; font-size: 16px; transition: background 0.15s; }
.footer-social:hover { background: #378ADD; }
.footer-col-title { font-size: 14px; font-weight: 500; color: #E6F1FB; margin-bottom: 18px; letter-spacing: 0.5px; text-transform: uppercase; }
.footer-col ul { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px; }
.footer-col ul li a { text-decoration: none; font-size: 14px; color: #B5D4F4; transition: color 0.15s; }
.footer-col ul li a:hover { color: #FAC775; }
.footer-contact-item { display: flex; align-items: flex-start; gap: 10px; margin-bottom: 12px; }
.footer-contact-icon { width: 32px; height: 32px; background: #185FA5; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #E6F1FB; flex-shrink: 0; }
.footer-contact-text { font-size: 13px; color: #B5D4F4; line-height: 1.6; }
.footer-bottom { border-top: 1px solid #185FA5; padding: 20px 0; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px; }
.footer-copy { font-size: 13px; color: #B5D4F4; }
.footer-copy span { color: #FAC775; }
.footer-bottom-links { display: flex; gap: 20px; }
.footer-bottom-links a { font-size: 13px; color: #B5D4F4; text-decoration: none; transition: color 0.15s; }
.footer-bottom-links a:hover { color: #FAC775; }
@media (max-width: 768px) {
    .footer-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 480px) {
    .footer-grid { grid-template-columns: 1fr; }
    .footer-bottom { flex-direction: column; text-align: center; }
}
</style>

<footer class="footer">
    <div class="footer-inner">
        <div class="footer-grid">

            {{-- Brand Column --}}
            <div>
                <a href="{{ url('/') }}" class="footer-brand-logo">
                    <div class="footer-brand-box">&#9889;</div>
                    <span class="footer-brand-name">My<span>App</span></span>
                </a>
                <p class="footer-desc">
                    We build beautiful digital experiences that help businesses grow.
                    Quality code, modern design, fast delivery.
                </p>
                <div class="footer-socials">
                    <a href="#" class="footer-social" title="Facebook">&#102;</a>
                    <a href="#" class="footer-social" title="Twitter">&#116;</a>
                    <a href="#" class="footer-social" title="Instagram">&#105;</a>
                    <a href="#" class="footer-social" title="LinkedIn">&#105;n</a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div class="footer-col">
                <p class="footer-col-title">Quick Links</p>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div class="footer-col">
                <p class="footer-col-title">Services</p>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">SEO & Marketing</a></li>
                    <li><a href="#">Consulting</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div class="footer-col">
                <p class="footer-col-title">Contact</p>
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">&#128205;</div>
                    <div class="footer-contact-text">123 Main Street,<br>Karachi, Pakistan</div>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">&#128222;</div>
                    <div class="footer-contact-text">+92 300 1234567</div>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">&#9993;</div>
                    <div class="footer-contact-text">hello@myapp.com</div>
                </div>
            </div>

        </div>

        {{-- Bottom Bar --}}
        <div class="footer-bottom">
            <p class="footer-copy">
                &copy; {{ date('Y') }} <span>MyApp</span>. All rights reserved.
            </p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Sitemap</a>
            </div>
        </div>

    </div>
</footer>