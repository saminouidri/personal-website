document.addEventListener('DOMContentLoaded', () => {
    // Get all sections with the class 'section-hidden'
    const sections = document.querySelectorAll('.section-hidden');

    // Apply the fade-in animation with a slight delay for each section
    sections.forEach((section, index) => {
        setTimeout(() => {
            section.classList.remove('section-hidden');
            section.classList.add('section-visible');
        }, index * 750); // 300ms delay between each section to create a staggered effect
    });
});
