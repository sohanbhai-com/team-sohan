<?php
// ---- সহজে পরিবর্তনযোগ্য কনফিগ ----
$brand      = "Team ";
$brand_blue = "Sohan";
$year       = date("Y");
$shop_url   = "https://Team Sohan";
$notices_url = "https://teamnano.com.bd/notices";
$tg_contact = "https://t.me/sohan_developer";
$tg_channel = "https://t.me/your_sohan_bhai";
$yt_channel = "https://youtube.com/";

$services = [
    [
        "title" => "Gaming Top-Up & Tournaments",
        "desc"  => "Fully automated, high-speed gaming top-up services for Free Fire, PUBG, etc., and professional esports tournaments with easy-to-manage tools and fast, secure delivery.",
        "icon"  => "gamepad",
        "style" => "light",
    ],
    [
        "title" => "Custom Web App",
        "desc"  => "Bespoke web applications with powerful admin panels, real-time data sync, and scalable architectures.",
        "icon"  => "laptop",
        "style" => "dark",
    ],
    [
        "title" => "E-Commerce Web",
        "desc"  => "Premium digital e-commerce stores with smooth checkout, secure, and seamless user experiences.",
        "icon"  => "store",
        "style" => "light",
    ],
    [
        "title" => "Payment Gateway Integration",
        "desc"  => "Secure and reliable multi-currency payment integration including bKash, Nagad, Coinbase, Crypto, and more for a frictionless user experience for global businesses.",
        "icon"  => "users",
        "style" => "light",
    ],
];

$icons = [
    "gamepad" => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="6" y1="12" x2="10" y2="12"/><line x1="8" y1="10" x2="8" y2="14"/><line x1="15" y1="13" x2="15.01" y2="13"/><line x1="18" y1="11" x2="18.01" y2="11"/><rect x="2" y="6" width="20" height="12" rx="6"/></svg>',
    "laptop"  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="5" width="16" height="11" rx="2"/><line x1="2" y1="20" x2="22" y2="20"/></svg>',
    "store"   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l1.5-5h15L21 9"/><path d="M3 9v11h18V9"/><path d="M3 9c0 2 3 2 3 0 0 2 3 2 3 0 0 2 3 2 3 0 0 2 3 2 3 0 0 2 3 2 3 0"/><path d="M9 20v-5h6v5"/></svg>',
    "users"   => '<svg viewBox="0 0 24 24" fill="currentColor"><circle cx="9" cy="8" r="3.2"/><path d="M2.5 19c0-3.3 2.9-5.5 6.5-5.5s6.5 2.2 6.5 5.5z"/><circle cx="17" cy="9" r="2.5"/><path d="M16.5 13.7c3 0 5 1.8 5 4.8h-4.2c0-1.9-.4-3.4-.8-4.8z"/></svg>',
    "pin"     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-6-5.2-6-10a6 6 0 0112 0c0 4.8-6 10-6 10z"/><circle cx="12" cy="11" r="2"/></svg>',
    "arrow"   => '<svg viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="11"/><path d="M7 12h9m-4-4l4 4-4 4" fill="none" stroke="#0b1220" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    "basket"  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 10h18l-2 10H5z"/><path d="M8 10l3-6M16 10l-3-6"/></svg>',
    "send"    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M8 12.5l8-4-3 8-1.5-3z"/></svg>',
    "tgfill"  => '<svg viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="11" fill="#0b1220"/><path d="M6.5 12.2l10-4-1.7 8.2-3-2.2-1.6 1.5-.3-2.8 5-4.4-6.1 3.8z" fill="#fff"/></svg>',
    "yt"      => '<svg viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="11" fill="#0b1220"/><rect x="6" y="8" width="12" height="8" rx="2.4" fill="#fff"/><path d="M11 10.2l3 1.8-3 1.8z" fill="#0b1220"/></svg>',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Team Sohan – Premium Web Development</title>
<link rel="icon" type="image/jpeg" href="https://i.ibb.co.com/DP79czMk/IMG-20261015-190417.jpg">
<link rel="shortcut icon" href="https://i.ibb.co.com/DP79czMk/IMG-20261015-190417.jpg">
<link rel="apple-touch-icon" href="https://i.ibb.co.com/DP79czMk/IMG-20261015-190417.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root{
    --bg:#e6effc;
    --bg2:#dbe8fb;
    --ink:#060b17;
    --muted:#5b6b86;
    --blue:#0a63ff;
    --card:rgba(255,255,255,.55);
    --line:rgba(255,255,255,.9);
    --navy:#050b1a;
  }
  *{box-sizing:border-box;margin:0;padding:0}
  html{scroll-behavior:smooth}
  body{
    font-family:'Inter',system-ui,sans-serif;
    background:#f3f6fb;
    color:var(--ink);
    -webkit-font-smoothing:antialiased;
  }
  .app{
    max-width:430px;margin:0 auto;min-height:100vh;
    background:linear-gradient(180deg,#eef4fd 0%,var(--bg) 35%,var(--bg2) 100%);
    position:relative;
    box-shadow:0 0 0 1px rgba(10,99,255,.06);
  }
  h1,h2,h3,.logo-text{font-family:'Montserrat',sans-serif}

  /* Header */
  header{
    position:sticky;top:0;z-index:20;
    display:flex;align-items:center;justify-content:space-between;
    padding:12px 18px;
    background:rgba(244,248,254,.85);
    backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);
    border-bottom:1px solid rgba(10,99,255,.08);
  }
  .logo{display:flex;align-items:center;gap:10px;text-decoration:none;color:var(--ink)}
  .logo-mark{
    width:34px;height:34px;border-radius:50%;background:var(--navy);color:#fff;
    display:grid;place-items:center;font:700 13px 'Montserrat',sans-serif;
    box-shadow:0 0 0 3px rgba(255,255,255,.8);
  }
  .logo-text{font-weight:600;font-size:18px}
  .logo-text span{color:var(--blue)}
  .menu-btn{
    background:none;border:0;cursor:pointer;width:40px;height:40px;
    display:grid;place-items:center;border-radius:10px;color:var(--ink);
  }
  .menu-btn:focus-visible{outline:2px solid var(--blue);outline-offset:2px}
  .menu-btn svg{width:22px;height:22px}

  /* Coming soon toast */
  .soon{
    position:fixed;top:72px;left:50%;z-index:80;
    background:var(--navy);color:#fff;
    padding:12px 22px;border-radius:16px;text-align:center;
    font:600 14px 'Montserrat',sans-serif;white-space:nowrap;
    box-shadow:0 12px 30px rgba(5,11,26,.25);
    opacity:0;transform:translate(-50%,-8px);pointer-events:none;
    transition:opacity .2s,transform .2s;
  }
  .soon.show{opacity:1;transform:translate(-50%,0)}
  .soon small{display:block;font:400 12px 'Inter',sans-serif;color:#9fb2d6;margin-top:2px}

  /* Side drawer menu */
  .overlay{
    position:fixed;inset:0;z-index:60;
    background:rgba(15,22,38,.38);
    backdrop-filter:blur(6px);-webkit-backdrop-filter:blur(6px);
    opacity:0;visibility:hidden;transition:opacity .25s,visibility .25s;
  }
  .overlay.open{opacity:1;visibility:visible}
  .drawer{
    position:fixed;top:0;bottom:0;z-index:70;
    right:max(0px,calc(50vw - 215px));
    width:min(76vw,327px);
    background:rgba(226,229,234,.98);
    box-shadow:-10px 0 40px rgba(5,11,26,.22);
    padding:26px 22px 24px;
    transform:translateX(110%);visibility:hidden;
    transition:transform .3s cubic-bezier(.22,.8,.3,1),visibility .3s;
    overflow-y:auto;
  }
  .drawer.open{transform:none;visibility:visible}
  .drawer-top{display:flex;align-items:center;justify-content:space-between;margin-bottom:34px}
  .drawer-title{font:700 12px 'Montserrat',sans-serif;letter-spacing:.28em;color:#6b7c9c}
  .close-btn{
    width:42px;height:42px;border-radius:50%;border:0;cursor:pointer;
    background:#d3dbe8;color:#3a4560;display:grid;place-items:center;
  }
  .close-btn svg{width:18px;height:18px}
  .close-btn:focus-visible,.nav-item:focus-visible{outline:2px solid var(--blue);outline-offset:2px}
  .nav{display:flex;flex-direction:column;gap:6px}
  .nav-item{
    display:flex;align-items:center;gap:20px;
    padding:15px 14px;border-radius:20px;border:0;background:none;width:100%;
    text-decoration:none;cursor:pointer;text-align:left;
    font:600 17px 'Montserrat',sans-serif;letter-spacing:-.02em;color:#343f5a;
  }
  .nav-item svg{width:20px;height:20px;flex:none;color:#7284a3}
  .nav-item.dark-ico svg{color:#3a4560}
  .nav-item.active{background:#cfd9e7;color:var(--blue)}
  .nav-item.active svg{color:var(--blue)}
  .nav-sep{height:1px;background:rgba(120,140,175,.28);margin:20px 0 22px}
  body.no-scroll{overflow:hidden}

  main{padding:0 20px 20px}

  /* Hero */
  .hero{padding-top:32px}
  .badge{
    display:inline-flex;align-items:center;gap:8px;
    padding:7px 14px;border-radius:999px;
    background:rgba(255,255,255,.6);border:1px solid rgba(255,255,255,.9);
    font:700 10.5px 'Inter',sans-serif;letter-spacing:.14em;color:#1b2a4a;
    text-transform:uppercase;
  }
  .badge i{width:9px;height:9px;border-radius:50%;background:var(--blue);display:block;box-shadow:0 0 0 3px rgba(10,99,255,.18)}
  h1{
    font-size:44px;line-height:1.02;font-weight:800;letter-spacing:-.035em;margin:18px 0 18px;
  }
  h1 em{font-style:normal;color:var(--blue)}
  .lead{font-size:17px;line-height:1.5;color:var(--muted);margin-bottom:22px}
  .btn{
    display:flex;align-items:center;justify-content:center;gap:8px;
    width:100%;height:44px;border-radius:999px;text-decoration:none;
    font:600 13.5px 'Inter',sans-serif;margin-bottom:12px;border:1px solid transparent;cursor:pointer;
    transition:transform .15s;
  }
  .btn:active{transform:scale(.98)}
  .btn:focus-visible{outline:2px solid var(--blue);outline-offset:2px}
  .btn-primary{background:var(--blue);color:#fff;box-shadow:0 8px 20px rgba(10,99,255,.3);font-size:14.5px}
  .btn-ghost{background:rgba(255,255,255,.5);border-color:rgba(160,185,225,.6);color:var(--ink)}

  /* Section heads */
  .eyebrow{font:700 11px 'Inter',sans-serif;letter-spacing:.16em;text-transform:uppercase;color:var(--blue)}
  h2{font-size:27px;font-weight:800;letter-spacing:-.025em;margin-top:6px}
  #services{padding-top:44px}
  .cards{display:flex;flex-direction:column;gap:16px;margin-top:18px}

  .card{
    border-radius:22px;padding:22px 26px 20px;
    background:var(--card);border:1px solid var(--line);
    box-shadow:0 2px 14px rgba(10,60,140,.05);
  }
  .card .ico{
    width:56px;height:56px;border-radius:16px;display:grid;place-items:center;
    background:var(--navy);color:#fff;margin-bottom:14px;
  }
  .card .ico svg{width:26px;height:26px}
  .card.light .ico.soft{background:rgba(10,99,255,.1);color:var(--blue)}
  .card h3{font-size:20px;font-weight:700;line-height:1.15;margin-bottom:8px}
  .card p{font-size:15.5px;line-height:1.4;color:var(--muted)}
  .card.dark{background:var(--navy);border-color:#0d1730;box-shadow:0 10px 26px rgba(5,11,26,.25)}
  .card.dark .ico{background:#16213b;color:#cfd9ee}
  .card.dark h3{color:#fff}
  .card.dark p{color:#c3cde2}

  /* CTA */
  .cta{
    margin-top:16px;border-radius:22px;padding:22px 24px 26px;
    background:linear-gradient(160deg,#cfe0f8,#c4d9f5);
    border:1px solid rgba(255,255,255,.7);
  }
  .tag{
    display:inline-flex;align-items:center;gap:6px;padding:4px 10px 4px 6px;border-radius:999px;
    background:rgba(255,255,255,.55);color:var(--blue);
    font:700 9.5px 'Inter',sans-serif;letter-spacing:.12em;text-transform:uppercase;
  }
  .tag svg{width:14px;height:14px;background:#fff;border-radius:50%;padding:2px}
  .cta h3{font-size:22px;font-weight:800;line-height:1.15;margin:10px 0 8px;letter-spacing:-.02em}
  .cta p{font-size:15px;line-height:1.4;color:#4a5e80;margin-bottom:18px}
  .cta-btn{
    display:flex;align-items:center;justify-content:center;gap:10px;
    width:162px;height:40px;margin:0 auto;border-radius:999px;background:var(--navy);color:#fff;
    text-decoration:none;font:600 14.5px 'Inter',sans-serif;
  }
  .cta-btn svg{width:20px;height:20px;color:#fff}

  /* Metrics */
  #metrics{padding-top:44px}
  #metrics .sub{font-size:13px;line-height:1.35;color:var(--muted);margin-top:8px}
  .stats{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-top:14px}
  .stat{
    border-radius:18px;padding:12px 8px 12px;text-align:center;
    background:var(--card);border:1px solid var(--line);
  }
  .stat b{display:block;font:800 31px 'Montserrat',sans-serif;letter-spacing:-.03em}
  .stat span{display:block;margin-top:4px;font:600 9.5px 'Inter',sans-serif;letter-spacing:.2em;color:#4a5a78;text-transform:uppercase}
  .stat.wide{grid-column:1/-1;background:var(--navy);border-color:#0d1730;color:#fff;padding:16px 8px}
  .stat.wide span{color:#c9d3e8}
  .stat.wide b{font-size:34px}

  /* Footer */
  footer{padding:34px 20px 22px}
  .f-logo{display:flex;align-items:center;gap:10px;margin-bottom:8px}
  .f-logo .logo-mark{width:30px;height:30px;font-size:11px}
  .f-logo .logo-text{font-size:15px}
  .f-about{font-size:12.5px;line-height:1.3;color:var(--muted)}
  .f-title{font:700 10px 'Inter',sans-serif;letter-spacing:.2em;text-transform:uppercase;color:var(--ink);margin:12px 0 6px}
  .f-link{display:flex;align-items:center;gap:8px;font-size:12.5px;color:var(--muted);text-decoration:none;margin-bottom:8px}
  .f-link svg{width:15px;height:15px;color:#4a5a78}
  .socials{display:flex;gap:12px;margin-top:10px}
  .socials a{
    width:34px;height:34px;border-radius:50%;display:grid;place-items:center;
    background:rgba(255,255,255,.6);border:1px solid rgba(255,255,255,.9);
  }
  .socials svg{width:20px;height:20px}
  .copy{
    margin-top:18px;padding-top:12px;border-top:1px solid rgba(120,150,200,.3);
    text-align:center;font-size:10.5px;color:var(--muted);
  }
  .dev{
    display:inline-block;margin-top:8px;padding:5px 16px;border-radius:999px;
    background:rgba(255,255,255,.6);border:1px solid rgba(255,255,255,.9);
    font:700 8.5px 'Inter',sans-serif;letter-spacing:.2em;text-transform:uppercase;color:#3a4a68;
  }

  @media (prefers-reduced-motion:reduce){.soon,.btn{transition:none}html{scroll-behavior:auto}}
</style>
</head>
<body>
<div class="app" id="top">

  <header>
    <a class="logo" href="#">
      <span class="logo-mark">TS</span>
      <span class="logo-text"><?= $brand ?><span><?= $brand_blue ?></span></span>
    </a>
    <button class="menu-btn" id="menuBtn" aria-label="Menu" aria-expanded="false" aria-controls="drawer">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
    </button>
  </header>

  <div class="soon" id="soonBox" role="status" aria-live="polite">
    Coming soon
    <small>এই অংশটি শীঘ্রই আসছে</small>
  </div>

  <div class="overlay" id="overlay"></div>
  <aside class="drawer" id="drawer" aria-hidden="true" aria-label="Menu">
    <div class="drawer-top">
      <span class="drawer-title">MENU</span>
      <button class="close-btn" id="closeBtn" aria-label="Close menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round"><path d="M5 5l14 14M19 5L5 19"/></svg>
      </button>
    </div>

    <nav class="nav">
      <a class="nav-item" href="#top" data-close>
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 3L2 12h3v8h5v-6h4v6h5v-8h3z"/></svg>Home
      </a>
      <a class="nav-item" href="#services" data-close>
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5z"/><path d="M2 12l10 5 10-5-2.2-1.1L12 14.8 4.2 10.9z" opacity=".75"/><path d="M2 16.5l10 5 10-5-2.2-1.1L12 19.3l-7.8-3.9z" opacity=".55"/></svg>Our Services
      </a>
      <a class="nav-item" href="#metrics" data-close>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 15l4-4 3 3 5-6"/></svg>Experience
      </a>
    </nav>

    <div class="nav-sep"></div>

    <nav class="nav">
      <a class="nav-item" href="<?= $notices_url ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg>Notices
      </a>
      <a class="nav-item dark-ico" href="<?= $tg_contact ?>" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="currentColor"/><path d="M6.8 12.2l10-4-1.7 8-3-2.2-1.6 1.5-.3-2.8 5-4.4-6.1 3.7z" fill="#e2e5ea"/></svg>Contact on Telegram
      </a>
      <a class="nav-item active" href="<?= $tg_channel ?>" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="currentColor"/><path d="M6.8 12.2l10-4-1.7 8-3-2.2-1.6 1.5-.3-2.8 5-4.4-6.1 3.7z" fill="#cfd9e7"/></svg>Telegram Channel
      </a>
    </nav>
  </aside>

  <main>
    <section class="hero">
      <span class="badge"><i></i>Premium Digital Agency</span>
      <h1>Next-Gen Web<br>&amp;<br>App <em>Solutions.</em></h1>
      <p class="lead">We architect premium gaming top-up platforms, tournament systems, e-commerce stores, secure payment gateways, and scalable digital infrastructure for modern businesses.</p>
      <a class="btn btn-primary" href="#contact">Hire Us Now</a>
      <a class="btn btn-ghost" href="#services">View Services</a>
      <a class="btn btn-ghost" href="<?= $notices_url ?>">View Notices</a>
    </section>

    <section id="services">
      <div class="eyebrow">What We Build</div>
      <h2>Premium Services</h2>
      <div class="cards">
        <?php foreach ($services as $s):
            $cls  = $s["style"] === "dark" ? "dark" : "light";
            $soft = ($s["icon"] === "store") ? "soft" : "";
        ?>
        <article class="card <?= $cls ?>">
          <div class="ico <?= $soft ?>"><?= $icons[$s["icon"]] ?></div>
          <h3><?= htmlspecialchars($s["title"]) ?></h3>
          <p><?= htmlspecialchars($s["desc"]) ?></p>
        </article>
        <?php endforeach; ?>

        <div class="cta" id="contact">
          <span class="tag"><?= $icons["pin"] ?>Have an idea in mind?</span>
          <h3>Let's Build Your Dream Project</h3>
          <p>Our expert team is here to bring your ideas to life with custom web applications. Contact us to get a premium quote.</p>
          <a class="cta-btn" href="<?= $tg_contact ?>" target="_blank" rel="noopener">Contact Us <?= $icons["arrow"] ?></a>
        </div>
      </div>
    </section>

    <section id="metrics">
      <div class="eyebrow">The Metrics</div>
      <h2>Built for Scale.</h2>
      <p class="sub">Numbers speak louder than promises. The projects we've built, the clients we've served, and the impact we've made — all in one place.</p>
      <div class="stats">
        <div class="stat"><b>5+</b><span>Years Exp.</span></div>
        <div class="stat"><b>500+</b><span>Web Projects</span></div>
        <div class="stat wide"><b>10,000+</b><span>Happy Clients Globally</span></div>
      </div>
    </section>
  </main>

  <footer>
    <div class="f-logo">
      <span class="logo-mark">TS</span>
      <span class="logo-text"><?= $brand ?><span style="color:var(--blue)"><?= $brand_blue ?></span></span>
    </div>
    <p class="f-about">We architect premium gaming top-up platforms, tournament systems, e-commerce stores, secure payment gateways, and scalable digital infrastructure for modern businesses.</p>

    <div class="f-title">Official Links</div>
    <a class="f-link" href="<?= $shop_url ?>" target="_blank" rel="noopener"><?= $icons["basket"] ?>Team Sohan</a>
    <a class="f-link" href="<?= $tg_contact ?>" target="_blank" rel="noopener"><?= $icons["send"] ?>Telegram Contact</a>

    <div class="f-title">Join Community</div>
    <p class="f-about">Stay updated with our latest projects and releases.</p>
    <div class="socials">
      <a href="<?= $tg_channel ?>" target="_blank" rel="noopener" aria-label="Telegram"><?= $icons["tgfill"] ?></a>
      <a href="<?= $yt_channel ?>" target="_blank" rel="noopener" aria-label="YouTube"><?= $icons["yt"] ?></a>
    </div>

    <div class="copy">
      &copy; <?= $year ?> Sohan  Developer. All rights reserved.<br>
      <span class="dev">Developed by Sohan  Developer</span>
    </div>
  </footer>
</div>

<script>
  (function(){
    var btn = document.getElementById('menuBtn');
    var drawer = document.getElementById('drawer');
    var overlay = document.getElementById('overlay');
    var closeBtn = document.getElementById('closeBtn');
    var toast = document.getElementById('soonBox');
    var timer;

    function openMenu(){
      drawer.classList.add('open'); overlay.classList.add('open');
      drawer.setAttribute('aria-hidden','false');
      btn.setAttribute('aria-expanded','true');
      document.body.classList.add('no-scroll');
    }
    function closeMenu(){
      drawer.classList.remove('open'); overlay.classList.remove('open');
      drawer.setAttribute('aria-hidden','true');
      btn.setAttribute('aria-expanded','false');
      document.body.classList.remove('no-scroll');
    }
    function showSoon(){
      toast.classList.add('show');
      clearTimeout(timer);
      timer = setTimeout(function(){ toast.classList.remove('show'); }, 2200);
    }

    btn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);
    document.addEventListener('keydown', function(e){ if(e.key === 'Escape') closeMenu(); });

    document.querySelectorAll('[data-close]').forEach(function(el){
      el.addEventListener('click', closeMenu);
    });
    // Coming soon: মেনুর Notices এবং হিরোর View Notices
    document.querySelectorAll('[data-soon]').forEach(function(el){
      el.addEventListener('click', function(e){
        e.preventDefault();
        closeMenu();
        showSoon();
      });
    });
  })();
</script>
</body>
</html>