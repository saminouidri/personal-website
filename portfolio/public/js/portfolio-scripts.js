document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.section-hidden');

    sections.forEach((section, index) => {
        setTimeout(() => {
            section.classList.remove('section-hidden');
            section.classList.add('section-visible');
        }, index * 750); 
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('dark-mode-toggle');
    const lightTheme = document.getElementById('light-theme');
    const darkTheme = document.getElementById('dark-theme');


    let currentTheme = localStorage.getItem('theme') || 'light';
    setTheme(currentTheme);


    toggleButton.addEventListener('click', function () {
        currentTheme = (currentTheme === 'light') ? 'dark' : 'light';
        setTheme(currentTheme);
    });

    function setTheme(theme) {
        if (theme === 'dark') {
            darkTheme.disabled = false; 
            lightTheme.disabled = true;  
            toggleButton.textContent = '☀️ Light Mode';
        } else {
            darkTheme.disabled = true;  
            lightTheme.disabled = false; 
            toggleButton.textContent = '🌙 Dark Mode';
        }


        localStorage.setItem('theme', theme);
    }
});


