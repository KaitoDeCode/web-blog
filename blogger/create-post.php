<?php include('components/header.php'); ?>

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb3">
            <h4 class="text-primmary fw-bold">Create New Post</h4>
            <a href="posts.php" class="btn btn-light">Go Page</a>
        </div>
        <form action="php/posts.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="add" required>
            <div class="mb-3">
                <label for="title">Title Post</label>
                <input type="text" name="title" placeholder="title your post" id="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="body">Body</label>
                <textarea name="body" cols="30" rows="10" placeholder="descripsion" id="body" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="category">Category</label>
                <input type="text" name="category" placeholder="title yourcategory" id="category" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
            </div>
            <button class="btn btn-primary px-4">Submit</button>
        </form>
    </div>
</section>

<?php include('components/footer.php'); ?>