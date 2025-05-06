<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Firomsa Assefa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Lora&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <header>
        <a class="logo-link" href="#hero-section">
            <img class="logo" src="images/logo.png" />
        </a>
        <nav>
            <a href="#about-section">About Me</a>
            <a href="#education-section">Education</a>
            <a href="#projects-section">Projects</a>
            <a href="#contact-section">Contact</a>
        </nav>
    </header>
    <main class="container">
        <section id="hero-section">
            <div class="hero-container">
                <div class="left">
                    <p>Hi, my name is</p>
                    <h1 class="name">Firomsa.</h1>
                    <h1 class="role">I am a software developer</h1>
                    <p>A passionate developer. I tend to make use of modern technologies to build softwares that bring satisfaction for customers.</p>
                    <a href="https://t.me/circa1919" class="contact-me">Contact me</a>
                </div>
                <img class="profile" src="https://picsum.photos/600/400" alt="" />
            </div>
        </section>
        <section id="about-section">
            <h1 class="section-heading">About Me</h1>
            <div class="about-container">
                <img class="profile2" src="https://picsum.photos/400/400" alt="" />
                <div class="description">
                    <p>Hi there! I'm Firomsa Assefa, a Computer Science and Engineering student at Adama Science and Technology University in Ethiopia.Love creating impactfull tech solutions to real world preblems, I love collaborating with like-minded individuals and contributing to meaningful projects.</p>

                    <p>Here are a few technologies I've been working with recently:</p>
                    <div class="skill-list">
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>Python</li>
                            <li>Java</li>
                            <li>SpringBoot</li>
                        </ul>
                        <ul>
                            <li>React</li>
                            <li>HTMX</li>
                            <li>Git</li>
                            <li>Github</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="education-section">
            <h1 class="section-heading">Education</h1>
            <div class="education-container">
                <div class="education">
                    <div class="education_decription">
                        <h3 class="edu-title">Bachelor of Computer Science and Engineering</h3>
                        <a href="https://www.astu.edu.et/" class="edu-place">Adama Science and Technology University. Adama, Ethiopia</a>
                        <h4 class="edu-duration">2019 - 2023</h4>
                        <p class="edu-disc">I pursued my Bachelor's degree in Computer Science and Engineering at Adama Science and Technology University. During my studies, I gained a strong foundation in software development, algorithms, and system design. I also worked on various projects that enhanced my problem-solving and teamwork skills.</p>
                    </div>
                    <img class="edu-image" src="images/astu_logo.svg" alt="Adama Science and Technology University Logo" />
                </div>
                <div class="education">
                    <div class="education_decription">
                        <h3 class="edu-title">High School</h3>
                        <a href="#" class="edu-place">Saden Adea Secondary School. Bishoftu, Ethiopia</a>
                        <h4 class="edu-duration">2015 - 2019</h4>
                        <p class="edu-disc">I completed my high school education at Saden Adea Secondary School in Bishoftu, Ethiopia. During this time, I developed a strong interest in technology and problem-solving, which laid the foundation for my journey into software development.</p>
                    </div>
                    <img class="edu-image" src="https://picsum.photos/400/400" alt="" />
                </div>
            </div>
        </section>
        <section id="projects-section">
            <h1 class="section-heading">Projects</h1>
            <div class="projects-container">
                <div class="project">
                    <img src="images/image2.png" alt="Pacman Game Screenshot" />

                    <div class="project-body">
                        <div class="tags">
                            <span class="tag">Java</span>
                            <span class="tag">Swing</span>
                        </div>

                        <div class="project-title">Pacman Game</div>
                        <div class="project-desc">
                            A simple java based Pacman clone built using the swing ui library. The game features keyboard controls, and interactive ghost movement logic.
                        </div>
                    </div>

                    <div class="project-footer">
                        <div class="social-icons">
                            <a href="https://github.com/firo1919/Pacman"><i class="fab fa-github"></i></a>
                        </div>
                        <a href="https://github.com/firo1919/Pacman" target="_blank">
                            <button class="demo-button">Demo</button>
                        </a>
                    </div>
                </div>
                <div class="project">
                    <img src="images/image.png" alt="Cafe Website Screenshot" />

                    <div class="project-body">
                        <div class="tags">
                            <span class="tag">HTML</span>
                            <span class="tag">CSS</span>
                            <span class="tag">React</span>
                        </div>

                        <div class="project-title">Cafe Website Template</div>
                        <div class="project-desc">
                            A clean and elegant cafe or restaurant website template built using react. It includes a modern layout, responsive design, and smooth navigation features perfect for showcasing a local eatery.
                        </div>
                    </div>

                    <div class="project-footer">
                        <div class="social-icons">
                            <a href="https://github.com/firo1919/Cafe-Website-Template"><i class="fab fa-github"></i></a>
                        </div>
                        <a href="https://foodbox-eight.vercel.app/" target="_blank">
                            <button class="demo-button">Demo</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-section">
            <h1 class="section-heading">Contact me</h1>
            <form action="submit_contact.php" method="post" class="contact-container">
                <div class="input-group">
                    <input type="text" name="name" placeholder="Your Name" required />
                    <input type="email" name="email" placeholder="Your Email" required />
                </div>
                <div class="input-group">
                    <input type="text" name="phone" placeholder="Your Phone" />
                    <input type="text" name="location" placeholder="Your Location" />
                </div>
                <div class="input-group">
                    <textarea name="message" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <h2>Firomsa.</h2>
                <p>A passionate software developer building impactful tech solutions.</p>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h4>Connect</h4>
                <div class="social-icons">
                    <a href="https://github.com/firo1919" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/firomsa-assefa/" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="mailto:firomsassf@gmail.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Firomsa Assefa. All rights reserved.</p>
        </div>
    </footer>

</body>
<script src="script.js"></script>

</html>