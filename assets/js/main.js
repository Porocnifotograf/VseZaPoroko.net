(function () {
    const navToggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('.primary-nav');
    if (navToggle && nav) {
        navToggle.addEventListener('click', () => {
            const expanded = navToggle.getAttribute('aria-expanded') === 'true';
            navToggle.setAttribute('aria-expanded', String(!expanded));
            nav.classList.toggle('open');
        });
    }

    const langSwitcher = document.querySelector('.language-switcher');
    if (langSwitcher) {
        const toggle = langSwitcher.querySelector('.language-toggle');
        toggle?.addEventListener('click', () => {
            langSwitcher.classList.toggle('open');
        });
        document.addEventListener('click', (event) => {
            if (!langSwitcher.contains(event.target)) {
                langSwitcher.classList.remove('open');
            }
        });
    }

    const ensureDarkStyles = () => {
        if (document.querySelector('link[data-dark-mode]')) return;
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = '/assets/css/dark-mode.css';
        link.dataset.darkMode = 'true';
        document.head.appendChild(link);
    };

    const darkToggle = document.createElement('button');
    darkToggle.type = 'button';
    darkToggle.className = 'dark-mode-toggle';
    darkToggle.textContent = '✨ Dark mode';
    darkToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('ct-theme', 'dark');
            ensureDarkStyles();
        } else {
            localStorage.setItem('ct-theme', 'light');
        }
    });
    document.body.appendChild(darkToggle);

    const storedTheme = localStorage.getItem('ct-theme');
    if (storedTheme === 'dark') {
        document.body.classList.add('dark-mode');
        ensureDarkStyles();
    }
})();
