document.querySelectorAll('.form-check-input').forEach(toggle => {
    toggle.addEventListener('change', function () {
        const label = this.nextElementSibling;
        label.textContent = this.checked ? 'On' : 'Off';
    });
});