const logout = document.getElementById(newFunction());
if (logout) {
    logout.addEventListener('click', (e) => {
        e.preventDefault();
        const form = document.getElementById('logoutForm').submit();
    });
}

function newFunction() {
    return 'logoutBtn';
}
