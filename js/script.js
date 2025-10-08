AOS.init({
    duration: 1000,
    once: true
});

const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

const toTopBtn = document.getElementById("toTopBtn");
window.addEventListener("scroll", () => {
    const header = document.getElementById('header'); console.log(window.scrollY);
    if (window.scrollY > 50) {
      header.classList.remove('bg-blue-900', 'text-white');
      header.classList.add('bg-white', 'text-gray-900', 'shadow-md');
    } else {
      header.classList.remove('bg-white', 'text-gray-900', 'shadow-md');
      header.classList.add('bg-blue-900', 'text-white');
    }
    
    if (window.scrollY > 400) {
        toTopBtn.classList.remove("hidden");
        toTopBtn.classList.add("show");
    } else {
        toTopBtn.classList.remove("show");
        setTimeout(() => toTopBtn.classList.add("hidden"), 300);
    }
});
toTopBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

// --- Banner Slider ---
let currentSlide = 0;
const slides = document.querySelectorAll('#bannerSlider .slide');
const dots = document.querySelectorAll('#bannerSlider .dot');
const totalSlides = slides.length;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('opacity-100', 'active');
        slide.classList.add('opacity-0');
        dots[i].classList.remove('bg-white');
        dots[i].classList.add('bg-white/60');
    });
    slides[index].classList.remove('opacity-0');
    slides[index].classList.add('opacity-100', 'active');
    dots[index].classList.remove('bg-white/60');
    dots[index].classList.add('bg-white');
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
}

// Tombol navigasi
document.getElementById('nextBtn').addEventListener('click', nextSlide);
document.getElementById('prevBtn').addEventListener('click', prevSlide);

// Auto play setiap 4 detik
setInterval(nextSlide, 4000);