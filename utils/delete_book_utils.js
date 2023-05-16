function openDeleteBookForm(bookId) {
    document.getElementById('deleteBookFormContainer')
        .style.display = 'block';
    document.querySelector('[data-id="deleteBookInput"]')
        .value = bookId;
}

function submitDeleteBookForm() {
    let bookId = document.querySelector('[data-id="deleteBookInput"]').value;
    deleteBook(bookId)
    .then(() => {
        alert('Book removed successfully');
        closeDeleteBookForm();
    }) 
    .catch((error) => {
        console.log(error);
    });
}

function cancelDeleteBookForm() {
    document.getElementById('deleteBookFormContainer')
        .style.display = 'none';
}

function closeDeleteBookForm() {
    document.getElementById('deleteBookFormContainer')
        .style.display = 'none';
    window.location.reload();
}

function deleteBook(bookId) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: 'http://satoshi.cis.uncw.edu/~mdm1975/scripts/delete_book.php',
            type: 'POST',
            data: { bookId: bookId }
        })
        .done((response) => {
            resolve(response);
        })
        .fail((error) => {
            reject(error);
        });
    });
}