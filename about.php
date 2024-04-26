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
                        <h1 class="post-title">Uniting Creativity: The Dynamic Duo Behind ScriBlog - Kevin Chu and Colin Hill</h1>
                        <div class="post-content">
                            <p>
                                In the fast-paced world of digital innovation, there are visionaries whose passion for technology and creativity drives them to push the boundaries of what's possible. Meet Kevin Chu and Colin Hill, the dynamic duo behind ScriBlog, a revolutionary platform that's redefining the landscape of collaborative writing and blogging.
                            </p>
                            <p>
                                Kevin Chu, a Silicon Valley native with a penchant for coding and a vision for empowering writers, joined forces with Colin Hill, a creative strategist with a keen eye for user experience and design. Together, they embarked on a mission to create a platform that would revolutionize the way writers collaborate, share ideas, and create compelling content.
                            </p>
                            <p>
                                Drawing from their complementary skill sets and shared passion for innovation, Kevin and Colin poured countless hours into developing ScriBlog—a platform that seamlessly integrates the power of collaborative writing with intuitive design and user-friendly features.
                            </p>
                            <p>
                                At the heart of ScriBlog lies Kevin and Colin's shared commitment to empowering writers of all backgrounds to unleash their creativity and amplify their voices in the digital realm. Whether it's co-authoring articles, providing feedback, or connecting with like-minded creators, ScriBlog offers a vibrant community where ideas flourish and collaboration thrives.
                            </p>
                            <p>
                                Thanks to Kevin and Colin's dedication and ingenuity, ScriBlog has quickly gained traction within the writing community, earning acclaim for its ease of use, robust features, and commitment to fostering a supportive and inclusive environment for writers worldwide.
                            </p>
                            <p>
                                But their journey doesn't stop here. With their sights set on the future, Kevin and Colin are continuously iterating and innovating, driven by a shared vision to make ScriBlog the go-to platform for writers seeking to unleash their full potential and connect with a global audience.
                            </p>
                            <p>
                                As we celebrate the transformative impact of ScriBlog on the world of blogging and content creation, we applaud Kevin Chu and Colin Hill for their relentless pursuit of excellence, their unwavering commitment to empowering writers, and their vision to unite creativity in the digital age. Together, they exemplify the power of collaboration, innovation, and the boundless possibilities that emerge when passion meets purpose.
                            </p>
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