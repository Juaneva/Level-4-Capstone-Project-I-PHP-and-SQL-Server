<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>Search Page</title>
</head>

<body onload=displayAlertFooter()>
    <br>
    <!-- Button to home page -->
    <button><a href="<?php echo e(url('/')); ?>">Return Home</a></button>

    <div class="pageContent">
        <h1>Search:</h1>
        <table>
            <!-- Search by Category -->
            <form method="post" action="searchCategory">
                <?php echo csrf_field(); ?>

                <th colspan="2">Category Search:</th>
                <tr>
                    <td>
                        <select name="category_main" id=input>
                            <!-- List all the categories that the user can pick to eliminate miss spelling -->
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($category->category); ?>>
                                <?php echo e($category->category); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </td>
                    <td>
                        <button type="submit">Search</button>
                    </td>
                </tr>
            </form>
            <br>

            <!-- Search by tag -->
            <form method="post" action="searchTag">
                <?php echo csrf_field(); ?>
                <th colspan="2">Tag Search:</th>
                <tr>
                    <td><input type="text" name="tag_search" placeholder="Tag to search for"></td>
                    <td><button type="submit">Search</button></td>
                </tr>
            </form>

            <!-- Search by tag -->
            <form method="post" action="searchId">
                <?php echo csrf_field(); ?>
                <th colspan="2">ID Search:</th>
                <tr>
                    <td><input type="text" name="id_search" placeholder="ID to search for"></td>
                    <td><button type="submit">Search</button></td>
                </tr>
            </form>
        </table>
    </div>
    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>
    <script type="text/javascript" src="/js/main.js"></script>

</body>

</html><?php /**PATH C:\Users\jdupl\cool-tech\resources\views/search.blade.php ENDPATH**/ ?>