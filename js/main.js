const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');
const header = document.getElementById('header');


hamburger.addEventListener('click', () => {
nav.classList.toggle('open');
});


window.addEventListener('scroll', () => {
if (window.scrollY > 10) {
header.classList.add('scrolled');
} else {
header.classList.remove('scrolled');
}
});
// Ajustar padding do body dinamicamente conforme altura do header
function ajustarPadding() {
const headerHeight = header.offsetHeight;
document.body.style.paddingTop = headerHeight + 'px';
}


window.addEventListener('resize', ajustarPadding);
window.addEventListener('load', ajustarPadding);
ajustarPadding();