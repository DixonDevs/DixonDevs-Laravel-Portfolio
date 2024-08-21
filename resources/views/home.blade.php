<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Home Page</title>
    @include('partials.header')
</head>

<body>
    <div id="home" class="wrapper">
        <div id="main" class="full-screen-section">
            <div class="text-section">
                <h1 id="hello"></h1>
                <p id="description" class="under-hello"></p>
                <button id="move-button" class="portfolio-button">See Portfolio</button>
            </div>
            <div class="socials-content-wrapper">
                <div class="social-links-hero">
                    <a href="https://github.com/DixonDevs" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.facebook.com/daniel.dixon.58511" class="icon"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/daniel-dixon-312147209/" class="icon"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://discordapp.com/channels/@me/iceddapper/" class="icon"><i
                            class="fa-brands fa-discord"></i></a>
                    <a href="https://www.youtube.com/@DesignsByDixon" class="icon"><i
                            class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <button class="back-to-top">
            <a href="#home">
                <img src="/images/top-arrow.png" alt="Top Arrow">
            </a>
        </button>
        <section class="projects_sec">
            <div id="about" class="about-section">
                <h2>About Me</h2>
                <p class="about-text">
        </section>
    </div>

    <!-- External Libraries -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>