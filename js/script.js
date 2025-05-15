//Toggling Menu
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId);
    const nav = document.getElementById(navId);

    if(toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('show');
        })
    }
}

showMenu('nav-toggle', 'nav-menu');

//Toggling Active Link
const navLink = document.querySelectorAll('.nav-link');

function linkAction() {
    navLink.forEach(n => n.classList.remove('active'));
    this.classList.add('active');

    const navMenu = document.getElementById('nav-menu');
    navMenu.classList.remove('show');
}

navLink.forEach(n => n.addEventListener('click', linkAction));

// Scroll Reveal

const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
})

sr.reveal('.home-title', {} )
sr.reveal('.button', {delay: 200} )
sr.reveal('.home-img', {delay: 400} )

sr.reveal('.about-subtitle', {delay: 200} )
sr.reveal('.about-text', {delay: 400} )

sr.reveal('.contact-input', {interval: 200} )


document.querySelector('.contact-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    fetch('contact_process.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        const container = document.querySelector('.contact-container');
        const existingResponse = document.querySelector('.form-response');
        if (existingResponse) existingResponse.remove();

        const message = document.createElement('div');
        message.className = 'form-response';
        message.innerHTML = data;
        container.appendChild(message);

        // Optionally clear form
        if (data.includes('Thanks for contacting us')) {
            form.reset();
        }
    })
    .catch(error => {
        console.error('Error submitting form:', error);
    });
});

