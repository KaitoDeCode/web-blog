<?php 

include('components/header.php'); 
$data = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM posts WHERE id='$_GET[id]'"))
?>

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb3">
            <h4 class="text-primmary fw-bold">Edit Post</h4>
            <a href="posts.php" class="btn btn-light">Go Page</a>
        </div>
        <form action="php/posts.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="update" required>
            <input type="hidden" name="id" value=<?=$_GET['id']?> required>
            <div class="mb-3">
                <label for="title">Title Post</label>
                <input type="text" name="title" value=<?= $data['title'] ?> placeholder="title your post" id="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="body">Body</label>
                <textarea name="body" cols="30" rows="10" placeholder="descripsion" id="body" class="form-control" required>
                    <?= $data['body']?>
                </textarea>
            </div>
            <div class="mb-3">
                <label for="category">Category</label>
                <input type="text" name="category" value=<?=$data['category'] ?> placeholder="title yourcategory" id="category" class="form-control" required>

            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                <span class="form-text">jangan diisi jika tidak ingin mengganti gambar</span>
            </div>
            <button class="btn btn-primary px-4">Submit</button>
        </form>
    </div>
</section>

<?php include('components/footer.php'); ?>