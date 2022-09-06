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
    <button style="border: 3px solid black"><a href="<?php echo e(url('/')); ?>">Return Home</a></button>

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
                    <textarea style="border: 0px;" rows="2"> <?php echo e($post->content); ?> </textarea>
                </td>

                <td><?php echo e($post->id); ?></td>
                <td><?php echo e($post->created); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>
    <script type="text/javascript" src="/js/main.js"></script>
</body>

</html><?php /**PATH C:\Users\jdupl\cool-tech\resources\views/all_blog_posts.blade.php ENDPATH**/ ?>