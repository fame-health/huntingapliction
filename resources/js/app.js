import './bootstrap';
  
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            const mobileNav = document.getElementById('mobile-nav');
            mobileNav.classList.toggle('hidden');
            mobileNav.classList.toggle('animate-slide-in');
        });

