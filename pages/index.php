<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perso site</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://kit.fontawesome.com/e861973d30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>

</head>

<body>
    <!-- <img class="background" src="../media/backgroundA.png" alt=""> -->
    <header>
        <nav>
            <img class="logo" src="https://img.logoipsum.com/290.svg" alt="logo">
            <ul class="bigScreen">


                <a class="nav-link" href="#home" onclick="showSection('about')">About</a>
                <a class="nav-link" href="#about" onclick="showSection('experience')">Experience</a>
                <a class="nav-link" href="#contact" onclick="showSection('projects')">Projects</a>
                <a class="nav-link" href="#contact" onclick="showSection('contact')">Contact</a>

            </ul>
        </nav>

    </header>
    <main>
        <section>


            <div id="about" class="section fade-in-text content">
                <img class="profilePic" src="../media/profilePic.png" alt="">
                <div class="about">
                    <h1>Hi, my name is</h1>
                    <h2> <span class="blue">Alon</span> Ben David</h2>

                    <p>As a junior web developer, I am well-versed in HTML,
                        CSS, and PHP,
                        and have experience using JavaScript
                        for front-end development. My background in
                        industrial design has taught me the importance of
                        user experience and I am dedicated to creating
                        visually pleasing and user-friendly websites.
                        I am always eager to learn and improve my skills,
                        and am excited to continue growing as a developer
                        in a professional setting.
                    </p>
                </div>
            </div>
            <div id="experience" class="section fade-in-text content">
                <video class="video" loop muted src="..\media\file.mp4"></video>
                <div class="experienceBtns">

                    <h3 class="orange">Working Experience</h3>
                    <a id="M-plateforme" class="nav-link" href="#home" onclick="showExperience('plateforme')">La Plateforme</a>
                    <a id="M-poolstar" class="nav-link" href="#home" onclick="showExperience('poolstar')">PoolStar</a>
                    <a id="M-level" class="nav-link" href="#home" onclick="showExperience('level')">Level</a>
                    <a id="M-taga" class="nav-link" href="#home" onclick="showExperience('taga')">Taga</a>
                    <a id="M-ron" class="nav-link" href="#home" onclick="showExperience('ron')">Ron Arad Studio</a>


                </div>
                <hr width="1px" size="1">
                <div id="plateforme" class="experience direction">

                    <h3>STARTER DE LA PLATEFORME "START", 2022</h3>
                    <p>
                        Initiation au hardware, système et au développement web
                        Spécialisation en développement web full stack
                        Langages: HTML, CSS,, PHP, Python

                    </p>
                </div>
                <div id="poolstar" class="experience direction">
                    <h2>Concepteur et Designer Industriel</h2>
                    <h3>POOLSTAR, CDD 6 MOIS 2021/2022</h3>

                    <li>Identification d'opportunités pour innover dans de nouveaux produits</li>
                    <li>R&D sur des produits nautiques</li>
                    <li>Design et animations 3D</li>
                    <li>Coordination avec les Ingénieurs</li>

                </div>
                <div id="level" class="experience direction">
                    <h2>Designer industriel</h2>
                    <h3>LEVEL, 2020 (FÉVRIER - SEPTEMBRE)</h3>
                    <li> Design d'un foil board électrique stable</li>
                    <li> R&D de concepts (design et ingénierie)</li>
                    <li>Conception et fabrication de composites</li>
                    <li>Graphisme (logo et marque)</li>
                </div>

            </div>
            <div id="projects" class="section fade-in-text content">
                <div class="project">
                    <h3><span class="blue">1</span>. Stay App Store</h3>
                    <p>Developed a web store site using HTML and CSS. Project aimed at learning the basics of front-end development and was a parody of a real web application.</p>
                    <div class="img-container">
                        <a href="https://ben-david-alon.students-laplateforme.io/App%20Favorites/index.html"> <img class="img-content" src="../media/stay-app.JPG" alt="your-image-description"> </a>
                    </div>
                </div>
                <div class="project">
                    <h3><span class="blue">2</span>. Réservation de salles</h3>
                    <p>Developed a room reservation web site using PHP and a database. Site enables room reservation for events and data management, as well for user mangement. </p>
                    <div class="img-container">
                        <a href="https://ben-david-alon.students-laplateforme.io/reservation-salles/pages/index.php"> <img class="img-content" src="../media/Réservation de salles.JPG" alt="your-image-description"> </a>
                    </div>
                </div>
                <div class="project">
                    <h3><span class="blue">3</span>. Autocompletion</h3>
                    <p>Developed a PHP/JavaScript search engine for data fetching and presentation. First JavaScript project, honing skills in server-side and client-side</p>
                    <div class="img-container">
                        <a href="https://ben-david-alon.students-laplateforme.io/Autocompletion"> <img class="img-content" src="../media/autocompletion.JPG" alt="your-image-description"> </a>
                    </div>
                </div>
                <div class="project">
                    <h3><span class="blue">4</span>. livre-or</h3>
                    <p>Developed a PHP/JavaScript search engine for data fetching and presentation. First JavaScript project, honing skills in server-side and client-side</p>
                    <div class="img-container">
                        <a href="https://ben-david-alon.students-laplateforme.io/livre-or/pages/connexion.php"> <img class="img-content" src="../media/livre-or.JPG" alt="your-image-description"> </a>
                    </div>
                </div>
                <div class="project">
                    <h3><span class="blue">5</span>. wordpress project</h3>
                    <p>Developed a PHP/JavaScript search engine for data fetching and presentation. First JavaScript project, honing skills in server-side and client-side</p>
                    <div class="img-container">
                        <a href="https://ben-david-alon.students-laplateforme.io/myCMS/"> <img class="img-content" src="../media/wordpress.JPG" alt="your-image-description"> </a>
                    </div>
                </div>
            </div>

            <!-- ../media/stay-app.JPG -->
            </div>
            <div id="contact" class="section fade-in-text content">
                <!-- <div class="gif"><iframe src="https://giphy.com/embed/l4FGI8GoTL7N4DsyI" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div> -->
                <h2>Contact Me <span class="blue">.</span></h2>
                <h3>Junior Web Developer Seeking Alternance Opportunity</h3>

                <p>I am a Junior Web Developer seeking an alternance starting in March. While I am still in the process of building my technical skills, I bring with me a strong eye for design and a passion for creating visually appealing websites. I am eager to continue learning and growing in the field, and I am confident that I can make meaningful contributions to your team through my design abilities and strong work ethic. If you have an alternance opportunity available, I would love the chance to discuss it further. Thank you for considering my application.</p>
            </div>

        </section>
    </main>
    <div class="icons">
        <a class="icon fa-brands fa-github fa-2x" href="https://github.com/alon-bendavid"></a>
        <a class="icon fa-brands fa-linkedin fa-2x" href="https://www.linkedin.com/in/alon-ben-56739119b/"></a>
        <hr width="100%" size="1">
    </div>
</body>

</html>