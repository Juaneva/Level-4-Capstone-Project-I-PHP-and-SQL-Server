<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>Search Result View</title>
</head>

<body onload=displayAlertFooter()>
    <br>
    <button><a href="<?php echo e(url('/')); ?>">Return Home</a></button>
    <button><a href="<?php echo e(url('/search')); ?>">Return to Search</a></button>

    <div class="pageContent">
        <h1>Blog Posts by Search:</h1>
        <h2>Read more about the posts:</h2>

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Table to display the search result-->
        <table>
            <th colspan="2">Title</th>
            <tr>
                <td colspan="2"><?php echo e($post->title); ?></td>
            </tr>

            <th>Category</th>
            <th>Date Created</th>
            <tr>
                <td> <?php echo e($post->category); ?> </td>
                <td> <?php echo e($post->created); ?> </td>
            </tr>

            <th>Tags:</th>
            <th>ID Article</th>
            <tr>
                <td>
                    <!-- Make an array of the tags, split by space -->
                    <?php
                    $tagList = explode(" ", $post->tags);
                    ?>

                    <!-- Make a for loop with links to the different tags -->
                    <?php for($i = 0; $i<(count($tagList)); $i++): ?> <a class="tags" href="<?php echo e(url('/tag/'.$tagList[$i])); ?>"><?php echo e($tagList[$i]); ?></a>
                        <?php endfor; ?>
                </td>
                <td> <?php echo e($post->id); ?> </td>
            </tr>

            <th colspan="2">Read Blog:</th>
            <tr>
                <td colspan=2><textarea rows="10"> <?php echo e($post->content); ?></textarea> </td>
            </tr>
        </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>
    <script type="text/javascript" src="/js/main.js"></script>
</body>

</html><?php /**PATH C:\Users\jdupl\cool-tech\resources\views/searchView.blade.php ENDPATH**/ ?>