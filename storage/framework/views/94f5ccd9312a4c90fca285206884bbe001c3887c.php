<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>Write an Article</title>
</head>

<body onload=displayAlertFooter()>
    <br>
    <button> <a href="/home">Return Home</a></button>
    <div class="pageContent">
        <?php if(Session::get('success')): ?>
        <p><?php echo e(Session::get('success')); ?></p>
        <?php endif; ?>

        <?php if(Session::get('fail')): ?>
        <p><?php echo e(Session::get('fail')); ?></p>
        <?php endif; ?>

        <!-- Add a new category -->
        <h1><u>Add a new Category:</u></h1>
        <form method="post" action="addCategory">
            <?php echo csrf_field(); ?>
            <table>
                <tr>
                    <td colspan="2">
                        <input type="text" name="add_new_category" placeholder="Add a new Category- If not exist">
                    </td>

                </tr>
            </table>
            <br>
            <button type="submit" style="border: 3px solid black; width: 100px">Add</button>
        </form>
        <br><br>

        <!-- Add a new blog article -->
        <h1><u>Write an Article:</u></h1>
        <form method="post" action="addArticle">
            <?php echo csrf_field(); ?>

            <table>
                <tr>
                    <td>Title of Article:</td>
                    <td><input type="text" name="title" placeholder="Title" value="<?php echo e(old('title')); ?>"></td> <span style="color:red"><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </tr>
                <tr>
                    <td><label>Category:</label></td>
                    <td>
                        <select name="category_main">
                            <!-- List all the categories that the user can pick to eliminate miss spelling -->
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($category->category); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></select><span style="color:red"><?php $__errorArgs = ['category_main'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Tags:</td>
                    <td><input type="text" name="tags" placeholder="Use a space between tag words" value="<?php echo e(old('tags')); ?>"></td>
                </tr>
                <tr>
                    <td colspan=2>
                        <textarea name="content" placeholder="Content of the article" rows="20"><?php echo e(old('content')); ?></textarea>
                        <span style="color:rgb(0, 0, 0)"><?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </td>
                </tr>
            </table>
            <br>
            <button type="submit" style="border: 3px solid black; width: 100px">Submit</button>
        </form>
    </div>
    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>
    <script type="text/javascript" src="/js/main.js"></script>

</body>

</html><?php /**PATH C:\Users\jdupl\cool-tech\resources\views/write_articles.blade.php ENDPATH**/ ?>