document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.section-hidden');

    sections.forEach((section, index) => {
        setTimeout(() => {
            section.classList.remove('section-hidden');
            section.classList.add('section-visible');
        }, index * 750); // 300ms delay between each section to create a staggered effect
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('dark-mode-toggle');
    const lightTheme = document.getElementById('light-theme');
    const darkTheme = document.getElementById('dark-theme');

    // Check localStorage or default to light theme
    let currentTheme = localStorage.getItem('theme') || 'light';
    setTheme(currentTheme);

    // Add event listener for the toggle button
    toggleButton.addEventListener('click', function () {
        currentTheme = (currentTheme === 'light') ? 'dark' : 'light';
        setTheme(currentTheme);
    });

    function setTheme(theme) {
        if (theme === 'dark') {
            darkTheme.disabled = false; // Enable dark theme
            lightTheme.disabled = true;  // Disable light theme
            toggleButton.textContent = '☀️ Light Mode';
        } else {
            darkTheme.disabled = true;  // Disable dark theme
            lightTheme.disabled = false; // Enable light theme
            toggleButton.textContent = '🌙 Dark Mode';
        }

        // Save the selected theme to localStorage
        localStorage.setItem('theme', theme);
    }
});


