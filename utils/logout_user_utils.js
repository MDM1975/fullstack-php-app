function submitLogout() {
    window.location.href = 'http://satoshi.cis.uncw.edu/~mdm1975/index.php';
    logout();
}

function logout() {
    $.ajax({
        url: 'http://satoshi.cis.uncw.edu/~mdm1975/scripts/logout_user.php',
    })
}