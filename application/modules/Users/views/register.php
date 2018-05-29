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
            <!-- Show form validation errors -->
            <?php // validation_errors() ?>
            <?= form_open('') ?>
                <!-- User Full Name Field -->
                <div class="form-group">
                    <label for="fullname">Full Name: &nbsp;</label>
                    <input type="text" class="form-control <?= (empty(form_error('fullname')))? '':'is-invalid' ?>" value="<?= set_value('fullname') ?>" name="fullname" id="fullname" placeholder="Enter Full Name" maxlength="50">
                    <?= form_error('fullname') ?>
                </div>

                <!-- User Email ID Field -->
                <div class="form-group">
                    <label for="email">Email ID: &nbsp;</label>
                    <input type="email" class="form-control <?= (empty(form_error('email')))? '':'is-invalid' ?>" value="<?= set_value('email') ?>" name="email" id="email" placeholder="Enter Email ID" maxlength="50">
                    <?= form_error('email') ?>
                </div>

                <!-- User Username Field -->
                <div class="form-group">
                    <label for="username">Username: &nbsp;</label>
                    <input type="text" class="form-control <?= (empty(form_error('username')))? '':'is-invalid' ?>" value="<?= set_value('username') ?>" name="username" id="username" placeholder="Enter Username" maxlength="50">
                    <?= form_error('username') ?>
                </div>

                <!-- User Password Field -->
                <div class="form-group">
                    <label for="password">Password: &nbsp;</label>
                    <input type="password" class="form-control <?= (empty(form_error('password')))? '':'is-invalid' ?>" value="<?= set_value('password') ?>" name="password" id="password" placeholder="Enter Password" maxlength="50">
                    <?= form_error('password') ?>
                </div>

                <!-- User Confirm Password Field -->
                <div class="form-group">
                    <label for="confirm_password">Confirm Password: &nbsp;</label>
                    <input type="password" class="form-control <?= (empty(form_error('confirm_password')))? '':'is-invalid' ?>" value="<?= set_value('confirm_password') ?>" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password" maxlength="50">
                    <?= form_error('confirm_password') ?>
                </div>

                <!-- User Phone Field -->
                <div class="form-group">
                    <label for="phone">Phone Number: &nbsp;</label>
                    <input type="number" class="form-control <?= (empty(form_error('phone')))? '':'is-invalid' ?>" value="<?= set_value('phone') ?>" name="phone" id="phone" placeholder="Enter Phone" maxlength="10">
                    <?= form_error('phone') ?>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input <?= (empty(form_error('agree')))? '':'is-invalid' ?>" name="agree" type="checkbox" value="1" <?= set_checkbox('agree','1') ?> id="invalidCheck3">
                        <label class="form-check-label" for="invalidCheck3">
                            Agree to terms and conditions
                        </label>
                        <?= form_error('agree') ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success">Register</button>
            <?= form_close() ?>
            <br>
        </div>
    </div>
</div>