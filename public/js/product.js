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

    // function  to be considered later when the basket is implemented
}

function addToWishlist() {
    alert('Added to wishlist!');
    // action to be considered later
}

function open3DViewer() {
    const modal = document.getElementById('viewerModal');
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent scrolling
    } else {
        console.error('Viewer modal not found');
    }
}

function close3DViewer() {
    const modal = document.getElementById('viewerModal');
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = ''; // Restore scrolling
    }
}

// Close modal when clicking outside
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('viewerModal');
    if (modal) {
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                close3DViewer();
            }
        });
    }
});

function writeReview() {
    alert('Opening review form...');
    // unfinished functions to be considered later when the review is implemented and cookies are added
}