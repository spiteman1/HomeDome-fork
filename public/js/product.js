// Tab switching
function openTab(tabName) {
    const tabContents = document.getElementsByClassName('tab-content');
    const tabs = document.getElementsByClassName('tab');

    for (let content of tabContents) {
        content.classList.remove('active');
    }

    for (let tab of tabs) {
        tab.classList.remove('active');
    }

    document.getElementById(tabName).classList.add('active');
    event.target.classList.add('active');
}

// Image gallery
function changeImage(thumbnail) {
    document.getElementById('mainImage').src = thumbnail.src;
    document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
    thumbnail.classList.add('active');
}

// Quantity controls
function increaseQuantity() {
    const input = document.getElementById('quantity');
    const max = parseInt(input.max);
    const current = parseInt(input.value);
    if (current < max) {
        input.value = current + 1;
    }
}

function decreaseQuantity() {
    const input = document.getElementById('quantity');
    const min = parseInt(input.min);
    const current = parseInt(input.value);
    if (current > min) {
        input.value = current - 1;
    }
}

// Action buttons
function addToBasket() {
    const quantity = document.getElementById('quantity').value;
    alert(`Added ${quantity} item(s) to basket!`);
    // function  to be considered later
}

function addToWishlist() {
    alert('Added to wishlist!');
    // action to be considered later
}

function open3DViewer() {
    alert('Opening 3D Product Viewer...');
    // function to be considered later
}

function writeReview() {
    alert('Opening review form...');
    // unfinished functions to be considered later
}