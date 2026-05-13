<?php require 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barış Demirog | Full Stack Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<header class="navbar">
    <div class="logo">BD <span>Barış Demirok</span></div>

    <nav>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>

    <button id="darkModeBtn" aria-label="Toggle theme"></button>
</header>

<main>

<section class="hero" id="home">
    <div class="hero-inner">
        <div class="hero-pattern"></div>

        <div class="hero-grid">
            <div class="hero-main">
                <div class="avatar-card">
    <img src="assets/images/profile.jpg" alt="Barış">
</div>

                <div class="hero-text">
                    <p class="intro-kicker">Hi, I'm Barış.</p>

                    <h1>Full Stack<br>Web Developer</h1>

                    <p class="hero-subtitle">
                        PHP, MySQL, JavaScript & modern interface developer.
                    </p>

                    <div class="meta-row">
                        <span class="meta-pill">📍 Istanbul, Türkiye</span>
                        <span class="meta-pill"><span class="status-dot"></span>Open to work</span>
                        <span class="meta-pill">⚙ Backend + Frontend</span>
                        <span class="meta-pill">🗄 MySQL Database</span>
                    </div>

                    <p class="hero-copy">
                        I build dynamic web applications with clean interfaces,
                        secure admin dashboards, database-driven content,
                        AJAX integrations and responsive layouts.
                    </p>

                    <p class="hero-copy">
                        This portfolio demonstrates HTML5, CSS3, JavaScript,
                        PHP, MySQL, sessions, cookies, form validation and
                        full CRUD project management.
                    </p>

                    <div class="social-row">

    <a href="https://github.com/barissdev" target="_blank">
        <i class="fa-brands fa-github"></i>
    </a>

    <a href="https://www.linkedin.com/in/bar%C4%B1%C5%9F-demirok/?locale=en" target="_blank">
        <i class="fa-brands fa-linkedin-in"></i>
    </a>

    <a href="https://x.com/barissoneth" target="_blank">
        <i class="fa-brands fa-x-twitter"></i>
    </a>

    <a href="mailto:barissdemirog@gmail.com">
        <i class="fa-regular fa-envelope"></i>
    </a>

</div>



                    <div class="cta-row">
                        <a class="hero-btn" href="#projects">View Projects</a>
                        <a class="secondary-btn" href="assets/files/1barisdemirok.pdf" target="_blank">RESUME</a>
                        <a class="text-btn" href="#contact">Contact</a>
                    </div>
                </div>
            </div>

            <aside class="focus-panel">
                <p class="panel-title">Current Focus</p>

                <p>
                    Building a complete full-stack portfolio using PHP,
                    MySQL, JavaScript and AJAX.
                </p>

                <p>
                    Focused on clean UI, responsive structure, backend logic,
                    database management and secure admin tools.
                </p>

                <ul class="focus-list">
                    <li>Full Stack Web Portfolio</li>
                    <li>Dynamic project management</li>
                    <li>Contact message database</li>
                    <li>Admin dashboard system</li>
                </ul>
            </aside>
        </div>
    </div>
</section>

<section class="section" id="about">
    <div class="section-head">
        <div>
            <p class="section-label">01 / About</p>
            <h2>About</h2>
        </div>
    </div>

    <p class="about-text">
        I am a full-stack web developer focused on creating dynamic and
        responsive web applications. This portfolio is designed as a
        professional career asset and includes both client-side and
        server-side technologies. It uses semantic HTML, modern CSS,
        JavaScript DOM interaction, PHP backend logic and MySQL database
        integration.
    </p>
</section>

<section class="section tech-stack" id="skills">
    <div class="section-head stack-head">
        <div>
            <p class="section-label">02 / Stack</p>
            <h2>Tech stack</h2>

            <p>
                Tools I use to build dynamic websites, manage backend logic,
                connect databases and create interactive user experiences.
            </p>
        </div>
    </div>

    <div class="stack-grid">
        <div class="stack-group">
            <h3>Languages</h3>
            <div class="stack-tags">
                <span>HTML5</span>
                <span>CSS3</span>
                <span>JavaScript</span>
                <span>PHP</span>
                <span>SQL</span>
            </div>
        </div>

        <div class="stack-group">
            <h3>Frontend</h3>
            <div class="stack-tags">
                <span>Responsive Design</span>
                <span>Flexbox</span>
                <span>CSS Grid</span>
                <span>DOM</span>
                <span>Fetch API</span>
                <span>AJAX</span>
            </div>
        </div>

        <div class="stack-group">
            <h3>Backend</h3>
            <div class="stack-tags">
                <span>PHP</span>
                <span>MySQL</span>
                <span>PDO</span>
                <span>Sessions</span>
                <span>Cookies</span>
                <span>CRUD</span>
            </div>
        </div>

        <div class="stack-group">
            <h3>Database</h3>
            <div class="stack-tags">
                <span>MySQL Tables</span>
                <span>Contact Messages</span>
                <span>Dynamic Projects</span>
                <span>SQL Export</span>
            </div>
        </div>
    </div>
</section>

<section class="projects" id="projects">
    <div class="section-head">
        <div>
            <p class="section-label">03 / Work</p>
            <h2>Featured projects</h2>
        </div>
    </div>

    <p class="projects-intro">
        Featured full-stack projects with practical backend, database,
        interface and administrative system implementations.
    </p>

    <div id="projects-container"></div>
</section>

<section class="contact contact-final" id="contact">
    <div class="contact-head">
        <p class="section-label">Contact</p>

        <h2>Let's get in touch.</h2>

        <p>
            Whether you have a question about my work, want to chat about
            full-stack development, or just want to say hi, feel free to reach
            out using the form or the links on this page.
        </p>
    </div>

    <div class="contact-layout">
        <form id="contactForm" class="contact-form">
            <div class="form-row">
                <label>
                    <span>Name</span>
                    <input type="text" id="name" placeholder="Your name">
                </label>

                <label>
                    <span>Email</span>
                    <input type="email" id="email" placeholder="you@example.com">
                </label>
            </div>

            <label>
                <span>Subject</span>
                <input type="text" id="subject" placeholder="What should we talk about?">
            </label>

            <label>
                <span>Message</span>
                <textarea id="message" placeholder="Tell me a little about the work, the project, or the problem space."></textarea>
            </label>

            <button type="submit">Send Message</button>

            <p id="formMessage"></p>
        </form>

        <aside class="direct-channels">
            <h3>Direct channels</h3>

            <p>
               The form goes to email.
                These links are here if a direct channel is easier.
            </p>

            <ul>
                <li><a href="https://github.com/barissdev" target="_blank">GitHub: @barisdev</a></li>
                <li><a href="https://www.linkedin.com/in/bar%C4%B1%C5%9F-demirok/?locale=en" target="_blank">LinkedIn: Profile</a></li>
                <li><a href="mailto:barissdemirog@gmail.com">Email: barissdemirog@gmail.com</a></li>
            </ul>
        </aside>
    </div>
</section>

</main>

<footer class="site-footer">
    <div>
        <strong>BARIŞ DEMİROK</strong>
        <span>© 2026. All rights reserved.</span>
    </div>

    <nav>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
        <a href="https://github.com/barissdev" target="_blank">GitHub</a>
        <a href="https://www.linkedin.com/in/bar%C4%B1%C5%9F-demirok/?locale=en" target="_blank">LinkedIn</a>
        <a href="mailto:barissdemirog@gmail.com">Email</a>
    
    </nav>
</footer>

<script src="assets/js/script.js"></script>

</body>
</html>