<div>
<style>
  :root {
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

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  body {
    background: var(--black);
    color: var(--text);
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    line-height: 1.65;
    overflow-x: hidden;
  }

  /* NAV */
  .nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 100;
    display: flex; align-items: center; justify-content: space-between;
    padding: 20px 48px;
    background: rgba(8,8,8,0.85);
    backdrop-filter: blur(16px);
    border-bottom: 1px solid var(--border);
  }

  .nav-brand {
    font-family: 'Syne', sans-serif;
    font-weight: 800;
    font-size: 18px;
    letter-spacing: -0.02em;
    color: var(--text);
    text-decoration: none;
  }
  .nav-brand em { color: var(--accent); font-style: normal; }

  .nav-links {
    display: flex; gap: 36px; list-style: none;
  }
  .nav-links a {
    color: var(--muted);
    text-decoration: none;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0.02em;
    transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--text); }

  .nav-cta {
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
  .nav-cta:hover { opacity: 0.88; transform: translateY(-1px); }

  /* HERO */
  .hero {
    min-height: 100vh;
    display: flex; align-items: center;
    padding: 120px 48px 80px;
    position: relative;
    overflow: hidden;
  }

  .hero-bg {
    position: absolute; inset: 0; z-index: 0;
    background: radial-gradient(ellipse 60% 60% at 70% 50%, rgba(255,61,61,0.08) 0%, transparent 65%),
                radial-gradient(ellipse 40% 40% at 20% 30%, rgba(232,201,122,0.05) 0%, transparent 60%);
  }

  .hero-grid-lines {
    position: absolute; inset: 0; z-index: 0;
    background-image:
      linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
    background-size: 80px 80px;
    mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 0%, transparent 80%);
  }

  .hero-inner {
    position: relative; z-index: 1;
    display: grid; grid-template-columns: 1fr 1fr; gap: 80px;
    align-items: center; max-width: 1200px; margin: 0 auto; width: 100%;
  }

  .hero-tag {
    display: inline-flex; align-items: center; gap: 8px;
    font-size: 12px; letter-spacing: 0.12em; text-transform: uppercase;
    color: var(--accent); font-weight: 500;
    margin-bottom: 28px;
  }
  .hero-tag::before {
    content: '';
    display: block; width: 6px; height: 6px;
    background: var(--accent); border-radius: 50%;
    animation: pulse 2s ease-in-out infinite;
  }
  @keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(0.7); }
  }

  .hero-title {
    font-family: 'Syne', sans-serif;
    font-size: clamp(42px, 5vw, 72px);
    font-weight: 800;
    line-height: 1.04;
    letter-spacing: -0.03em;
    margin-bottom: 28px;
  }
  .hero-title .handle {
    display: block;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent2) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .hero-title .sub {
    display: block;
    color: var(--text);
  }
  .hero-title .thin {
    display: block;
    color: var(--muted);
    font-weight: 400;
    font-size: 0.55em;
    letter-spacing: -0.01em;
  }

  .hero-bio {
    color: var(--muted);
    font-size: 17px;
    line-height: 1.7;
    max-width: 460px;
    margin-bottom: 40px;
  }

  .hero-chips {
    display: flex; flex-wrap: wrap; gap: 8px;
    margin-bottom: 40px;
  }
  .chip {
    font-size: 12px; font-weight: 500; letter-spacing: 0.04em;
    padding: 6px 14px;
    border: 1px solid var(--border);
    border-radius: 100px;
    color: var(--muted);
    background: rgba(255,255,255,0.03);
  }

  .hero-btns {
    display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 52px;
  }
  .btn-primary {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--accent);
    color: #fff; text-decoration: none;
    font-family: 'Syne', sans-serif; font-weight: 700; font-size: 14px;
    padding: 14px 28px; border-radius: 100px;
    transition: transform 0.2s, box-shadow 0.2s;
  }
  .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 12px 32px rgba(255,61,61,0.3); }

  .btn-secondary {
    display: inline-flex; align-items: center; gap: 8px;
    background: transparent;
    color: var(--text); text-decoration: none;
    font-family: 'Syne', sans-serif; font-weight: 600; font-size: 14px;
    padding: 14px 28px; border-radius: 100px;
    border: 1px solid var(--border);
    transition: border-color 0.2s, background 0.2s;
  }
  .btn-secondary:hover { border-color: var(--border-hover); background: rgba(255,255,255,0.04); }

  .btn-ghost {
    display: inline-flex; align-items: center; gap: 6px;
    color: var(--muted); text-decoration: none;
    font-size: 14px; padding: 14px 0;
    transition: color 0.2s;
  }
  .btn-ghost:hover { color: var(--text); }

  .stats-row {
    display: flex; gap: 32px; flex-wrap: wrap;
    padding-top: 32px;
    border-top: 1px solid var(--border);
  }
  .stat-item strong {
    display: block;
    font-family: 'Syne', sans-serif;
    font-size: 28px; font-weight: 800;
    background: linear-gradient(135deg, var(--text) 0%, var(--muted) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .stat-item span {
    font-size: 12px; color: var(--muted); letter-spacing: 0.04em;
  }

  /* PROFILE CARD RIGHT */
  .profile-stage {
    position: relative;
  }

  .profile-card {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 24px;
    overflow: hidden;
    position: relative;
  }
  .profile-card-media {
    width: 100%; aspect-ratio: 4/3;
    background: linear-gradient(135deg, #1a1a1a 0%, #222 100%);
    display: flex; align-items: center; justify-content: center;
    position: relative;
    overflow: hidden;
  }
  .profile-card-media::after {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(to bottom, transparent 40%, var(--card) 100%);
  }
  .profile-initials {
    font-family: 'Syne', sans-serif;
    font-size: 80px; font-weight: 800;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent2) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative; z-index: 1;
  }
  .profile-card-body {
    padding: 20px 24px 24px;
  }
  .profile-card-body small {
    font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent);
  }
  .profile-card-body strong {
    display: block; font-family: 'Syne', sans-serif; font-size: 20px; font-weight: 700; margin: 4px 0 2px;
  }
  .profile-card-body span { font-size: 14px; color: var(--muted); }

  .float-badge {
    position: absolute;
    background: var(--panel);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 12px 18px;
    display: flex; align-items: center; gap: 12px;
    backdrop-filter: blur(8px);
  }
  .float-badge--tl { top: -20px; left: -28px; }
  .float-badge--br { bottom: -20px; right: -28px; }
  .float-badge-icon {
    width: 36px; height: 36px; border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 13px;
  }
  .float-badge-icon.tiktok { background: rgba(0,242,234,0.15); color: #00f2ea; }
  .float-badge-icon.ig { background: rgba(255,61,61,0.15); color: var(--accent); }
  .float-badge strong { display: block; font-size: 13px; font-weight: 600; }
  .float-badge small { font-size: 11px; color: var(--muted); }

  /* SECTION COMMONS */
  section { max-width: 1200px; margin: 0 auto; padding: 100px 48px; }

  .section-kicker {
    font-size: 11px; letter-spacing: 0.14em; text-transform: uppercase;
    color: var(--accent); font-weight: 500;
    margin-bottom: 16px;
  }
  .section-title {
    font-family: 'Syne', sans-serif;
    font-size: clamp(32px, 4vw, 52px);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.03em;
    margin-bottom: 20px;
  }
  .section-lead {
    color: var(--muted);
    font-size: 17px;
    max-width: 580px;
    line-height: 1.7;
  }

  /* SERVICES */
  .services-wrap { max-width: 1200px; margin: 0 auto; padding: 0 48px 100px; }
  .services-head { margin-bottom: 56px; }

  .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 2px;
    background: var(--border);
    border-radius: 20px;
    overflow: hidden;
  }

  .service-card {
    background: var(--card);
    padding: 36px 32px;
    transition: background 0.2s;
    position: relative;
  }
  .service-card:hover { background: #1e1e1e; }

  .service-card-icon {
    width: 48px; height: 48px; border-radius: 14px;
    background: rgba(255,61,61,0.1);
    border: 1px solid rgba(255,61,61,0.2);
    display: flex; align-items: center; justify-content: center;
    font-family: 'Syne', sans-serif;
    font-weight: 800; font-size: 14px;
    color: var(--accent);
    margin-bottom: 20px;
  }

  .service-card h3 {
    font-family: 'Syne', sans-serif;
    font-size: 18px; font-weight: 700;
    margin-bottom: 10px;
  }
  .service-card p { font-size: 14px; color: var(--muted); line-height: 1.6; }

  .service-card-price {
    display: inline-block;
    margin-top: 16px;
    font-family: 'Syne', sans-serif;
    font-size: 13px; font-weight: 700;
    color: var(--gold);
    background: rgba(232,201,122,0.08);
    padding: 4px 12px; border-radius: 100px;
    border: 1px solid rgba(232,201,122,0.15);
  }

  .service-benefit {
    display: block;
    margin-top: 10px;
    font-size: 12px; color: rgba(255,61,61,0.8);
    letter-spacing: 0.03em;
  }

  /* PORTFOLIO / CASE SECTION */
  .cases-wrap { max-width: 1200px; margin: 0 auto; padding: 0 48px 100px; }
  .cases-head { margin-bottom: 56px; }

  .featured-case {
    display: grid; grid-template-columns: 1fr 1fr; gap: 60px;
    align-items: center;
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 24px;
    padding: 52px;
    margin-bottom: 32px;
    position: relative; overflow: hidden;
  }
  .featured-case::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 1px;
    background: linear-gradient(90deg, transparent 0%, var(--accent) 50%, transparent 100%);
    opacity: 0.4;
  }

  .case-eyebrow {
    font-size: 11px; letter-spacing: 0.12em; text-transform: uppercase;
    color: var(--accent); font-weight: 500; margin-bottom: 12px;
  }
  .case-title {
    font-family: 'Syne', sans-serif;
    font-size: 30px; font-weight: 800; line-height: 1.15;
    letter-spacing: -0.02em; margin-bottom: 16px;
  }
  .case-desc { font-size: 15px; color: var(--muted); margin-bottom: 24px; line-height: 1.7; }

  .case-tags {
    display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 32px;
  }
  .case-tag {
    font-size: 12px; padding: 5px 12px;
    border: 1px solid var(--border); border-radius: 100px; color: var(--muted);
  }

  .case-steps { display: flex; flex-direction: column; gap: 14px; }
  .case-step {
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 14px 18px;
  }
  .case-step span {
    font-size: 11px; letter-spacing: 0.08em; text-transform: uppercase;
    color: var(--accent); font-weight: 500;
  }
  .case-step p { font-size: 14px; color: var(--muted); margin-top: 4px; }

  .case-visual {
    background: var(--panel);
    border: 1px solid var(--border);
    border-radius: 16px;
    aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    position: relative; overflow: hidden;
  }
  .case-visual-placeholder {
    font-family: 'Syne', sans-serif;
    font-size: 14px; font-weight: 700; letter-spacing: 0.06em; color: var(--dim);
    text-transform: uppercase;
  }
  .case-result-badge {
    position: absolute; bottom: 16px; right: 16px;
    background: rgba(255,61,61,0.15);
    border: 1px solid rgba(255,61,61,0.25);
    border-radius: 100px;
    padding: 6px 14px;
    font-size: 13px; font-weight: 700; color: var(--accent);
  }

  /* MINI CASES GRID */
  .mini-cases {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;
  }
  .mini-case {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 18px;
    padding: 28px;
    transition: border-color 0.2s, transform 0.2s;
  }
  .mini-case:hover { border-color: var(--border-hover); transform: translateY(-3px); }

  .mini-case-platform {
    font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase;
    color: var(--muted); margin-bottom: 10px;
  }
  .mini-case h3 {
    font-family: 'Syne', sans-serif;
    font-size: 17px; font-weight: 700; margin-bottom: 8px;
  }
  .mini-case-meta {
    display: flex; gap: 10px; flex-wrap: wrap; margin-top: 16px;
  }
  .mini-case-niche {
    font-size: 12px; color: var(--muted); padding: 4px 10px;
    border: 1px solid var(--border); border-radius: 100px;
  }
  .mini-case-result {
    font-size: 12px; color: var(--accent); font-weight: 700;
    padding: 4px 10px;
    border: 1px solid rgba(255,61,61,0.2); border-radius: 100px;
    background: rgba(255,61,61,0.06);
  }

  /* CONTACT */
  .contact-wrap { max-width: 1200px; margin: 0 auto; padding: 0 48px 100px; }

  .contact-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;
    margin-top: 48px;
  }
  .contact-card {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 18px;
    padding: 28px;
    text-decoration: none;
    display: block;
    transition: border-color 0.2s, transform 0.2s;
  }
  .contact-card:hover { border-color: var(--accent); transform: translateY(-3px); }

  .contact-avatar {
    width: 48px; height: 48px; border-radius: 14px;
    background: rgba(255,61,61,0.1);
    border: 1px solid rgba(255,61,61,0.2);
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 14px; color: var(--accent);
    font-family: 'Syne', sans-serif;
    margin-bottom: 18px;
  }

  .contact-role {
    font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase;
    color: var(--muted); margin-bottom: 6px;
  }
  .contact-title {
    font-family: 'Syne', sans-serif;
    font-size: 16px; font-weight: 700; margin-bottom: 4px; color: var(--text);
  }
  .contact-value {
    display: block; font-size: 14px; font-weight: 600; color: var(--accent); margin-bottom: 6px;
  }
  .contact-meta { font-size: 13px; color: var(--muted); }

  /* REVIEWS */
  .reviews-wrap { max-width: 1200px; margin: 0 auto; padding: 0 48px 100px; }
  .reviews-head { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 48px; }

  .reviews-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 16px;
  }
  .review-card {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 18px;
    padding: 32px;
    position: relative;
  }
  .review-stars {
    display: flex; gap: 3px; margin-bottom: 18px;
  }
  .review-stars span { color: var(--gold); font-size: 16px; }
  .review-quote {
    font-size: 15px; color: var(--text); line-height: 1.7;
    margin-bottom: 24px;
    font-style: italic;
  }
  .review-author strong { display: block; font-size: 14px; font-weight: 600; }
  .review-author span { font-size: 13px; color: var(--muted); }

  /* FORM SECTION */
  .form-wrap { max-width: 1200px; margin: 0 auto; padding: 0 48px 100px; }
  .form-inner {
    display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start;
  }

  .form-copy .section-title { font-size: clamp(28px, 3vw, 44px); }
  .form-points { margin-top: 40px; display: flex; flex-direction: column; gap: 16px; }
  .form-point strong { display: block; font-size: 15px; font-weight: 600; margin-bottom: 3px; }
  .form-point span { font-size: 14px; color: var(--muted); }

  .form-card {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 24px;
    padding: 40px;
  }
  .form-card h3 {
    font-family: 'Syne', sans-serif;
    font-size: 22px; font-weight: 800; margin-bottom: 8px;
  }
  .form-card > p { font-size: 14px; color: var(--muted); margin-bottom: 32px; }

  .field-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 14px; }

  .field {
    display: flex; flex-direction: column; gap: 6px;
  }
  .field label {
    font-size: 12px; letter-spacing: 0.04em; color: var(--muted); font-weight: 500;
  }
  .field input, .field select, .field textarea {
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
  .field input:focus, .field select:focus, .field textarea:focus {
    border-color: var(--accent);
  }
  .field input::placeholder, .field textarea::placeholder { color: var(--dim); }
  .field select option { background: #1a1a1a; color: var(--text); }

  .submit-btn {
    display: flex; align-items: center; justify-content: center; gap: 8px;
    width: 100%;
    background: var(--accent);
    color: #fff; border: none; cursor: pointer;
    font-family: 'Syne', sans-serif; font-weight: 700; font-size: 15px;
    padding: 16px 28px; border-radius: 12px;
    margin-top: 20px;
    transition: opacity 0.2s, transform 0.2s;
  }
  .submit-btn:hover { opacity: 0.9; transform: translateY(-1px); }

  /* FOOTER */
  footer {
    border-top: 1px solid var(--border);
    padding: 60px 48px 40px;
    max-width: 1200px; margin: 0 auto;
  }
  .footer-grid {
    display: grid; grid-template-columns: 1.5fr 1fr 1fr; gap: 60px; margin-bottom: 48px;
  }
  .footer-brand-name {
    font-family: 'Syne', sans-serif; font-size: 20px; font-weight: 800;
    margin-bottom: 12px;
  }
  .footer-brand-name em { color: var(--accent); font-style: normal; }
  .footer-lead { font-size: 14px; color: var(--muted); line-height: 1.7; margin-bottom: 20px; max-width: 280px; }
  .footer-email { font-size: 14px; color: var(--accent); text-decoration: none; font-weight: 500; }

  .footer-col h4 {
    font-family: 'Syne', sans-serif; font-size: 13px; font-weight: 700;
    letter-spacing: 0.08em; text-transform: uppercase; color: var(--muted);
    margin-bottom: 18px;
  }
  .footer-links { display: flex; flex-direction: column; gap: 10px; }
  .footer-links a { color: var(--muted); text-decoration: none; font-size: 14px; transition: color 0.2s; }
  .footer-links a:hover { color: var(--text); }

  .footer-bottom {
    border-top: 1px solid var(--border);
    padding-top: 24px;
    display: flex; justify-content: space-between; align-items: center;
  }
  .footer-bottom p { font-size: 13px; color: var(--dim); }
  .footer-pill {
    font-size: 12px; color: var(--muted);
    padding: 6px 14px; border: 1px solid var(--border); border-radius: 100px;
  }

  /* ABOUT STRIP */
  .about-strip {
    background: var(--card);
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
    padding: 80px 48px;
    margin: 0;
  }
  .about-strip-inner {
    max-width: 1200px; margin: 0 auto;
    display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;
  }
  .about-quote {
    font-family: 'Syne', sans-serif;
    font-size: clamp(22px, 3vw, 38px);
    font-weight: 700; line-height: 1.2; letter-spacing: -0.02em;
    color: var(--text);
  }
  .about-quote em { color: var(--accent); font-style: normal; }

  .about-list { display: flex; flex-direction: column; gap: 20px; }
  .about-item { display: flex; align-items: flex-start; gap: 14px; }
  .about-dot {
    width: 8px; height: 8px; border-radius: 50%; background: var(--accent);
    margin-top: 7px; flex-shrink: 0;
  }
  .about-item strong { display: block; font-size: 15px; font-weight: 600; margin-bottom: 3px; }
  .about-item span { font-size: 14px; color: var(--muted); }

  /* RESPONSIVE */
  @media (max-width: 900px) {
    .nav { padding: 16px 24px; }
    .nav-links { display: none; }
    .hero { padding: 100px 24px 60px; }
    .hero-inner { grid-template-columns: 1fr; gap: 48px; }
    .profile-stage { display: none; }
    section, .services-wrap, .cases-wrap, .contact-wrap, .reviews-wrap, .form-wrap { padding-left: 24px; padding-right: 24px; }
    .form-inner { grid-template-columns: 1fr; gap: 48px; }
    .footer-grid { grid-template-columns: 1fr; gap: 36px; }
    .featured-case { grid-template-columns: 1fr; padding: 32px; }
    .about-strip-inner { grid-template-columns: 1fr; gap: 40px; }
    .about-strip { padding: 60px 24px; }
    footer { padding: 48px 24px 32px; }
    .field-grid { grid-template-columns: 1fr; }
    .reviews-head { flex-direction: column; align-items: flex-start; gap: 20px; }
  }
</style>
</head>
<body>

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
<div id="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid-lines"></div>
  <div class="hero-inner" style="position:relative;z-index:1;max-width:1200px;margin:0 auto;width:100%;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;padding:120px 48px 80px;">

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

</body>
</html>