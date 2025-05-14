document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    }, {
        threshold: 0.05,
        rootMargin: "0px 0px -10% 0px"
    });

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
});
