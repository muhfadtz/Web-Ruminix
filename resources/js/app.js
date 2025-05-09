import './bootstrap';
import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';


  document.addEventListener('DOMContentLoaded', () => {
    const searchToggle = document.querySelector('[data-toggle="search"]');
    const searchBar = document.getElementById('searchBar');
    const mainContent = document.getElementById('mainContent');
  
    searchToggle.addEventListener('click', () => {
      const isHidden = searchBar.classList.contains('hidden');
  
      if (isHidden) {
        searchBar.classList.remove('hidden');
        mainContent.classList.add('mt-20'); // Tambah jarak
      } else {
        searchBar.classList.add('hidden');
        mainContent.classList.remove('mt-20'); // Hapus jarak
      }
    });
  });
    
document.addEventListener('DOMContentLoaded', () => {
    // --- Swiper Init ---
    const swiper = new Swiper(".hero-swiper", {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    // --- Navbar Scroll Behavior ---
    const navbar = document.getElementById('mainNavbar');
    const searchBar = document.getElementById('searchBar');
    let isFull = false;
    
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;

        if (scrollY > 30 && !isFull) {
            isFull = true;
            navbar.classList.add('full-navbar');
        } else if (scrollY <= 30 && isFull) {
            isFull = false;
            navbar.classList.remove('full-navbar');
        }
    });
    });
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.cart-item').forEach(item => {
          const increaseBtn = item.querySelector('.increase');
          const decreaseBtn = item.querySelector('.decrease');
          const quantitySpan = item.querySelector('.quantity');
      
          if (increaseBtn && decreaseBtn && quantitySpan) {
            increaseBtn.addEventListener('click', () => {
              let qty = parseInt(quantitySpan.textContent);
              quantitySpan.textContent = qty + 1;
            });
      
            decreaseBtn.addEventListener('click', () => {
              let qty = parseInt(quantitySpan.textContent);
              if (qty > 1) {
                quantitySpan.textContent = qty - 1;
              }
            });
          }
        });
    });