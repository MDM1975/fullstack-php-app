<div class="modal">
    <div class="form">
        <h2 class="pt-1" style="text-align:center;">
            Register
        </h2>
        <div class="p-4">
            <div class="form-group pb-2">
                <label for="username" class="form-label">First Name</label>
                <input type="text" name="registerFirstName" class="form-control" id="registerFirstName" data-id="registerInput" placeholder="First Name...">
            </div>
            <div class="form-group pb-2">
                <label for="username" class="form-label">Last Name</label>
                <input type="text" name="registerLastName" class="form-control" id="registerLastName" data-id="registerInput" placeholder="Last Name...">
            </div>
            <div class="form-group pb-2">
                <label for="username" class="form-label">Email</label>
                <input type="text" name="registerEmail" class="form-control" id="registerEmail" data-id="registerInput" placeholder="Email...">
            </div>
            <div class="form-group pb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="registerUserPassword" class="form-control" id="registerUserPassword" data-id="registerInput" placeholder="Password...">
            </div>
        </div>
        <div class="px-4 pb-2">
            <button type="button" class="btn btn-primary" onclick="submitRegistration()">Register</button>
            <button type="button" class="btn btn-danger" onclick="closeRegistrationForm()">Cancel</button>
        </div>
    </div>
</div>