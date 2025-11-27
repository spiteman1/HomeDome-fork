document.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.getElementById('top-search-button');
    const searchInput = document.getElementById('top-search-input');

    if (!searchBtn || !searchInput) return;

    searchBtn.addEventListener('click', () => {
        const query = searchInput.value.trim();
        if (!query) return;

        window.location.href = `/search?query=${encodeURIComponent(query)}`;
    });
});
