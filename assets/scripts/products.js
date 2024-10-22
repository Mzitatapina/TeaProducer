document.querySelectorAll('.card').forEach(function(card) {
    card.addEventListener('click', function() {
        var popupId = card.getAttribute('data-popup');
        document.getElementById(popupId).style.display = 'flex';
    });
});

// Close popup when clicking the close button
document.querySelectorAll('.close').forEach(function(closeBtn) {
    closeBtn.addEventListener('click', function() {
        closeBtn.closest('.popup').style.display = 'none';
    });
});

// Close popup when clicking outside the popup content
window.addEventListener('click', function(event) {
    document.querySelectorAll('.popup').forEach(function(popup) {
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    });
});