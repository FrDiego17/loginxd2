document.getElementById('togglePassword').addEventListener('change', function() {
    var passwordInput = document.getElementById('passwordInput');
    if (this.checked) {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
});
