<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> -->
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <a href="<?= base_url('register') ?>" class="btn btn-primary my-2 my-sm-0">Register</a>
            &nbsp;
            <a href="<?= base_url('login') ?>" class="btn btn-success my-2 my-sm-0">Login</a>
        </div>
    </div>
</nav>
<br>
