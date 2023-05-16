<div class="modal">
    <div class="form" style="margin-left: 40%; margin-right: 40%;">
        <div class="p-4">
            <input type="text" name="bookId" data-id="deleteBookInput" hidden>
        </div>
        <h4 class="pt-1" style="text-align:center;">
            Are you sure you want to delete this book?
        </h4>
        <div class="px-4 pb-2">
            <div class="d-flex justify-content-center">
                <div class="p-2">
                    <button class="btn btn-primary" onclick="submitDeleteBookForm()">Yes</button>
                </div>
                <div class="p-2">
                    <button class="btn btn-danger" onclick="cancelDeleteBookForm()">No</button>
                </div>
            </div>
        </div>
    </div>
</div>