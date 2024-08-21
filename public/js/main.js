// Code for moving button
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

button.addEventListener('mouseover', function () {
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

// Intersection Observer
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const hidden_elements = document.querySelectorAll('.hidden');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    });

    hidden_elements.forEach(el => {
        observer.observe(el);
    });
});

// VANTA BIRDS animation
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
    separation: 100.00
});

// Typewriter effect
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

// VANTA NET animation
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
});


// JavaScript for Hamburger Menu Toggle
document.addEventListener('DOMContentLoaded', () => {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const mobileNav = document.querySelector('.mobile-nav');

    hamburgerMenu.addEventListener('click', () => {
        mobileNav.classList.toggle('active'); // Toggle the active class on the mobile navigation
    });
});