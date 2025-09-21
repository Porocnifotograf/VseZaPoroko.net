(function () {
    const serviceCards = document.querySelectorAll('[data-service-segment]');
    serviceCards.forEach((card) => {
        card.addEventListener('click', () => {
            const segment = card.getAttribute('data-service-segment');
            if (!segment) return;
            const history = JSON.parse(localStorage.getItem('ct-segments') || '[]');
            if (!history.includes(segment)) {
                history.push(segment);
            }
            localStorage.setItem('ct-segments', JSON.stringify(history));
        });
    });
})();
