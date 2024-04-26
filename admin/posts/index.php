<?php
include("../../path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
adminsOnly();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/69795959e9.js" crossorigin="anonymous"></script>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
        
        <!-- CSS Styling -->
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">

        <title>Admin Section - Manage Posts</title>
    </head>
    <body>
        
        <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Manage Posts</h2>

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $key => $post): ?>
                                <tr>
                                    <?php $user = selectOne("users", ["id" => $post["user_id"]]) ?>
                                    <td><?php echo $key + 1; ?> </td>
                                    <td><?php echo $post["title"]; ?></td>
                                    <td><?php echo $user["username"]; ?></td>
                                    <td><a href="edit.php?id=<?php echo $post["id"]; ?>" class="edit">edit</a></td>
                                    <td><a href="edit.php?delete_id=<?php echo $post["id"]; ?>" class="delete">delete</a></td>
                                    <?php if ($post["published"]): ?>
                                        <td><a href="edit.php?published=0&p_id=<?php echo $post["id"]; ?>" class="unpublish">unpublish</a></td>
                                    <?php else: ?>
                                        <td><a href="edit.php?published=1&p_id=<?php echo $post["id"]; ?>" class="publish">publish</a></td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- CKEditor -->
        <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

        <!-- Custom Scripts -->
        <script src="../../assets/js/scripts.js"></script>
    </body>
</html>