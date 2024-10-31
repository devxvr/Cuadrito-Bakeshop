// Get stored action from localStorage
document.addEventListener('DOMContentLoaded', function () {
    const action = localStorage.getItem('action');
    
    // Check if an action was stored
    if (action === 'signup') {
        document.querySelector('.login-signup-container').classList.remove('show-login');
        document.querySelector('.login-signup-container').classList.add('show-signup');
    } else if (action === 'login') {
        document.querySelector('.login-signup-container').classList.remove('show-signup');
        document.querySelector('.login-signup-container').classList.add('show-login');
    }

    // Clear action after it is used
    localStorage.removeItem('action');
});

// Animation for flip-card - login-signup
document.querySelector('.signup-link').addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector('.login-signup-container').classList.remove('show-login');
    document.querySelector('.login-signup-container').classList.add('show-signup');
});

document.querySelector('.login-link').addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector('.login-signup-container').classList.remove('show-signup');
    document.querySelector('.login-signup-container').classList.add('show-login');
});
