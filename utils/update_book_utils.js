function openUpdateBookForm(bookId) {
    initFormData(bookId)
        .then((response) => {
            document.getElementById('updateBookFormContainer')
                .style.display = 'block';
            setUpdateFormInputs(JSON.parse(response)[0]);
        })
        .catch((error) => {
            console.log(error);
        });
}

function initFormData(bookId) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: 'http://satoshi.cis.uncw.edu/~mdm1975/scripts/read_single_book.php',
            type: 'GET',
            data: { bookId: bookId },
        })
            .done((response) => resolve(response))
            .fail((error) => reject(error));
    });
}

function setUpdateFormInputs(book) {
    document.querySelectorAll('[data-id="updateBookInput"]')
    .forEach(input => {
        switch (input.name) {
            case 'bookId':
                input.value = book.Id;
                break;
            case 'title':
                input.value = book.title;
                break;
            case 'publishDate':
                input.value = book.publishDate;
                break;
            case 'bookDescription':
                input.value = book.bookDescription;
                break;
            case 'bookAuthor':
                input.value = book.authorId;
                break;
            case 'bookGenre':
                input.value = book.genreId;
                break;
            default:
                break;
        }
    });
}

function submitUpdateBookForm() {
    let formData = Array.from(document.querySelectorAll('[data-id="updateBookInput"]'));
    if (validateFromData(formData)) {
        updateBook(formData)
        .then(() => {
            alert('Book updated!');
            clearFormData();
        }).catch((error) => {
            console.log(error);
        });
    }
    else {
        alert('Complete all fields!');
    }
}

function validateFromData(formData) {
    return formData.every(input => input.validity.valid === true);
}

function clearFormData(){
    document.getElementById('updateBookFormContainer')
        .style.display = 'none';
    window.location.reload();
}

function cancelUpdateBookForm() {
    document.getElementById('updateBookFormContainer')
        .style.display = 'none';
}

function updateBook(formData) {
    return new Promise((resolve, reject) => {
        let updatedBook = new Object();
        formData.forEach(input => { updatedBook[input.name] = input.value; });
        $.ajax({
            url: 'http://satoshi.cis.uncw.edu/~mdm1975/scripts/update_book.php',
            type: 'POST',
            data: updatedBook,
        })
        .done((data) => resolve(data))
        .fail((data) => reject(data));
    });
}