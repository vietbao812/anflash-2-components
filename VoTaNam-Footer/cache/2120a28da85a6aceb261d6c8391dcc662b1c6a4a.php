<link rel="stylesheet" href="/main.css">
<div class="c15abc9d74c664ae0a61ecc0c8b3178e3" id="c2f0000d7793249e5a66c048bc77d164c">
    <!-- Write your code here -->
    <h1><?php echo e($greetings); ?></h1>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>Category: <?php echo e($category->title); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div>phonenumber: <?php echo e($phonenumber); ?></div>
    <div>email: <?php echo e($email); ?></div>
    <div>address: <?php echo e($address); ?></div>
    <div>facebook: <?php echo e($facebook); ?></div>
    <div>youtube: <?php echo e($youtube); ?></div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
<?php /**PATH /home/tuna/Projects/anflash-2-components/VoTaNam-Footer/src/Footer/index.blade.php ENDPATH**/ ?>