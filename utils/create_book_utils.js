function openCreateBookForm(){
    document.getElementById('createBookFormContainer')
        .style.display = 'block';
}

function cancelCreateBookForm(){
    document.querySelectorAll('[data-id="createBookInput"]')
        .forEach(input => input.value = '');
    document.getElementById('createBookFormContainer')
        .style.display = 'none';
}    

function submitCreateBookForm() {
    let formData = Array.from(document.querySelectorAll('[data-id="createBookInput"]'));
    if (validateFromData(formData)) {
        createBook(formData)
            .then(() => {
                alert('Book added!');
                clearFromData(formData);
            })
            .catch((error) => {
                console.log(error);
            });
    } else {
        alert('Complete all fields!');
    }
}

function validateFromData(formData) {
    return formData.every(input => input.validity.valid === true);
}

function createBook(formData) {
    return new Promise((resolve, reject) => {
        let newBook = new Object();
        formData.forEach(input => { newBook[input.name] = input.value; });
        $.ajax({
            url: 'http://satoshi.cis.uncw.edu/~mdm1975/scripts/create_book.php',
            type: 'POST',
            data: newBook,
        })
            .done((data) => resolve(data))
            .fail((data) => reject(data));
    });
}

function clearFromData(formData) {
    formData.forEach(input => input.value = '');
    document.getElementById('createBookFormContainer')
        .style.display = 'none';
    window.location.reload();
}