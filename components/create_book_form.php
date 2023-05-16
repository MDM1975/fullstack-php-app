<div class="modal">
    <div class="form">
        <h2 class="pt-1" style="text-align:center;">
            Add Book
        </h2>
        <div class="p-4">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" data-id="createBookInput" required>
            </div>
            <div class="form-group">
                <label for="bookAuthor">Author</label>
                <select class="form-control" data-id="createBookInput" name="bookAuthor" required>
                    <option value="">--Select an author--</option>
                    <?php
                    $authors = Author_Controller::getAllAuthors();
                    foreach ($authors as $author) {
                        echo '<option value="' . $author['authorId'] . '">' . $author['firstName'] . '' . " " . '' . $author['lastName'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="bookGenre">Genre</label>
                <select class="form-control" data-id="createBookInput" name="bookGenre" required>
                    <option value="">--Select a genre--</option>
                    <?php
                    $genres = Genre_Controller::getAllGenres();
                    foreach ($genres as $genre) {
                        echo '<option value="' . $genre['genreId'] . '">' . $genre['genreName'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="publishDate">Publish Date</label>
                <input type="date" class="form-control" name="publishDate" data-id="createBookInput" required>
            </div>
            <div class="form-group">
                <label for="bookDescription">Description</label>
                <textarea class="form-control" name="bookDescription" data-id="createBookInput" required></textarea>
            </div>
        </div>
        <div class="px-4 pb-2">
            <button class="btn btn-primary" onclick="submitCreateBookForm()">Submit</button>
            <button class="btn btn-danger" onclick="cancelCreateBookForm()">Cancel</button>
        </div>
    </div>
</div>