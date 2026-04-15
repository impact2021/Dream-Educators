/* global deModalData */
(function () {
    'use strict';

    var overlay  = document.getElementById('de-modal-overlay');
    var nameEl   = document.getElementById('de-modal-name');
    var locEl    = document.getElementById('de-modal-location');
    var imgEl    = document.getElementById('de-modal-img');
    var bioEl    = document.getElementById('de-modal-bio');
    var closeBtn = document.getElementById('de-modal-close');

    if (!overlay) return;

    function openModal(id) {
        var data = deModalData[id];
        if (!data) return;

        nameEl.textContent = data.name;
        locEl.textContent  = data.location ? data.location : '';
        locEl.style.display = data.location ? '' : 'none';
        bioEl.textContent  = data.bio;

        if (data.image) {
            imgEl.src = data.image;
            imgEl.alt = data.name;
            imgEl.style.display = '';
        } else {
            imgEl.style.display = 'none';
        }

        overlay.classList.add('is-open');
        document.body.style.overflow = 'hidden';
        closeBtn.focus();
    }

    function closeModal() {
        overlay.classList.remove('is-open');
        document.body.style.overflow = '';
    }

    // Card click
    document.querySelectorAll('.educator-card').forEach(function (card) {
        card.addEventListener('click', function () {
            openModal(card.dataset.educatorId);
        });
        card.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                openModal(card.dataset.educatorId);
            }
        });
    });

    // Close button
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    // Click outside modal box
    overlay.addEventListener('click', function (e) {
        if (e.target === overlay) {
            closeModal();
        }
    });

    // ESC key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && overlay.classList.contains('is-open')) {
            closeModal();
        }
    });
}());
