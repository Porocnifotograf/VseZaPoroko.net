(async function () {
    const container = document.querySelector('[data-pricing-table]');
    if (!container) return;

    try {
        const response = await fetch('/api/pricing.php');
        if (!response.ok) return;
        const data = await response.json();
        const seasonal = data.seasonalMultipliers || {};
        const season = container.dataset.season || 'summer';
        const multiplier = seasonal[season] || 1;
        const tbody = container.querySelector('tbody');
        tbody.innerHTML = '';

        Object.entries(data.base).forEach(([key, value]) => {
            const tr = document.createElement('tr');
            const label = key.replace(/_/g, ' ');
            tr.innerHTML = `<th>${label}</th><td>${Math.round(value * multiplier)} €</td>`;
            tbody.appendChild(tr);
        });

        const packageList = container.nextElementSibling;
        if (packageList && data.packages) {
            packageList.innerHTML = data.packages.map((pkg) => {
                return `<li><strong>${pkg.name}</strong> — ${pkg.price} €<br><small>${pkg.includes.join(', ')}</small></li>`;
            }).join('');
        }
    } catch (error) {
        console.error('Pricing error', error);
    }
})();
