<html>

<head>
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>Cool-Tech Articles</title>
</head>

<body onload=displayAlertFooter()>
    <br>
    <button><a href="<?php echo e(url('/')); ?>">Return Home</a></button>

    <div class="pageContent">
        <h1>Read more about the posts:</h1>
        <!-- Table to display the search result-->
        <table>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th colspan="2">Title:</th>
            <tr>
                <td colspan="2"><?php echo e($post->title); ?></td>
            </tr>

            <th>Category:</th>
            <th>Date Created:</th>
            <tr>
                <td> <?php echo e($post->category); ?> </td>
                <td> <?php echo e($post->created); ?> </td>
            </tr>

            <th>Tags:</th>
            <th>ID Article:</th>
            <tr>
                <td>

                    <!-- Make an array of the tags, split by space -->
                    <?php
                    $tagList = explode(" ", $post->tags);
                    ?>

                    <!-- Make a for loop with links to the different tags -->
                    <?php for($i = 0; $i<(count($tagList)); $i++): ?> <a class="tags" href="<?php echo e(url('/tag/'.$tagList[$i])); ?>"><?php echo e($tagList[$i]); ?></a>
                        <?php endfor; ?>

                <td> <?php echo e($post->id); ?> </td>
                </td>
            </tr>

            <th colspan="2">Read Blog:</th>
            <tr>
                <td colspan=2><textarea rows="25"> <?php echo e($post->content); ?></textarea> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>
    <script type="text/javascript" src="/js/main.js"></script>
</body>

</html><?php /**PATH C:\Users\jdupl\cool-tech\resources\views/article.blade.php ENDPATH**/ ?>