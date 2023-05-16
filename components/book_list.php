<?php
$books = Book_Controller::getAllBooks();
?>

<div class="scrollable">
    <?php foreach ($books as $book) : ?>
        <div class="d-flex justify-content-center pb-1">
            <div class="py-2 px-5">
                <div py-3>
                    <div class="card">
                        <div class="card-body" style="width: 1000px;">
                            <div class="row">
                                <div class="d-flex justify-content-end">
                                    <div class="p-2">
                                        <button type="button" class="btn btn-secondary" onclick="openUpdateBookForm(<?php echo $book['Id'] ?>)">Update</button>
                                    </div>
                                    <div class="p-2">
                                        <button type="button" class="btn btn-secondary" onclick="openDeleteBookForm(<?php echo $book['Id'] ?>)">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 text-truncate">
                                    <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex align-items-center d-inline-block mb-3 bs-icon">
                                        <span>
                                            <img src="https://img.icons8.com/ios-filled/50/000000/book.png"/>
                                        </span>
                                        <span>
                                            <h3 class="card-title p-2 mt-3">
                                                <?php echo $book['title'] ?>
                                            </h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-2 px-3">
                                <div class="col-8">
                                    <h5>Author</h5>
                                    <p>
                                        <?php echo $book['authorName'] ?>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <h5>Publish Date</h5>
                                    <p>
                                        <?php echo date("m/d/Y", strtotime($book['publishDate'])) ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row pb-2 px-3">
                                <div class="col">
                                    <h5>Genre</h5>
                                    <p>
                                        <?php echo $book['genre'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row pb-2 px-3">
                                <h5>Description</h5>
                                <p>
                                    <?php echo $book['bookDescription'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>