<html>

<head>
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>Homepage of Cool-Tech</title>
</head>


<body onload=displayAlertFooter()>

    <br>
    <!-- Buttons to different pages -->
    <button> <a href="search">Search Articles</a></button>
    <button> <a href="write_articles">Write an article or add a category</a></button>
    <button> <a href="about">About Us</a></button>
    <button> <a href="legal/tos">Terms of Service</a></button>
    <button> <a href="legal/privacy">Privacy Policy</a></button>

    <div class="pageContent">
        <h1>Available blog posts:</h1>
        <h2>Blog posts:</h2>

        <!-- Table to display Titles to be able to search blogs-->
        <table>
            <th>Title:</th>
            <th>Content:</th>
            <th>ID:</th>
            <th>Date Created:</th>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <!--slug the url with replace function-->
                    <a href="<?php echo e(url('/article/'.$post->id)); ?>"><?php echo e($post->title); ?></a>
                </td>
                <td style="width:50%">
                    <textarea style="width: 550px; height: 200px;"> <?php echo e($post->content); ?> </textarea>
                </td>

                <td><?php echo e($post->id); ?></td>
                <td><?php echo e($post->created); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <button style="border: 3px solid rgb(0, 83, 190); background:rgb(168, 216, 255); border-radius: 5px;"><b> <a href="all_blog_posts">View All Blog Posts</a> </b></button>
        <br><br>

        <!-- Search by Category -->
        <table>
            <th>Categories Search for Articles:</th>
            <!-- List all the categories that the user can pick to eliminate miss spelling -->
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <!--slug the url with replace function-->
                    <button>
                        <a href="<?php echo e(url('/category/'.Str::replace(' ', '-', $category->category))); ?>"><?php echo e($category->category); ?></a>
                    </button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>
</body>

<footer>
    <center> Copyright (c) 2022 Laravel LLC </center>
</footer>

</html><?php /**PATH C:\Users\jdupl\cool-tech\resources\views/home.blade.php ENDPATH**/ ?>