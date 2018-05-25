<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <h3 class="card-header text-white bg-info">User Register</h3>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?= base_url('User/Login') ?>" class="card-link">Login</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-lg-6">
            <form action="">
                <!-- User Full Name Field -->
                <div class="form-group">
                    <label for="fullname">Full Name: &nbsp;</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Full Name" maxlength="50">
                </div>

                <!-- User Email ID Field -->
                <div class="form-group">
                    <label for="email">Email ID: &nbsp;</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ID" maxlength="50">
                </div>

                <!-- User Username Field -->
                <div class="form-group">
                    <label for="username">Username: &nbsp;</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" maxlength="50">
                </div>

                <!-- User Password Field -->
                <div class="form-group">
                    <label for="password">Password: &nbsp;</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" maxlength="50">
                </div>

                <!-- User Confirm Password Field -->
                <div class="form-group">
                    <label for="confirm_password">Confirm Password: &nbsp;</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password" maxlength="50">
                </div>

                <!-- User Phone Field -->
                <div class="form-group">
                    <label for="phone">Phone Number: &nbsp;</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Phone" maxlength="10">
                </div>
                <button type="submit" class="btn btn-outline-success">Register</button>
            </form>
            <br>
        </div>
    </div>
</div>