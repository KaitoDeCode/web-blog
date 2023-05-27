<?php include('components/header.php'); ?>

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb3">
            <h4 class="text-primmary fw-bold">Your Profile</h4>
            <a href="." class="btn btn-light">GO Back</a>
        </div>
        <form action="#" method="post">
           <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="name">Your name</label>
                    <input type="text" name="name" placeholder="enter your name.." id="name" class="form-contro">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="enter your email.." id="email" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="enter your password.." id="password" class="form-control">
                    <span class="form-text"> diisi saat ingin mengubah password</span>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                    <span class="form-text">Diisi saat ingin mengubah foto</span>
                </div>
            </div>
           </div>
            <button class="btn btn-primary px-4">Submit</button>
        </form>
    </div>
</section>

<?php include('components/footer.php'); ?>