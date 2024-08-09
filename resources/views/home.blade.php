<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Home Page</title>

</head>

<body>
    @include('partials.header')
    <div id="home" class="wrapper">
        <div id="main" class="full-screen-section">
            <div class="text-section">
                <h1 id="hello"></h1>
                <p id="description" class="under-hello"></p>
                <button class="portfolio-button">See Portfolio</button>
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
                <img src="images/top-arrow.png" alt="Top Arrow">
            </a>
        </button>
        <section class>

        </section>
    </div>

    <!-- Inline JavaScript -->
    <script>
    var button = document.getElementById('move-button');
    var originalPosition = {
        left: button.offsetLeft,
        top: button.offsetTop
    };
    var moveCount = 0;
    var maxMoves = 10;
    var buttonTexts = [
        "Can't catch me!",
        "Too slow!",
        "Try again!",
        "Almost!",
        "Not quite!",
        "Keep trying!",
        "Missed me!",
        "Getting closer!",
        "So close!",
        "Gotcha!"
    ];

    button.addEventListener('mouseover', function() {
        if (moveCount < maxMoves) {
            moveButton();
            moveCount++;
        } else {
            button.style.position = 'static'; // Reset position style
            button.style.left = originalPosition.left + 'px';
            button.style.top = originalPosition.top + 'px';
            button.textContent = "OH im stuck!!!"; // Reset text content
            button.classList.remove('unclickable');
        }
    });

    function moveButton() {
        var newX = Math.random() * (window.innerWidth - button.offsetWidth);
        var newY = Math.random() * (window.innerHeight - button.offsetHeight);
        button.style.position = 'absolute'; // Ensure the button can move freely
        button.style.left = newX + 'px';
        button.style.top = newY + 'px';
        button.textContent = buttonTexts[moveCount % buttonTexts.length]; // Change button text
        button.parentElement.href = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'; // Enable link
        button.classList.add('unclickable');
    }

    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const hidden_elements = document.querySelectorAll('.hidden')

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
                // else{
                //     entry.target.classList.remove('show')
                // }
            })
        });

        hidden_elements.forEach(el => {
            observer.observe(el);
        });
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
    <script>
    VANTA.BIRDS({
        el: "#main",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,

        color1: 0xe00ff,
        colorMode: "lerp",
        birdSize: .80,
        //   wingSpan: 16.00,
        //   speedLimit: 4.00,
        separation: 100.00,
        //   alignment: 30.00,
        //   cohesion: 73.00
    })
    </script>


    <script>
    var textArray = ["HELLO", "I AM A SOFTWARE DEVELOPER"];
    var elementArray = ["hello", "description"];
    var i = 0;
    var j = 0;
    var speed = 90;

    function typeWriter() {
        if (i < textArray[j].length) {
            document.getElementById(elementArray[j]).innerHTML += textArray[j].charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        } else if (j < textArray.length - 1) {
            i = 0;
            j++;
            setTimeout(typeWriter, speed);
        }
    }

    // Call the typeWriter function to start the typing effect
    typeWriter();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <script>
    VANTA.NET({
        el: "#socials",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xffffff,
        backgroundColor: 0xa5b1d6,
        points: 13.00,
        maxDistance: 20.00,
        spacing: 15.00
    })
    </script>
</body>

</html>