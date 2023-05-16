function openRegistrationForm(){
    document.getElementById('registerFormContainer')
        .style.display = 'block';
}

function submitRegistration(){
    console.log('submitRegistration()');
    const formData = Array.from(document.querySelectorAll('[data-id="registerInput"]')); 
    if(validateRegistrationForm(formData)){
        registerUser(formData)
            .then((data) => {
                if(date = 'true'){
                    alert('Registration Successful!');
                    window.location.href = 'http://satoshi.cis.uncw.edu/~mdm1975/home.php';
                }
            }) 
            .catch((error) => {
                console.log(error);
            });
    } else {   
        alert('Please fill out all fields correctly.');
    } 
}


function validateRegistrationForm(formData){
    return formData.every(input => input.value !== ''); 
}

function closeRegistrationForm(){
    document.getElementById('registerFormContainer')
        .style.display = 'none';
}

function registerUser(formData){
    return new Promise((resolve, reject) => {
        let newUser = new Object();
        formData.forEach(input => { newUser[input.name] = input.value; });
        $.ajax({
            url: 'http://satoshi.cis.uncw.edu/~mdm1975/scripts/create_site_user.php',
            type: 'POST',
            data: newUser,
        })
        .done((data) => resolve(data))
        .fail((data) => reject(data));
    });
}