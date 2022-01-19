<link rel="stylesheet" href="/main.css">
<div class="c9d9a1a301da14b42aa40ed5e28e15585" id="c7e19176a44274094b717b48981fab822">
    <!-- Write your code here -->
    <div class="container">
    <div class="c9d9a1a301da14b42aa40ed5e28e15585__top">
            <h2><?php echo e($content->title); ?></h2>
            <p><?php echo $content->content; ?></p>
            <div class="c9d9a1a301da14b42aa40ed5e28e15585__items">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="c9d9a1a301da14b42aa40ed5e28e15585__item" href="<?php echo e(route('article', ['alias' => $item->alias])); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e(route('article', ['alias' => $content->alias])); ?>" class="c9d9a1a301da14b42aa40ed5e28e15585__button">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
    </div>
    <div class="c9d9a1a301da14b42aa40ed5e28e15585__bottom">
        <img src="<?php echo e($content->thumbnail); ?>" alt="">
    </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/DesignAndApplication/src/DesignAndApplication/index.blade.php ENDPATH**/ ?>