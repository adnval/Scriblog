<?php
include("path.php");
session_start();
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
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Single Post</title>
    </head>
    <body>

        <?php include(ROOT_PATH . "/app/includes/header.php") ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Content -->
            <div class="content clearfix">
            
                <!-- Main Content -->
                <div class="main-content-wrapper">
                    <div class="main-content single">
                        <h1 class="post-title">About Us</h1>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur laborum quaerat vero atque delectus? Illum.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati ipsam rerum porro, est ullam tempora nam assumenda recusandae labore! Doloribus, odit fuga molestias ipsum saepe sapiente. Ad laudantium sapiente quasi!</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod hic ipsum architecto. Corrupti, ipsam.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, labore.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur laborum quaerat vero atque delectus? Illum.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati ipsam rerum porro, est ullam tempora nam assumenda recusandae labore! Doloribus, odit fuga molestias ipsum saepe sapiente. Ad laudantium sapiente quasi!</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod hic ipsum architecto. Corrupti, ipsam.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, labore.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur laborum quaerat vero atque delectus? Illum.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati ipsam rerum porro, est ullam tempora nam assumenda recusandae labore! Doloribus, odit fuga molestias ipsum saepe sapiente. Ad laudantium sapiente quasi!</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod hic ipsum architecto. Corrupti, ipsam.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, labore.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur laborum quaerat vero atque delectus? Illum.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati ipsam rerum porro, est ullam tempora nam assumenda recusandae labore! Doloribus, odit fuga molestias ipsum saepe sapiente. Ad laudantium sapiente quasi!</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod hic ipsum architecto. Corrupti, ipsam.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, labore.</p>
                        </div>
                    </div>                
                </div>
                <!-- // Main Content -->

                <!-- Sidebar -->
                <div class="sidebar single">
                    <div class="section popular">
                        <img src="assets/images/about.png" alt="" class="about-pic">
                    </div>
                </div>
                <!-- // Sidebar -->

            </div>
            <!-- // Content -->
        
        </div>
        <!-- // Page Wrapper -->

        <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Custom Scripts -->
        <script src="/assets/js/scripts.js"></script>
    </body>
</html>