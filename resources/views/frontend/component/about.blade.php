<style>
.about { background: #f8faff; padding: 4rem 2rem; }
.about-inner { max-width: 960px; margin: 0 auto; }
.about-badge { display: inline-block; background: #E6F1FB; color: #0C447C; font-size: 12px; font-weight: 500; padding: 4px 14px; border-radius: 20px; margin-bottom: 1rem; }
.about-title { font-size: 28px; font-weight: 700; color: #0C447C; margin: 0 0 1rem; }
.about-title span { color: #378ADD; }
.about-desc { font-size: 15px; color: #555; line-height: 1.8; margin: 0 0 2rem; max-width: 520px; }
.about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem; align-items: start; }
.about-features { display: flex; flex-direction: column; gap: 16px; margin-bottom: 2rem; }
.about-feature { display: flex; align-items: flex-start; gap: 12px; }
.feat-icon { width: 38px; height: 38px; min-width: 38px; background: #E6F1FB; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #185FA5; font-size: 20px; }
.feat-title { font-size: 14px; font-weight: 600; color: #1a1a2e; margin: 0 0 2px; }
.feat-desc { font-size: 13px; color: #666; margin: 0; line-height: 1.6; }
.about-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.stat-card { background: white; border-radius: 10px; padding: 1.25rem; border: 1px solid #e0eaf5; }
.stat-num { font-size: 26px; font-weight: 700; color: #185FA5; margin: 0 0 4px; }
.stat-label { font-size: 12px; color: #888; margin: 0; }
.about-img-box { background: #E6F1FB; border-radius: 14px; padding: 2.5rem; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 320px; gap: 1rem; border: 1px solid #c8dff5; }
.about-avatar { width: 80px; height: 80px; border-radius: 50%; background: #185FA5; display: flex; align-items: center; justify-content: center; font-size: 32px; color: white; font-weight: 700; }
.about-name { font-size: 16px; font-weight: 600; color: #0C447C; margin: 0; }
.about-role { font-size: 13px; color: #378ADD; margin: 0; }
.about-quote { font-size: 13px; color: #185FA5; line-height: 1.7; max-width: 240px; margin: 0; border-left: 3px solid #378ADD; padding-left: 12px; }
.about-cta { display: inline-flex; align-items: center; gap: 8px; background: #0C447C; color: white; border: none; padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; margin-top: 1.5rem; text-decoration: none; }
.about-cta:hover { background: #185FA5; }
@media (max-width: 700px) {
  .about-grid { grid-template-columns: 1fr; }
  .about-stats { grid-template-columns: 1fr 1fr; }
}
</style>

<section class="about">
    <div class="about-inner">
        <span class="about-badge">About us</span>
        <div class="about-grid">
            <div>
                <h2 class="about-title">We build things that <span>matter</span></h2>
                <p class="about-desc">We are a passionate team of developers and designers dedicated to crafting modern web experiences. Our mission is to help businesses grow through clean, fast, and beautiful digital products.</p>

                <div class="about-features">
                    <div class="about-feature">
                        <div class="feat-icon">&#128640;</div>
                        <div>
                            <p class="feat-title">Fast delivery</p>
                            <p class="feat-desc">We ship products quickly without compromising on quality or performance.</p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="feat-icon">&#128737;</div>
                        <div>
                            <p class="feat-title">Reliable & secure</p>
                            <p class="feat-desc">Security and stability are built into everything we create from day one.</p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="feat-icon">&#128101;</div>
                        <div>
                            <p class="feat-title">Client focused</p>
                            <p class="feat-desc">We listen, collaborate, and deliver exactly what our clients need.</p>
                        </div>
                    </div>
                </div>

                <div class="about-stats">
                    <div class="stat-card"><p class="stat-num">120+</p><p class="stat-label">Projects completed</p></div>
                    <div class="stat-card"><p class="stat-num">98%</p><p class="stat-label">Client satisfaction</p></div>
                    <div class="stat-card"><p class="stat-num">5+</p><p class="stat-label">Years experience</p></div>
                    <div class="stat-card"><p class="stat-num">24/7</p><p class="stat-label">Support available</p></div>
                </div>

                <a href="#" class="about-cta">&#8594; Learn more</a>
            </div>

            <div class="about-img-box">
                <div class="about-avatar">J</div>
                <p class="about-name">John Smith</p>
                <p class="about-role">Founder & CEO</p>
                <p class="about-quote">We started this company with a simple goal — to make great software accessible to everyone, regardless of size or budget.</p>
            </div>
        </div>
    </div>
</section>