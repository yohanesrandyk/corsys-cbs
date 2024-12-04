tsParticles.load("particles-js", {
    fullScreen: {
        enable: true,
        zIndex: 0 // Background particles z-index
    },
    background: {
        color: {
            value: "#010a1a" // Dark blue base for contrast
        },
        image: "linear-gradient(to bottom, #1a3d5d, #0b2a3a, #1f2a47)" // Gradient with multiple colors
    },
    particles: {
        number: {
            value: 60, // Number of particles
            density: {
                enable: true,
                area: 800
            }
        },
        color: {
            value: ["#E6C785", "#C0C0C0", "#D6CFB2", "#B8C5CB"] // Particle colors
        },
        shape: {
            type: "circle"
        },
        opacity: {
            value: 0.7
        },
        size: {
            value: {
                min: 3,
                max: 7
            }
        },
        links: {
            enable: true,
            distance: 130,
            color: "#808080",
            opacity: 0.4,
            width: 1
        },
        move: {
            enable: true,
            speed: 2.5, // Particle speed
            direction: "none",
            random: false,
            straight: false,
            outModes: "out"
        }
    },
    interactivity: {
        events: {
            onHover: {
                enable: true,
                mode: "grab"
            },
            onClick: {
                enable: true,
                mode: "push"
            }
        },
        modes: {
            grab: {
                distance: 140,
                links: {
                    opacity: 1
                }
            },
            push: {
                quantity: 4
            }
        }
    }
});

function togglePassword() {
    const passwordField = document.getElementById('password');
    const toggleIcon = document.getElementById('toggle-icon');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}