<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Home Page</title>

</head>
<body>
@include('partials.header')
<div id="home" class="wrapper">
    <div id="main" class="full-screen-section">
    <h1 id="hello"></h1>
    <p id="description" class="under-hello"></p>
        <button class="portfolio-button">See Portfolio</button>
    </div>
<button class="back-to-top">
    <a href="#home">
        <img src="images/top-arrow.png" alt="Top Arrow">
    </a>
</button>
    <div id="about" class="full-screen-section-2">
        <div class="content-wrapper-2">
            <img class="daniel-image" src="images/8bit image of Daniel.jpg" alt="8-bit Character of Daniel Dixon" width="600" height="650">
            <div class="about-me">
            <strong class="about-me-top">About Me</strong>
            <h1 class="about-me-middle"><strong>I am a Full Stack Developer/Business Owner</strong></h1>
            <p>From a young age, I was drawn to technology, dreaming of the day I would have my own computer. When that day finally arrived, I was initially fascinated by playing Minecraft, spending countless hours navigating its blocky landscapes. However, beyond the gameplay, my curiosity about the game's mechanics sparked my interest in coding and programming. This fascination evolved into a passion for software development, leading me to become a full-stack web developer captivated by the intricacies of the field.</p>

            <p>To get my foot in the door of web development, I started DBD Branding Co LLC, a company dedicated to producing quality websites at an affordable price. This venture allowed me to gain valuable experience and transition into real development, transforming my early interest in technology into a continuous pursuit of knowledge and growth in the ever-evolving tech landscape.</p>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-2">
    <div class="full-screen-section-3">
        <div class="content-wrapper-3">
            <div class="experience">
                <strong class="experience-title">Experience</strong>
                <h1 class="experience-1, hidden">AceOne Technologies</h1>
                <p class="hidden">Full Stack Developer / October 2023 - Present</p>
                <ul>
                    <li class="hidden">Manage multiple WordPress sites, ensuring smooth operation and implementing customizations as per client requirements.</li>
                    <li class="hidden">Maintain and develope web software using Laravel, utilizing PHP, HTML, CSS, and JavaScript to create robust and efficient applications
                        while adhearing to best practice.</li>
                    <li class="hidden">Conduct regular maintenance and updates to ensure security and performance optimization of websites and web applications.</li>
                </ul>
                <h1 class="experience-1, hidden">DBD Branding Co. LLC</h1>
                <p class="hidden">Owner/ Wordpress Developer / November 2022 - Present</p>
                <ul>
                    <li class="hidden">Create and Design several Websites using Wordpress CMS</li>
                    <li class="hidden">Create and implement custom plugins and themes to meet client requirements and enhance website functionality.</li>
                    <li class="hidden">Provide ongoing support and maintenance to ensure optimal performance and security of websites.</li>
                    <li class="hidden">Web Hosting and Email hosting provider.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="socials">
    <div id="contact" class="full-screen-section-4">
        <div class="content-wrapper-4">
            <div class="contact">
                <h1 class="socials">Contact Me!</h1>
                <p>Want to get in touch? I am always down to talk to new people! Please reach out on any of the following:</p>
                <div class="social-links">
                    <a href="https://github.com/DixonDevs"><img src="images/github-mark-white.png" alt="GitHub"></a>
                    <a href="https://www.facebook.com/daniel.dixon.58511"><img src="images/Facebook_Logo_Secondary.png" alt="Facebook"></a>
                    <a href="https://www.linkedin.com/in/daniel-dixon-312147209/"><img src="images/In-Blue-128.png" alt="LinkedIn"></a>
                    <a href="https://discordapp.com/channels/@me/iceddapper/"><img src="images/discord-mark-blue.svg" alt="Discord"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inline JavaScript -->
<script>
    var button = document.getElementById('move-button');
    var originalPosition = { left: button.offsetLeft, top: button.offsetTop };
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
        if(entry.isIntersecting){
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
  backgroundColor: 0xa5b1d6,
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
