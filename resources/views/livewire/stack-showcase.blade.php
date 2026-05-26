<div class="stack-showcase" id="stackShowcase">
<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Syne:wght@400;600;700;800&display=swap');

html { scroll-behavior: smooth; }

.stack-showcase {
  background: #080808;
  color: #F0EDE8;
  font-family: 'DM Sans', Arial, sans-serif;
  font-size: 16px;
  line-height: 1.65;
  overflow-x: hidden;
  width: 100%;
  min-height: 100vh;
  position: relative;
}

.stack-showcase *,
.stack-showcase *::before,
.stack-showcase *::after {
  box-sizing: border-box;
}

.stack-showcase a,
.stack-showcase button,
.stack-showcase input,
.stack-showcase select,
.stack-showcase textarea {
  font-family: inherit;
}

  .stack-showcase{
    --black: #080808;
    --off-black: #0e0e0e;
    --panel: #131313;
    --card: #181818;
    --border: rgba(255,255,255,0.07);
    --border-hover: rgba(255,255,255,0.14);
    --accent: #FF3D3D;
    --accent2: #FF6B1A;
    --gold: #E8C97A;
    --text: #F0EDE8;
    --muted: rgba(240,237,232,0.45);
    --dim: rgba(240,237,232,0.2);
  }

  .stack-showcase *, .stack-showcase *::before, .stack-showcase *::after{ box-sizing: border-box; margin: 0; padding: 0; }

  
  .stack-showcase .nav{
    position: fixed; top: 0; left: 0; right: 0; z-index: 100;
    display: flex; align-items: center; justify-content: space-between;
    padding: 20px 48px;
    background: rgba(8,8,8,0.85);
    backdrop-filter: blur(16px);
    border-bottom: 1px solid var(--border);
  }

  .stack-showcase .nav-brand{
    font-family: 'Syne', sans-serif;
    font-weight: 800;
    font-size: 18px;
    letter-spacing: -0.02em;
    color: var(--text);
    text-decoration: none;
  }
  .stack-showcase .nav-brand em{ color: var(--accent); font-style: normal; }

  .stack-showcase .nav-links{
    display: flex; gap: 36px; list-style: none;
  }
  .stack-showcase .nav-links a{
    color: var(--muted);
    text-decoration: none;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0.02em;
    transition: color 0.2s;
  }
  .stack-showcase .nav-links a:hover{ color: var(--text); }

  .stack-showcase .nav-cta{
    background: var(--accent);
    color: #fff;
    text-decoration: none;
    font-family: 'Syne', sans-serif;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 0.04em;
    padding: 10px 22px;
    border-radius: 100px;
    transition: opacity 0.2s, transform 0.2s;
  }
  .stack-showcase .nav-cta:hover{ opacity: 0.88; transform: translateY(-1px); }

  
  .stack-showcase .hero{
    min-height: 100vh;
    display: flex; align-items: center;
    padding: 120px 48px 80px;
    position: relative;
    overflow: hidden;
  }

  .stack-showcase .hero-bg{
    position: absolute; inset: 0; z-index: 0;
    background: radial-gradient(ellipse 60% 60% at 70% 50%, rgba(255,61,61,0.08) 0%, transparent 65%),
                radial-gradient(ellipse 40% 40% at 20% 30%, rgba(232,201,122,0.05) 0%, transparent 60%);
  }

  .stack-showcase .hero-grid-lines{
    position: absolute; inset: 0; z-index: 0;
    background-image:
      linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
    background-size: 80px 80px;
    mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 0%, transparent 80%);
  }

  .stack-showcase .hero-inner{
    position: relative; z-index: 1;
    display: grid; grid-template-columns: 1fr 1fr; gap: 80px;
    align-items: center; max-width: 1200px; margin: 0 auto; width: 100%;
  }

  .stack-showcase .hero-tag{
    display: inline-flex; align-items: center; gap: 8px;
    font-size: 12px; letter-spacing: 0.12em; text-transform: uppercase;
    color: var(--accent); font-weight: 500;
    margin-bottom: 28px;
  }
  .stack-showcase .hero-tag::before{
    content: '';
    display: block; width: 6px; height: 6px;
    background: var(--accent); border-radius: 50%;
    animation: pulse 2s ease-in-out infinite;
  }
  @keyframes pulse{
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(0.7); }
  }

  .stack-showcase .hero-title{
    font-family: 'Syne', sans-serif;
    font-size: clamp(42px, 5vw, 72px);
    font-weight: 800;
    line-height: 1.04;
    letter-spacing: -0.03em;
    margin-bottom: 28px;
  }
  .stack-showcase .hero-title .handle{
    display: block;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent2) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .stack-showcase .hero-title .sub{
    display: block;
    color: var(--text);
  }
  .stack-showcase .hero-title .thin{
    display: block;
    color: var(--muted);
    font-weight: 400;
    font-size: 0.55em;
    letter-spacing: -0.01em;
  }

  .stack-showcase .hero-bio{
    color: var(--muted);
    font-size: 17px;
    line-height: 1.7;
    max-width: 460px;
    margin-bottom: 40px;
  }

  .stack-showcase .hero-chips{
    display: flex; flex-wrap: wrap; gap: 8px;
    margin-bottom: 40px;
  }
  .stack-showcase .chip{
    font-size: 12px; font-weight: 500; letter-spacing: 0.04em;
    padding: 6px 14px;
    border: 1px solid var(--border);
    border-radius: 100px;
    color: var(--muted);
    background: rgba(255,255,255,0.03);
  }

  .stack-showcase .hero-btns{
    display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 52px;
  }
  .stack-showcase .btn-primary{
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--accent);
    color: #fff; text-decoration: none;
    font-family: 'Syne', sans-serif; font-weight: 700; font-size: 14px;
    padding: 14px 28px; border-radius: 100px;
    transition: transform 0.2s, box-shadow 0.2s;
  }
  .stack-showcase .btn-primary:hover{ transform: translateY(-2px); box-shadow: 0 12px 32px rgba(255,61,61,0.3); }

  .stack-showcase .btn-secondary{
    display: inline-flex; align-items: center; gap: 8px;
    background: transparent;
    color: var(--text); text-decoration: none;
    font-family: 'Syne', sans-serif; font-weight: 600; font-size: 14px;
    padding: 14px 28px; border-radius: 100px;
    border: 1px solid var(--border);
    transition: border-color 0.2s, background 0.2s;
  }
  .stack-showcase .btn-secondary:hover{ border-color: var(--border-hover); background: rgba(255,255,255,0.04); }

  .stack-showcase .btn-ghost{
    display: inline-flex; align-items: center; gap: 6px;
    color: var(--muted); text-decoration: none;
    font-size: 14px; padding: 14px 0;
    transition: color 0.2s;
  }
  .stack-showcase .btn-ghost:hover{ color: var(--text); }

  .stack-showcase .stats-row{
    display: flex; gap: 32px; flex-wrap: wrap;
    padding-top: 32px;
    border-top: 1px solid var(--border);
  }
  .stack-showcase .stat-item strong{
    display: block;
    font-family: 'Syne', sans-serif;
    font-size: 28px; font-weight: 800;
    background: linear-gradient(135deg, var(--text) 0%, var(--muted) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .stack-showcase .stat-item span{
    font-size: 12px; color: var(--muted); letter-spacing: 0.04em;
  }

  
  .stack-showcase .profile-stage{
    position: relative;
  }

  .stack-showcase .profile-card{
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 24px;
    overflow: hidden;
    position: relative;
  }
  .stack-showcase .profile-card-media{
    width: 100%; aspect-ratio: 4/3;
    background: linear-gradient(135deg, #1a1a1a 0%, #222 100%);
    display: flex; align-items: center; justify-content: center;
    position: relative;
    overflow: hidden;
  }
  .stack-showcase .profile-card-media::after{
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(to bottom, transparent 40%, var(--card) 100%);
  }
  .stack-showcase .profile-initials{
    font-family: 'Syne', sans-serif;
    font-size: 80px; font-weight: 800;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent2) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative; z-index: 1;
  }
  .stack-showcase .profile-card-body{
    padding: 20px 24px 24px;
  }
  .stack-showcase .profile-card-body small{
    font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent);
  }
  .stack-showcase .profile-card-body strong{
    display: block; font-family: 'Syne', sans-serif; font-size: 20px; font-weight: 700; margin: 4px 0 2px;
  }
  .stack-showcase .profile-card-body span{ font-size: 14px; color: var(--muted); }

  .stack-showcase .float-badge{
    position: absolute;
    background: var(--panel);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 12px 18px;
    display: flex; align-items: center; gap: 12px;
    backdrop-filter: blur(8px);
  }
  .stack-showcase .float-badge--tl{ top: -20px; left: -28px; }
  .stack-showcase .float-badge--br{ bottom: -20px; right: -28px; }
  .stack-showcase .float-badge-icon{
    width: 36px; height: 36px; border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 13px;
  }
  .stack-showcase .float-badge-icon.tiktok{ background: rgba(0,242,234,0.15); color: #00f2ea; }
  .stack-showcase .float-badge-icon.ig{ background: rgba(255,61,61,0.15); color: var(--accent); }
  .stack-showcase .float-badge strong{ display: block; font-size: 13px; font-weight: 600; }
  .stack-showcase .float-badge small{ font-size: 11px; color: var(--muted); }

  
  .stack-showcase section{ max-width: 1200px; margin: 0 auto; padding: 100px 48px; }

  .stack-showcase .section-kicker{
    font-size: 11px; letter-spacing: 0.14em; text-transform: uppercase;
    color: var(--accent); font-weight: 500;
    margin-bottom: 16px;
  }
  .stack-showcase .section-title{
    font-family: 'Syne', sans-serif;
    font-size: clamp(32px, 4vw, 52px);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.03em;
    margin-bottom: 20px;
  }
  .stack-showcase .section-lead{
    color: var(--muted);
    font-size: 17px;
    max-width: 580px;
    line-height: 1.7;
  }

  
  .stack-showcase .services-wrap{ max-width: 1200px; margin: 0 auto; padding: 0 48px 100px; }
  .stack-showcase .services-head{ margin-bottom: 56px; }

  .stack-showcase .services-grid{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 2px;
    background: var(--border);
    border-radius: 20px;
    overflow: hidden;
  }

  .stack-showcase .service-card{
    background: var(--card);
    padding: 36px 32px;
    transition: background 0.2s;
    position: relative;
  }
  .stack-showcase .service-card:hover{ background: #1e1e1e; }

  .stack-showcase .service-card-icon{
    width: 48px; height: 48px; border-radius: 14px;
    background: rgba(255,61,61,0.1);
    border: 1px solid rgba(255,61,61,0.2);
    display: flex; align-items: center; justify-content: center;
    font-family: 'Syne', sans-serif;
    font-weight: 800; font-size: 14px;
    color: var(--accent);
    margin-bottom: 20px;
  }

  .stack-showcase .service-card h3{
    font-family: 'Syne', sans-serif;
    font-size: 18px; font-weight: 700;
    margin-bottom: 10px;
  }
  .stack-showcase .service-card p{ font-size: 14px; color: var(--muted); line-height: 1.6; }

  .stack-showcase .service-card-price{
    display: inline-block;
    margin-top: 16px;
    font-family: 'Syne', sans-serif;
    font-size: 13px; font-weight: 700;
    color: var(--gold);
    background: rgba(232,201,122,0.08);
    padding: 4px 12px; border-radius: 100px;
    border: 1px solid rgba(232,201,122,0.15);
  }

  .stack-showcase .service-benefit{
    display: block;
    margin-top: 10px;
    font-size: 12px; color: rgba(255,61,61,0.8);
    letter-spacing: 0.03em;
  }

  
  .stack-showcase .cases-wrap{ max-width: 1200px; margin: 0 auto; padding: 0 48px 100px; }
  .stack-showcase .cases-head{ margin-bottom: 56px; }

  .stack-showcase .featured-case{
    display: grid; grid-template-columns: 1fr 1fr; gap: 60px;
    align-items: center;
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 24px;
    padding: 52px;
    margin-bottom: 32px;
    position: relative; overflow: hidden;
  }
  .stack-showcase .featured-case::before{
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 1px;
    background: linear-gradient(90deg, transparent 0%, var(--accent) 50%, transparent 100%);
    opacity: 0.4;
  }

  .stack-showcase .case-eyebrow{
    font-size: 11px; letter-spacing: 0.12em; text-transform: uppercase;
    color: var(--accent); font-weight: 500; margin-bottom: 12px;
  }
  .stack-showcase .case-title{
    font-family: 'Syne', sans-serif;
    font-size: 30px; font-weight: 800; line-height: 1.15;
    letter-spacing: -0.02em; margin-bottom: 16px;
  }
  .stack-showcase .case-desc{ font-size: 15px; color: var(--muted); margin-bottom: 24px; line-height: 1.7; }

  .stack-showcase .case-tags{
    display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 32px;
  }
  .stack-showcase .case-tag{
    font-size: 12px; padding: 5px 12px;
    border: 1px solid var(--border); border-radius: 100px; color: var(--muted);
  }

  .stack-showcase .case-steps{ display: flex; flex-direction: column; gap: 14px; }
  .stack-showcase .case-step{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 14px 18px;
  }
  .stack-showcase .case-step span{
    font-size: 11px; letter-spacing: 0.08em; text-transform: uppercase;
    color: var(--accent); font-weight: 500;
  }
  .stack-showcase .case-step p{ font-size: 14px; color: var(--muted); margin-top: 4px; }

  .stack-showcase .case-visual{
    background: var(--panel);
    border: 1px solid var(--border);
    border-radius: 16px;
    aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    position: relative; overflow: hidden;
  }
  .stack-showcase .case-visual-placeholder{
    font-family: 'Syne', sans-serif;
    font-size: 14px; font-weight: 700; letter-spacing: 0.06em; color: var(--dim);
    text-transform: uppercase;
  }
  .stack-showcase .case-result-badge{
    position: absolute; bottom: 16px; right: 16px;
    background: rgba(255,61,61,0.15);
    border: 1px solid rgba(255,61,61,0.25);
    border-radius: 100px;
    padding: 6px 14px;
    font-size: 13px; font-weight: 700; color: var(--accent);
  }

  
  .stack-showcase .mini-cases{
    display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;
  }
  .stack-showcase .mini-case{
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 18px;
    padding: 28px;
    transition: border-color 0.2s, transform 0.2s;
  }
  .stack-showcase .mini-case:hover{ border-color: var(--border-hover); transform: translateY(-3px); }

  .stack-showcase .mini-case-platform{
    font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase;
    color: var(--muted); margin-bottom: 10px;
  }
  .stack-showcase .mini-case h3{
    font-family: 'Syne', sans-serif;
    font-size: 17px; font-weight: 700; margin-bottom: 8px;
  }
  .stack-showcase .mini-case-meta{
    display: flex; gap: 10px; flex-wrap: wrap; margin-top: 16px;
  }
  .stack-showcase .mini-case-niche{
    font-size: 12px; color: var(--muted); padding: 4px 10px;
    border: 1px solid var(--border); border-radius: 100px;
  }
  .stack-showcase .mini-case-result{
    font-size: 12px; color: var(--accent); font-weight: 700;
    padding: 4px 10px;
    border: 1px solid rgba(255,61,61,0.2); border-radius: 100px;
    background: rgba(255,61,61,0.06);
  }

  
  .stack-showcase .contact-wrap{ max-width: 1200px; margin: 0 auto; padding: 0 48px 100px; }

  .stack-showcase .contact-grid{
    display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;
    margin-top: 48px;
  }
  .stack-showcase .contact-card{
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 18px;
    padding: 28px;
    text-decoration: none;
    display: block;
    transition: border-color 0.2s, transform 0.2s;
  }
  .stack-showcase .contact-card:hover{ border-color: var(--accent); transform: translateY(-3px); }

  .stack-showcase .contact-avatar{
    width: 48px; height: 48px; border-radius: 14px;
    background: rgba(255,61,61,0.1);
    border: 1px solid rgba(255,61,61,0.2);
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 14px; color: var(--accent);
    font-family: 'Syne', sans-serif;
    margin-bottom: 18px;
  }

  .stack-showcase .contact-role{
    font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase;
    color: var(--muted); margin-bottom: 6px;
  }
  .stack-showcase .contact-title{
    font-family: 'Syne', sans-serif;
    font-size: 16px; font-weight: 700; margin-bottom: 4px; color: var(--text);
  }
  .stack-showcase .contact-value{
    display: block; font-size: 14px; font-weight: 600; color: var(--accent); margin-bottom: 6px;
  }
  .stack-showcase .contact-meta{ font-size: 13px; color: var(--muted); }

  
  .stack-showcase .reviews-wrap{ max-width: 1200px; margin: 0 auto; padding: 0 48px 100px; }
  .stack-showcase .reviews-head{ display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 48px; }

  .stack-showcase .reviews-grid{
    display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 16px;
  }
  .stack-showcase .review-card{
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 18px;
    padding: 32px;
    position: relative;
  }
  .stack-showcase .review-stars{
    display: flex; gap: 3px; margin-bottom: 18px;
  }
  .stack-showcase .review-stars span{ color: var(--gold); font-size: 16px; }
  .stack-showcase .review-quote{
    font-size: 15px; color: var(--text); line-height: 1.7;
    margin-bottom: 24px;
    font-style: italic;
  }
  .stack-showcase .review-author strong{ display: block; font-size: 14px; font-weight: 600; }
  .stack-showcase .review-author span{ font-size: 13px; color: var(--muted); }

  
  .stack-showcase .form-wrap{ max-width: 1200px; margin: 0 auto; padding: 0 48px 100px; }
  .stack-showcase .form-inner{
    display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start;
  }

  .stack-showcase .form-copy .section-title{ font-size: clamp(28px, 3vw, 44px); }
  .stack-showcase .form-points{ margin-top: 40px; display: flex; flex-direction: column; gap: 16px; }
  .stack-showcase .form-point strong{ display: block; font-size: 15px; font-weight: 600; margin-bottom: 3px; }
  .stack-showcase .form-point span{ font-size: 14px; color: var(--muted); }

  .stack-showcase .form-card{
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 24px;
    padding: 40px;
  }
  .stack-showcase .form-card h3{
    font-family: 'Syne', sans-serif;
    font-size: 22px; font-weight: 800; margin-bottom: 8px;
  }
  .stack-showcase .form-card > p{ font-size: 14px; color: var(--muted); margin-bottom: 32px; }

  .stack-showcase .field-grid{ display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 14px; }

  .stack-showcase .field{
    display: flex; flex-direction: column; gap: 6px;
  }
  .stack-showcase .field label{
    font-size: 12px; letter-spacing: 0.04em; color: var(--muted); font-weight: 500;
  }
  .stack-showcase .field input, .stack-showcase .field select, .stack-showcase .field textarea{
    background: rgba(255,255,255,0.04);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 12px 14px;
    color: var(--text);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    outline: none;
    transition: border-color 0.2s;
    width: 100%;
  }
  .stack-showcase .field input:focus, .stack-showcase .field select:focus, .stack-showcase .field textarea:focus{
    border-color: var(--accent);
  }
  .stack-showcase .field input::placeholder, .stack-showcase .field textarea::placeholder{ color: var(--dim); }
  .stack-showcase .field select option{ background: #1a1a1a; color: var(--text); }

  .stack-showcase .submit-btn{
    display: flex; align-items: center; justify-content: center; gap: 8px;
    width: 100%;
    background: var(--accent);
    color: #fff; border: none; cursor: pointer;
    font-family: 'Syne', sans-serif; font-weight: 700; font-size: 15px;
    padding: 16px 28px; border-radius: 12px;
    margin-top: 20px;
    transition: opacity 0.2s, transform 0.2s;
  }
  .stack-showcase .submit-btn:hover{ opacity: 0.9; transform: translateY(-1px); }

  
  .stack-showcase footer{
    border-top: 1px solid var(--border);
    padding: 60px 48px 40px;
    max-width: 1200px; margin: 0 auto;
  }
  .stack-showcase .footer-grid{
    display: grid; grid-template-columns: 1.5fr 1fr 1fr; gap: 60px; margin-bottom: 48px;
  }
  .stack-showcase .footer-brand-name{
    font-family: 'Syne', sans-serif; font-size: 20px; font-weight: 800;
    margin-bottom: 12px;
  }
  .stack-showcase .footer-brand-name em{ color: var(--accent); font-style: normal; }
  .stack-showcase .footer-lead{ font-size: 14px; color: var(--muted); line-height: 1.7; margin-bottom: 20px; max-width: 280px; }
  .stack-showcase .footer-email{ font-size: 14px; color: var(--accent); text-decoration: none; font-weight: 500; }

  .stack-showcase .footer-col h4{
    font-family: 'Syne', sans-serif; font-size: 13px; font-weight: 700;
    letter-spacing: 0.08em; text-transform: uppercase; color: var(--muted);
    margin-bottom: 18px;
  }
  .stack-showcase .footer-links{ display: flex; flex-direction: column; gap: 10px; }
  .stack-showcase .footer-links a{ color: var(--muted); text-decoration: none; font-size: 14px; transition: color 0.2s; }
  .stack-showcase .footer-links a:hover{ color: var(--text); }

  .stack-showcase .footer-bottom{
    border-top: 1px solid var(--border);
    padding-top: 24px;
    display: flex; justify-content: space-between; align-items: center;
  }
  .stack-showcase .footer-bottom p{ font-size: 13px; color: var(--dim); }
  .stack-showcase .footer-pill{
    font-size: 12px; color: var(--muted);
    padding: 6px 14px; border: 1px solid var(--border); border-radius: 100px;
  }

  
  .stack-showcase .about-strip{
    background: var(--card);
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
    padding: 80px 48px;
    margin: 0;
  }
  .stack-showcase .about-strip-inner{
    max-width: 1200px; margin: 0 auto;
    display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;
  }
  .stack-showcase .about-quote{
    font-family: 'Syne', sans-serif;
    font-size: clamp(22px, 3vw, 38px);
    font-weight: 700; line-height: 1.2; letter-spacing: -0.02em;
    color: var(--text);
  }
  .stack-showcase .about-quote em{ color: var(--accent); font-style: normal; }

  .stack-showcase .about-list{ display: flex; flex-direction: column; gap: 20px; }
  .stack-showcase .about-item{ display: flex; align-items: flex-start; gap: 14px; }
  .stack-showcase .about-dot{
    width: 8px; height: 8px; border-radius: 50%; background: var(--accent);
    margin-top: 7px; flex-shrink: 0;
  }
  .stack-showcase .about-item strong{ display: block; font-size: 15px; font-weight: 600; margin-bottom: 3px; }
  .stack-showcase .about-item span{ font-size: 14px; color: var(--muted); }

  
  @media (max-width: 900px){
    .stack-showcase .nav{ padding: 16px 24px; }
    .stack-showcase .nav-links{ display: none; }
    .stack-showcase .hero{ padding: 100px 24px 60px; }
    .stack-showcase .hero-inner{ grid-template-columns: 1fr; gap: 48px; }
    .stack-showcase .profile-stage{ display: none; }
    .stack-showcase section, .stack-showcase .services-wrap, .stack-showcase .cases-wrap, .stack-showcase .contact-wrap, .stack-showcase .reviews-wrap, .stack-showcase .form-wrap{ padding-left: 24px; padding-right: 24px; }
    .stack-showcase .form-inner{ grid-template-columns: 1fr; gap: 48px; }
    .stack-showcase .footer-grid{ grid-template-columns: 1fr; gap: 36px; }
    .stack-showcase .featured-case{ grid-template-columns: 1fr; padding: 32px; }
    .stack-showcase .about-strip-inner{ grid-template-columns: 1fr; gap: 40px; }
    .stack-showcase .about-strip{ padding: 60px 24px; }
    .stack-showcase footer{ padding: 48px 24px 32px; }
    .stack-showcase .field-grid{ grid-template-columns: 1fr; }
    .stack-showcase .reviews-head{ flex-direction: column; align-items: flex-start; gap: 20px; }
  }



/* ===== FULL MOBILE FIXES FOR LIVEWIRE ===== */
.stack-showcase {
  isolation: isolate;
  max-width: 100%;
}

.stack-showcase img,
.stack-showcase video,
.stack-showcase iframe {
  max-width: 100%;
  height: auto;
}

.stack-showcase a,
.stack-showcase p,
.stack-showcase h1,
.stack-showcase h2,
.stack-showcase h3,
.stack-showcase strong,
.stack-showcase span {
  overflow-wrap: anywhere;
}

.stack-showcase .nav {
  width: 100%;
}

.stack-showcase .hero,
.stack-showcase .services-wrap,
.stack-showcase .cases-wrap,
.stack-showcase .contact-wrap,
.stack-showcase .reviews-wrap,
.stack-showcase .form-wrap,
.stack-showcase .about-strip,
.stack-showcase footer {
  max-width: 100%;
}

.stack-showcase .btn-primary,
.stack-showcase .btn-secondary,
.stack-showcase .btn-ghost,
.stack-showcase .nav-cta,
.stack-showcase .submit-btn {
  -webkit-tap-highlight-color: transparent;
}

@media (max-width: 1024px) {
  .stack-showcase .hero-inner,
  .stack-showcase .featured-case,
  .stack-showcase .form-inner,
  .stack-showcase .about-strip-inner {
    gap: 42px;
  }

  .stack-showcase .services-grid,
  .stack-showcase .reviews-grid,
  .stack-showcase .contact-grid,
  .stack-showcase .mini-cases {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 900px) {
  .stack-showcase .nav {
    padding: 14px 20px;
    gap: 12px;
  }

  .stack-showcase .nav-brand {
    font-size: 16px;
    white-space: nowrap;
  }

  .stack-showcase .nav-cta {
    padding: 9px 14px;
    font-size: 12px;
    white-space: nowrap;
  }

  .stack-showcase .hero {
    min-height: auto;
    padding: 104px 20px 56px;
  }

  .stack-showcase .hero-inner {
    display: grid;
    grid-template-columns: 1fr;
    gap: 34px;
    padding: 0;
  }

  .stack-showcase .hero-title {
    font-size: clamp(34px, 9vw, 52px);
    line-height: 1.08;
    margin-bottom: 20px;
  }

  .stack-showcase .hero-title .thin {
    font-size: 0.58em;
  }

  .stack-showcase .hero-bio {
    font-size: 15.5px;
    max-width: 100%;
    margin-bottom: 28px;
  }

  .stack-showcase .hero-chips {
    margin-bottom: 28px;
  }

  .stack-showcase .hero-btns {
    margin-bottom: 34px;
  }

  .stack-showcase .btn-primary,
  .stack-showcase .btn-secondary {
    padding: 13px 20px;
  }

  .stack-showcase .stats-row {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
    padding-top: 24px;
  }

  .stack-showcase .stat-item strong {
    font-size: 24px;
  }

  .stack-showcase .profile-stage {
    display: block;
    max-width: 420px;
    margin: 0 auto;
  }

  .stack-showcase .float-badge {
    display: none;
  }

  .stack-showcase .services-wrap,
  .stack-showcase .cases-wrap,
  .stack-showcase .contact-wrap,
  .stack-showcase .reviews-wrap,
  .stack-showcase .form-wrap {
    padding: 0 20px 72px;
  }

  .stack-showcase .about-strip {
    padding: 64px 20px;
  }

  .stack-showcase .section-title {
    font-size: clamp(30px, 8vw, 44px);
  }

  .stack-showcase .section-lead {
    font-size: 15.5px;
  }

  .stack-showcase .services-head,
  .stack-showcase .cases-head,
  .stack-showcase .reviews-head {
    margin-bottom: 34px;
  }

  .stack-showcase .featured-case {
    grid-template-columns: 1fr;
    padding: 28px;
  }

  .stack-showcase .case-title {
    font-size: 25px;
  }

  .stack-showcase .case-visual {
    min-height: 220px;
  }

  .stack-showcase .form-inner,
  .stack-showcase .about-strip-inner {
    grid-template-columns: 1fr;
  }

  .stack-showcase .form-card {
    padding: 28px;
  }

  .stack-showcase footer {
    padding: 44px 20px 30px;
  }

  .stack-showcase .footer-bottom {
    align-items: flex-start;
    flex-direction: column;
    gap: 14px;
  }
}

@media (max-width: 640px) {
  .stack-showcase {
    font-size: 15px;
    line-height: 1.6;
  }

  .stack-showcase .nav {
    padding: 12px 14px;
  }

  .stack-showcase .nav-brand {
    font-size: 14px;
    max-width: 52%;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .stack-showcase .nav-cta {
    font-size: 11px;
    padding: 8px 11px;
  }

  .stack-showcase .hero {
    padding: 88px 14px 46px;
  }

  .stack-showcase .hero-tag {
    font-size: 10.5px;
    margin-bottom: 18px;
  }

  .stack-showcase .hero-title {
    font-size: clamp(31px, 11vw, 42px);
    letter-spacing: -0.035em;
  }

  .stack-showcase .hero-title .thin {
    font-size: 0.6em;
  }

  .stack-showcase .hero-bio {
    font-size: 14.5px;
  }

  .stack-showcase .chip {
    font-size: 11px;
    padding: 5px 10px;
  }

  .stack-showcase .hero-btns {
    display: grid;
    grid-template-columns: 1fr;
    gap: 10px;
  }

  .stack-showcase .btn-primary,
  .stack-showcase .btn-secondary,
  .stack-showcase .btn-ghost {
    width: 100%;
    justify-content: center;
    text-align: center;
  }

  .stack-showcase .stats-row {
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }

  .stack-showcase .stat-item {
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 14px;
    background: rgba(255,255,255,0.025);
  }

  .stack-showcase .stat-item strong {
    font-size: 22px;
  }

  .stack-showcase .profile-card {
    border-radius: 18px;
  }

  .stack-showcase .profile-initials {
    font-size: 58px;
  }

  .stack-showcase .services-wrap,
  .stack-showcase .cases-wrap,
  .stack-showcase .contact-wrap,
  .stack-showcase .reviews-wrap,
  .stack-showcase .form-wrap {
    padding: 0 14px 58px;
  }

  .stack-showcase .about-strip {
    padding: 52px 14px;
  }

  .stack-showcase .services-grid,
  .stack-showcase .reviews-grid,
  .stack-showcase .contact-grid,
  .stack-showcase .mini-cases {
    grid-template-columns: 1fr;
  }

  .stack-showcase .service-card,
  .stack-showcase .mini-case,
  .stack-showcase .contact-card,
  .stack-showcase .review-card {
    padding: 24px;
  }

  .stack-showcase .featured-case {
    padding: 22px;
    border-radius: 18px;
  }

  .stack-showcase .case-title {
    font-size: 22px;
  }

  .stack-showcase .case-desc,
  .stack-showcase .case-step p {
    font-size: 14px;
  }

  .stack-showcase .case-visual {
    min-height: 190px;
    aspect-ratio: auto;
  }

  .stack-showcase .case-result-badge {
    right: 12px;
    bottom: 12px;
    font-size: 12px;
  }

  .stack-showcase .field-grid {
    grid-template-columns: 1fr;
    gap: 12px;
  }

  .stack-showcase .form-card {
    padding: 22px;
    border-radius: 18px;
  }

  .stack-showcase .field input,
  .stack-showcase .field select,
  .stack-showcase .field textarea {
    font-size: 16px;
    min-height: 46px;
  }

  .stack-showcase .submit-btn {
    min-height: 50px;
  }

  .stack-showcase footer {
    padding: 38px 14px 26px;
  }

  .stack-showcase .footer-grid {
    grid-template-columns: 1fr;
    gap: 28px;
  }

  .stack-showcase .footer-pill {
    width: 100%;
    text-align: center;
  }
}

@media (max-width: 380px) {
  .stack-showcase .nav-brand {
    max-width: 48%;
    font-size: 13px;
  }

  .stack-showcase .nav-cta {
    font-size: 10.5px;
    padding: 8px 9px;
  }

  .stack-showcase .hero-title {
    font-size: 29px;
  }

  .stack-showcase .stats-row {
    grid-template-columns: 1fr;
  }
}

</style>

<!-- NAV -->
<nav class="nav">
  <a href="#hero" class="nav-brand">@therealshadman<em>off</em></a>
  <ul class="nav-links">
    <li><a href="#services">Xizmatlar</a></li>
    <li><a href="#cases">Keyslar</a></li>
    <li><a href="#reviews">Sharhlar</a></li>
    <li><a href="#contact-form">Kontakt</a></li>
  </ul>
  <a href="#contact-form" class="nav-cta">Brief yuborish →</a>
</nav>

<!-- HERO -->
<div class="hero" id="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid-lines"></div>
  <div class="hero-inner">

    <div>
      <p class="hero-tag">SMM Targetolog · Content Maker</p>

      <h1 class="hero-title">
        <span class="handle">@therealshadmanoff</span>
        <span class="sub">SMM, Reels &amp;</span>
        <span class="thin">Target reklama mutaxassisi</span>
      </h1>

      <p class="hero-bio">
        TikTok, Instagram va Telegram uchun kontent strategiya, Reels production, targetli reklama va analitika — hammasi bitta aniq tizimda. Har bir post va kampaniya biznes natijaga ulanadi.
      </p>

      <div class="hero-chips">
        <span class="chip">Instagram Reels</span>
        <span class="chip">TikTok Content</span>
        <span class="chip">Target Reklama</span>
        <span class="chip">Kontent Strategiya</span>
        <span class="chip">Analitika</span>
        <span class="chip">Personal Brand</span>
      </div>

      <div class="hero-btns">
        <a href="#contact-form" class="btn-primary">Brief yuborish →</a>
        <a href="#cases" class="btn-secondary">Keyslarni ko'rish</a>
        <a href="#services" class="btn-ghost">Xizmatlar ↓</a>
      </div>

      <div class="stats-row">
        <div class="stat-item">
          <strong>120+</strong>
          <span>Loyiha</span>
        </div>
        <div class="stat-item">
          <strong>4.8×</strong>
          <span>O'rtacha ROI</span>
        </div>
        <div class="stat-item">
          <strong>3 yil</strong>
          <span>Tajriba</span>
        </div>
        <div class="stat-item">
          <strong>98%</strong>
          <span>Qaytuvchi mijozlar</span>
        </div>
      </div>
    </div>

    <!-- PROFILE CARD -->
    <div class="profile-stage">
      <div class="profile-card">
        <div class="profile-card-media">
          <span class="profile-initials">SH</span>
        </div>
        <div class="profile-card-body">
          <small>SMM Growth System</small>
          <strong>@therealshadmanoff</strong>
          <span>TikTok · Instagram · Telegram</span>
        </div>
      </div>

      <div class="float-badge float-badge--tl">
        <div class="float-badge-icon tiktok">TT</div>
        <div>
          <strong>TikTok Reels</strong>
          <small>Viral kontent strategiya</small>
        </div>
      </div>

      <div class="float-badge float-badge--br">
        <div class="float-badge-icon ig">IG</div>
        <div>
          <strong>Instagram Growth</strong>
          <small>Lead va reach o'sishi</small>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- ABOUT STRIP -->
<div class="about-strip">
  <div class="about-strip-inner">
    <div class="about-quote">
      Kontent faqat chiroyli ko'rinish emas — u <em>sotuv qilishi</em>, lead olishi va <em>brendni o'stirishi</em> kerak.
    </div>
    <div class="about-list">
      <div class="about-item">
        <div class="about-dot"></div>
        <div>
          <strong>Data-driven kontent</strong>
          <span>Har bir post analitika asosida rejalashtiriladi — taxmin emas, raqamlar gapiradi.</span>
        </div>
      </div>
      <div class="about-item">
        <div class="about-dot"></div>
        <div>
          <strong>Tizimli yondashuv</strong>
          <span>Strategiya → kontent plan → prodakshn → nashr → tahlil — hammasi ketma-ket ishlaydi.</span>
        </div>
      </div>
      <div class="about-item">
        <div class="about-dot"></div>
        <div>
          <strong>Natija kafolati</strong>
          <span>Reach, lead yoki sotuv — maqsad oldindan belgilanadi va hisobot bilan taqdim etiladi.</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SERVICES -->
<div class="services-wrap" id="services">
  <div class="services-head">
    <p class="section-kicker">xizmatlar</p>
    <h2 class="section-title">SMM paket xizmatlar</h2>
    <p class="section-lead">
      Strategiyadan tahlilgacha — har bir bosqich aniq maqsadga ulangan. Xizmatlar niche va byudjetga qarab moslashtiriladi.
    </p>
  </div>

  <div class="services-grid">
    <div class="service-card">
      <div class="service-card-icon">KS</div>
      <h3>Kontent Strategiya</h3>
      <p>30 kunlik kontent plan, rubrikalar, posting ritmi, hashtag tadqiqoti va raqobatchilar tahlili bilan.</p>
      <span class="service-card-price">dan $200</span>
      <span class="service-benefit">↑ Organik reach +40%</span>
    </div>
    <div class="service-card">
      <div class="service-card-icon">RL</div>
      <h3>Reels Prodakshn</h3>
      <p>TikTok va Instagram Reels uchun skript, shooting, montaj va capshon — tayyor post shaklida.</p>
      <span class="service-card-price">dan $150/video</span>
      <span class="service-benefit">↑ Video ko'rishlar ×3</span>
    </div>
    <div class="service-card">
      <div class="service-card-icon">TR</div>
      <h3>Target Reklama</h3>
      <p>Instagram va TikTok uchun reklama kabineti sozlash, auditoriya segmentatsiyasi, A/B test va optimizatsiya.</p>
      <span class="service-card-price">dan $300/oy</span>
      <span class="service-benefit">↓ CPL 2× arzonroq</span>
    </div>
    <div class="service-card">
      <div class="service-card-icon">PB</div>
      <h3>Personal Brand</h3>
      <p>Ekspert imidj qurish: bio dizayn, highlights, Linktree, tone of voice va uzoq muddatli kontent yo'nalishi.</p>
      <span class="service-card-price">dan $250</span>
      <span class="service-benefit">↑ Ishonch va obro'</span>
    </div>
    <div class="service-card">
      <div class="service-card-icon">AN</div>
      <h3>Analitika va Hisobot</h3>
      <p>Oylik reach, engagement, ER, lead va sotuv tahlili — vizual hisobot va keyingi oy rejasi bilan.</p>
      <span class="service-card-price">dan $100/oy</span>
      <span class="service-benefit">↑ Qarorlar aniqroq</span>
    </div>
    <div class="service-card">
      <div class="service-card-icon">TG</div>
      <h3>Telegram Kanal</h3>
      <p>Telegram kanali uchun kontent plan, postlar, dizayn va a'zolar jalb qilish kampaniyasi.</p>
      <span class="service-card-price">dan $180/oy</span>
      <span class="service-benefit">↑ A'zolar organik o'sishi</span>
    </div>
  </div>
</div>

<!-- CASES -->
<div class="cases-wrap" id="cases">
  <div class="cases-head">
    <p class="section-kicker">keyslar / portfolio</p>
    <h2 class="section-title">SMM Case Studies</h2>
    <p class="section-lead">
      Haqiqiy natijalar — oldingi holat, qilingan ish va o'sish ko'rsatkichlari bilan.
    </p>
  </div>

  <div class="featured-case">
    <div>
      <p class="case-eyebrow">Instagram · Beauty Salon</p>
      <h3 class="case-title">Beauty studiya uchun Instagram dan oyiga 80+ lead</h3>
      <p class="case-desc">Toshkentdagi beauty studiya hech qanday tizimli SMM yo'qligidan 3 oy ichida oyiga 80+ lead oladigan kanalga aylandi.</p>

      <div class="case-tags">
        <span class="case-tag">Beauty & Wellness</span>
        <span class="case-tag">Instagram</span>
        <span class="case-tag">Reels + Target</span>
      </div>

      <div class="case-steps">
        <div class="case-step">
          <span>Oldingi holat</span>
          <p>Profilda tartibsiz postlar, 0 ta Reels, target reklama yo'q, oyiga 2–3 ta so'rovnoma.</p>
        </div>
        <div class="case-step">
          <span>Qilingan ish</span>
          <p>Kontent strategiya, haftalik 3 ta Reels, target reklama segmentatsiyasi va bio optimallashtirish.</p>
        </div>
      </div>
    </div>

    <div class="case-visual">
      <span class="case-visual-placeholder">Case Preview</span>
      <div class="case-result-badge">80+ lead/oy</div>
    </div>
  </div>

  <div class="mini-cases">
    <div class="mini-case">
      <p class="mini-case-platform">TikTok</p>
      <h3>Fitnes kouch viral Reels kampaniyasi</h3>
      <div class="mini-case-meta">
        <span class="mini-case-niche">Health & Fitness</span>
        <span class="mini-case-result">1.2M ko'rishlar</span>
      </div>
    </div>
    <div class="mini-case">
      <p class="mini-case-platform">Instagram</p>
      <h3>Online kurs sotuvini 3× oshirish</h3>
      <div class="mini-case-meta">
        <span class="mini-case-niche">Edtech</span>
        <span class="mini-case-result">Sotuv ×3.1</span>
      </div>
    </div>
    <div class="mini-case">
      <p class="mini-case-platform">Telegram</p>
      <h3>Restoran uchun 5000 a'zolik kanal</h3>
      <div class="mini-case-meta">
        <span class="mini-case-niche">Food & Café</span>
        <span class="mini-case-result">5K a'zo / 2 oy</span>
      </div>
    </div>
    <div class="mini-case">
      <p class="mini-case-platform">Instagram · TikTok</p>
      <h3>Kiyim brendi uchun personal brand qurilishi</h3>
      <div class="mini-case-meta">
        <span class="mini-case-niche">Fashion</span>
        <span class="mini-case-result">ER 8.4%</span>
      </div>
    </div>
  </div>
</div>

<!-- CONTACT CHANNELS -->
<div class="contact-wrap" id="contact">
  <p class="section-kicker">kontaktlar</p>
  <h2 class="section-title">Qaysi kanal qulay — shu yerdan yozing.</h2>
  <p class="section-lead">Telegram, Instagram, WhatsApp yoki email orqali tezkor javob olasiz. Brief uchun qulay kanaldan murojaat qiling.</p>

  <div class="contact-grid">
    <a href="https://t.me/therealshadmanoff" class="contact-card">
      <div class="contact-avatar">TG</div>
      <p class="contact-role">Asosiy kanal</p>
      <h3 class="contact-title">Telegram</h3>
      <strong class="contact-value">@therealshadmanoff</strong>
      <p class="contact-meta">Odatda 1 soat ichida javob</p>
    </a>
    <a href="https://instagram.com/therealshadmanoff" class="contact-card">
      <div class="contact-avatar">IG</div>
      <p class="contact-role">Instagram DM</p>
      <h3 class="contact-title">Instagram</h3>
      <strong class="contact-value">@therealshadmanoff</strong>
      <p class="contact-meta">DM orqali yozing</p>
    </a>
    <a href="https://tiktok.com/@therealshadmanoff" class="contact-card">
      <div class="contact-avatar">TT</div>
      <p class="contact-role">TikTok</p>
      <h3 class="contact-title">TikTok</h3>
      <strong class="contact-value">@therealshadmanoff</strong>
      <p class="contact-meta">Keyslar va kontentni kuzating</p>
    </a>
    <a href="mailto:hello@shadmanoff.uz" class="contact-card">
      <div class="contact-avatar">@</div>
      <p class="contact-role">Email</p>
      <h3 class="contact-title">Elektron pochta</h3>
      <strong class="contact-value">hello@shadmanoff.uz</strong>
      <p class="contact-meta">Brief va taklif uchun</p>
    </a>
  </div>
</div>

<!-- REVIEWS -->
<div class="reviews-wrap" id="reviews">
  <div class="reviews-head">
    <div>
      <p class="section-kicker">mijozlar sharhlari</p>
      <h2 class="section-title">Natijalar haqida</h2>
    </div>
  </div>

  <div class="reviews-grid">
    <div class="review-card">
      <div class="review-stars">
        <span>★★★★★</span>
      </div>
      <p class="review-quote">"Beauty studiyamiz uchun 3 oyda Instagram dan 80+ lead oldik. Kontent strategiyasi va target reklama chindan ishlaydi."</p>
      <div class="review-author">
        <strong>Malika N.</strong>
        <span>Beauty Studio, Toshkent</span>
      </div>
    </div>
    <div class="review-card">
      <div class="review-stars">
        <span>★★★★★</span>
      </div>
      <p class="review-quote">"TikTok da viral Reels chiqqanidan keyin kurs sotuvim 3 baravarga oshdi. Shadmanoff tizimli ishlaydi — taxmin yo'q, raqamlar bor."</p>
      <div class="review-author">
        <strong>Jasur T.</strong>
        <span>Online Kurs, Edtech</span>
      </div>
    </div>
    <div class="review-card">
      <div class="review-stars">
        <span>★★★★★</span>
      </div>
      <p class="review-quote">"Telegram kanalimizni 0 dan 5000 a'zogacha olib chiqdi. Har oylik hisobot va keyingi oy rejasi bilan — professional yondashuv."</p>
      <div class="review-author">
        <strong>Dilnoza A.</strong>
        <span>Restoran zanjiri</span>
      </div>
    </div>
  </div>
</div>

<!-- CONTACT FORM -->
<div class="form-wrap" id="contact-form">
  <div class="form-inner">
    <div class="form-copy">
      <p class="section-kicker">murojaat formasi</p>
      <h2 class="section-title">SMM brief to'ldiring — boshlaylik.</h2>
      <p class="section-lead">Biznesingiz, platforma va maqsadni yozing. 1 ish kuni ichida aloqaga chiqamiz.</p>

      <div class="form-points">
        <div class="form-point">
          <strong>Platforma aniq</strong>
          <span>Instagram, TikTok yoki Telegram bo'yicha ehtiyoj alohida ko'rib chiqiladi.</span>
        </div>
        <div class="form-point">
          <strong>Maqsad aniq</strong>
          <span>Followers, sales, leads yoki brand awareness — maqsad oldindan belgilanadi.</span>
        </div>
        <div class="form-point">
          <strong>Brief tayyor</strong>
          <span>Byudjet va izoh bilan kelgan mijoz tezroq natija oladi.</span>
        </div>
      </div>
    </div>

    <div class="form-card">
      <h3>Murojaat qoldiring</h3>
      <p>Xizmat, kontakt va loyiha haqida yozing.</p>

      <div class="field-grid">
        <div class="field">
          <label>Xizmat turi</label>
          <select>
            <option value="">Tanlang</option>
            <option>Kontent Strategiya</option>
            <option>Reels Prodakshn</option>
            <option>Target Reklama</option>
            <option>Personal Brand</option>
            <option>Analitika</option>
            <option>Telegram Kanal</option>
          </select>
        </div>
        <div class="field">
          <label>Ism</label>
          <input type="text" placeholder="Ismingiz">
        </div>
        <div class="field">
          <label>Telefon</label>
          <input type="text" placeholder="+998 90 000 00 00">
        </div>
        <div class="field">
          <label>Biznes / niche</label>
          <input type="text" placeholder="Beauty, kurs, cafe...">
        </div>
        <div class="field">
          <label>Platforma</label>
          <select>
            <option>Instagram</option>
            <option>TikTok</option>
            <option>Telegram</option>
          </select>
        </div>
        <div class="field">
          <label>Maqsad</label>
          <select>
            <option>Followers</option>
            <option>Sales</option>
            <option>Leads</option>
            <option>Brand awareness</option>
          </select>
        </div>
        <div class="field">
          <label>Qulay aloqa</label>
          <select>
            <option>Telegram</option>
            <option>Telefon</option>
            <option>Email</option>
          </select>
        </div>
        <div class="field">
          <label>Byudjet</label>
          <input type="text" placeholder="Masalan: $300 dan">
        </div>
      </div>

      <div class="field" style="margin-bottom:14px">
        <label>Loyiha haqida</label>
        <textarea rows="4" placeholder="Biznesingiz, hozirgi holat va kutayotgan natijangizni yozing."></textarea>
      </div>

      <button class="submit-btn">
        Yuborish →
      </button>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div>
      <p class="footer-brand-name">@therealshadman<em>off</em></p>
      <p class="footer-lead">
        Instagram, TikTok va Telegram uchun kontent strategiya, Reels prodakshn, target reklama va analitika. Har bir xizmat biznes natijaga ulanadi.
      </p>
      <a href="mailto:hello@shadmanoff.uz" class="footer-email">hello@shadmanoff.uz</a>
    </div>

    <div class="footer-col">
      <h4>Menu</h4>
      <div class="footer-links">
        <a href="#services">Xizmatlar</a>
        <a href="#cases">Keyslar</a>
        <a href="#reviews">Sharhlar</a>
        <a href="#contact-form">Brief yuborish</a>
      </div>
    </div>

    <div class="footer-col">
      <h4>Ijtimoiy tarmoqlar</h4>
      <div class="footer-links">
        <a href="https://instagram.com/therealshadmanoff">Instagram</a>
        <a href="https://tiktok.com/@therealshadmanoff">TikTok</a>
        <a href="https://t.me/therealshadmanoff">Telegram</a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© 2026 @therealshadmanoff. Barcha huquqlar himoyalangan.</p>
    <span class="footer-pill">SMM · Reels · Target · Analitika</span>
  </div>
</footer>
</div>
