document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('style-toggle-btn');
    const lightTheme = document.getElementById('modern-theme'); 
    const alternateTheme = document.getElementById('fun-theme'); 


    let currentTheme = localStorage.getItem('theme') || 'alternate';
    setTheme(currentTheme);


    toggleButton.addEventListener('click', function () {
        currentTheme = (currentTheme === 'alternate') ? 'light' : 'alternate';
        setTheme(currentTheme);
    });

    function setTheme(theme) {
        if (theme === 'alternate') {
            alternateTheme.disabled = false; 
            lightTheme.disabled = true;     
            toggleButton.textContent = '🤖 Switch to Modern UI'; 
        } else {
            alternateTheme.disabled = true;   
            lightTheme.disabled = false;      
            toggleButton.textContent = '👾 Make the front-end fun'; 
        }

 
        localStorage.setItem('theme', theme);
    }
});
