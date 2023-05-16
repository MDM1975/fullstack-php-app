function submitLogin() {
    let email = document.querySelector('#email').value; 
    let userPassword = document.querySelector('#userPassword').value;
    if (validateUserLogin(email, userPassword)) {
        authUser(email, userPassword)
            .then((response) => {
                if(response === 'true'){
                    window.location.href = 'http://satoshi.cis.uncw.edu/~mdm1975/home.php';
                }
                if(response === 'false'){
                    alert('Invalid login credentials');
                }
            })
            .catch((error) => {
                console.error(error);
            });
    } else {
        alert('Invalid login credentials');
    }
}

function validateUserLogin(email, userPassword) {
    return email.length > 0 && userPassword.length > 0;
}

function authUser(email, userPassword) {
    return new Promise((resolve, reject) => {
        let user = new Object();
        user.email = email;
        user.userPassword = userPassword;
        $.ajax({
            url: 'http://satoshi.cis.uncw.edu/~mdm1975/scripts/auth_user.php',
            type: 'GET',
            data: user,
        })
            .done((data) => resolve(data))
            .fail((data) => reject(data));
    });
}