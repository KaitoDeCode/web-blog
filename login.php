<?php include('components/header.php')?>

<section class="auth py-5">
    <div class="container">
        <h2 class="text-primmary text-center mb-4">Login</h2>
        <form action="php/login.php" method="post">
            <div class="mb-3">
                <label for="email">Email</label>
                <input placeholder="Enter your email" type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input placeholder="Enter your password" type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="submit">Login</button>
            <p class="mt-3 text-secondary text-center">Don't have an account? <a class="text-primmary" href="register.php">Register!</a></p>
        </form>
    </div>
</section>