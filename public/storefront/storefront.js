(() => {
    'use strict';
    const menuButton = document.querySelector('.menu-toggle');
    const menu = document.querySelector('#mobile-navigation');
    const closeMenu = () => {
        if (!menuButton || !menu) return;
        menu.hidden = true;
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Buka menu navigasi');
    };
    menuButton?.addEventListener('click', () => {
        const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
        menu.hidden = isOpen;
        menuButton.setAttribute('aria-expanded', String(!isOpen));
        menuButton.setAttribute('aria-label', isOpen ? 'Buka menu navigasi' : 'Tutup menu navigasi');
    });
    menu?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
    document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && menu && !menu.hidden) {
            closeMenu();
            menuButton.focus();
        }
    });
    document.addEventListener('click', event => {
        if (menu && !menu.hidden && !event.target.closest('.site-header')) closeMenu();
    });
    window.matchMedia('(min-width: 851px)').addEventListener('change', event => {
        if (event.matches) closeMenu();
    });

    const search = document.querySelector('#catalog-search');
    const grid = document.querySelector('.product-grid');
    if (search && grid) {
        const cards = [...grid.querySelectorAll('.product-card')];
        const filters = [...document.querySelectorAll('.filter-chip')];
        const clearButton = document.querySelector('.clear-search');
        const empty = document.querySelector('#catalog-empty');
        const count = document.querySelector('#catalog-count');
        let category = 'semua';
        const initialSearch = search.value.trim();
        const filterCatalog = () => {
            const query = search.value.trim().toLocaleLowerCase('id-ID');
            let matches = 0;
            cards.forEach(card => {
                const visible = card.dataset.name.includes(query) && (category === 'semua' || card.dataset.category === category);
                card.hidden = !visible;
                if (visible) matches++;
            });
            count.textContent = matches + ' aplikasi ' + (query || category !== 'semua' ? 'ditemukan' : 'untuk kamu');
            empty.hidden = matches > 0;
            clearButton.hidden = !search.value;
            filters.forEach(button => {
                const active = button.dataset.category === category;
                button.classList.toggle('is-active', active);
                button.setAttribute('aria-pressed', String(active));
            });
        };
        search.addEventListener('input', filterCatalog);
        search.form.addEventListener('submit', event => {
            // Query baru setelah pencarian server mengambil hasil lengkap.
            if (grid.dataset.serverSearch === 'true' && search.value.trim() !== initialSearch) return;
            event.preventDefault();
            filterCatalog();
        });
        filters.forEach(button => button.addEventListener('click', () => {
            category = button.dataset.category;
            filterCatalog();
        }));
        const resetCatalog = event => {
            if (grid.dataset.serverSearch === 'true') {
                window.location.assign(search.form.action);
                return;
            }
            event?.preventDefault();
            search.value = '';
            category = 'semua';
            filterCatalog();
            search.focus({ preventScroll: true });
        };
        clearButton.addEventListener('click', resetCatalog);
        document.querySelector('[data-reset-catalog]')?.addEventListener('click', resetCatalog);
        filterCatalog();
    }

    const updateOrder = input => {
        document.querySelectorAll('[data-selected-label]').forEach(node => { node.textContent = input.dataset.label; });
        document.querySelectorAll('[data-selected-price]').forEach(node => { node.textContent = input.dataset.price; });
        document.querySelectorAll('[data-order-link]').forEach(link => {
            if (input.dataset.url) link.href = input.dataset.url;
        });
    };
    document.querySelectorAll('input[name="plan"]').forEach(input => {
        input.addEventListener('change', () => {
            if (input.checked) updateOrder(input);
        });
    });
    window.addEventListener('pageshow', () => {
        const selected = document.querySelector('input[name="plan"]:checked');
        if (selected) updateOrder(selected);
    });
    document.querySelectorAll('[data-logo]').forEach(img => {
        const fallback = () => {
            img.hidden = true;
            if (img.nextElementSibling) img.nextElementSibling.hidden = false;
        };
        img.addEventListener('error', fallback);
        if (img.complete && !img.naturalWidth) fallback();
    });
})();
