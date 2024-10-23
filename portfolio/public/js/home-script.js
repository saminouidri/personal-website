document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('style-toggle-btn');
    const lightTheme = document.getElementById('modern-theme');  // Assuming id="light-theme" for light CSS
    const alternateTheme = document.getElementById('fun-theme'); // Assuming id="alternate-theme" for alternate CSS

    // Check localStorage or default to light theme
    let currentTheme = localStorage.getItem('theme') || 'light';
    setTheme(currentTheme);

    // Add event listener for the toggle button
    toggleButton.addEventListener('click', function () {
        currentTheme = (currentTheme === 'light') ? 'alternate' : 'light';
        setTheme(currentTheme);
    });

    function setTheme(theme) {
        if (theme === 'alternate') {
            alternateTheme.disabled = false;  // Enable alternate theme
            lightTheme.disabled = true;       // Disable light theme
            toggleButton.textContent = '☀️ Switch to Modern Mode'; // Change button text
        } else {
            alternateTheme.disabled = true;   // Disable alternate theme
            lightTheme.disabled = false;      // Enable light theme
            toggleButton.textContent = '🌙 Switch to Fun Style'; // Change button text
        }

        // Save the selected theme to localStorage
        localStorage.setItem('theme', theme);
    }
});
