<link rel="stylesheet" href="/main.css">
<div class="ceac9064ab6e54dd58dd62b4c3dcf324a" id="c5b81c3fbe5484abcbaab611664a81069">
    <!-- Write your code here -->
    <h1><?php echo e($greetings); ?></h1>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($article->title); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div style="width: 100px; height: 100px; background-color: <?php echo e($variables["left-background-color"]); ?>;"></div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
<?php /**PATH /home/tuna/Projects/anflash-2-components/HomeNews-NguyenVietBao/src/HomeNews/index.blade.php ENDPATH**/ ?>