<?php include('./components/header.php'); ?>

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4 class="text-primmary">Posts</h4>
            <a href="create-post.php" class="btn btn-primary">create new posts</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr class="">
                        <th>No</th>
                        <th>Post Title</th>
                        <th>Post Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="vertical-align: middle;">
                        <td>1</td>
                        <td> Finding Temporal Patterns in Twitter Posts: Exploratory Data Analysis with Python</td>
                        <td>Programming</td>
                        <td>
                            <a href="edit-post.php" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr style="vertical-align: middle;">
                        <td>2</td>
                        <td> Lorem ipsum dolor sit amet consectetur.</td>
                        <td>Programming</td>
                        <td>
                            <a href="edit-post.php" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include('./components/footer.php'); ?>