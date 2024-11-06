export const initObserver = () => {
    const sections = document.querySelectorAll('.flag'); 
    if (sections.length) {
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.2
        };

        sections.forEach(section => {
            const spin = section.querySelector('.wheel');

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        spin.classList.add('spin'); 
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            observer.observe(section);
        });
    }

};