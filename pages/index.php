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
                <a class="nav-link" href="#contact" onclick="showSection('work')">Projects</a>
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
                    <h2>Alon Ben David</h2>

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
                <div class="experienceBtns">

                    <h3>Working Experience</h3>
                    <a id="M-plateforme" class="nav-link" href="#home" onclick="showExperience('plateforme')">La Plateforme</a>
                    <a id="M-poolstar" class="nav-link" href="#home" onclick="showExperience('poolstar')">PoolStar</a>
                    <a id="M-level" class="nav-link" href="#home" onclick="showExperience('plateforme')">Level</a>
                    <a id="M-taga" class="nav-link" href="#home" onclick="showExperience('plateforme')">Taga</a>
                    <a id="M-ron" class="nav-link" href="#home" onclick="showExperience('plateforme')">Ron Arad Studio</a>


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

                    <h3>Alon Ben David</h3>

                    <p>Lorem ipsum dolo rerum perferendis quae quia cupiditate, rem error impedit, voluptatibus velit atque tempora officia laboriosam, quis sequi culpa. Laboriosam cumque vero est.
                    </p>
                </div>
                <div id="level" class="experience direction">

                    <h3>Alon Ben David</h3>

                    <p>Lorem ipsum rum perferendis quae quia cupiditate, rem error impedit, voluptatibus velit atque tempora officia laboriosam, quis sequi culpa. Laboriosam cumque vero est.
                    </p>
                </div>
            </div>
            <div id="work" class="section fade-in-text content">
                <!-- <h2>info</h2> -->
                <h3>info 2</h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto odio ab hic libero nobis voluptatem excepturi ad. Laborum expedita cupiditate rem dolorem dolorum cumque, quod harum provident? Dolores provident tempora iste. Eum nemo sed illo possimus nobis officiis deserunt labore inventore quas vitae accusantium ipsam, non quo cupiditate alias blanditiis consectetur molestias et autem aut nostrum ab culpa. Facere, minima, ex architecto quia enim totam perferendis laudantium recusandae tempore consequatur sed atque maiores id aspernatur maxime quidem vero. Sequi eius aut quis quam soluta veritatis dicta, veniam at suscipit, adipisci expedita pariatur ut id accusantium reprehenderit sed cumque quibusdam? Alias?
                </p>
            </div>
            <div id="contact" class="section fade-in-text content">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto odio ab hic libero nobis voluptatem excepturi ad. Laborum expedita cupiditate rem dolorem dolorum cumque, quod harum provident? Dolores provident tempora iste. Eum nemo sed illo possimus nobis officiis deserunt labore inventore quas vitae accusantium ipsam, non quo cupiditate alias blanditiis consectetur molestias et autem aut nostrum ab culpa. Facere, minima, ex architecto quia enim totam perferendis laudantium recusandae tempore consequatur sed atque maiores id aspernatur maxime quidem vero. Sequi eius aut quis quam soluta veritatis dicta, veniam at suscipit, adipisci expedita pariatur ut id accusantium reprehenderit sed cumque quibusdam? Alias?
                </p>
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