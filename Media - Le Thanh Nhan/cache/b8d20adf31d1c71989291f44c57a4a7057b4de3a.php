<link rel="stylesheet" href="/main.css">
<div class="ce9f468bbc8d7493f89918363550455db bg-blue overflow-y overflow-x-clip" id="c8efa1fc85142415ab69e0800b86530e7">
    <!-- Write your code here -->
    <div class="container">
        <div class="ce9f468bbc8d7493f89918363550455db__top text-white">
                <h2><?php echo e($content->title); ?></h2>
                <p><?php echo $content->content; ?></p>
                <div class="ce9f468bbc8d7493f89918363550455db__items">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="ce9f468bbc8d7493f89918363550455db__item hover" href="<?php echo e(route('article', ['alias' => $item->alias])); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a href="<?php echo e(route('article', ['alias' => $content->alias])); ?>" class="ce9f468bbc8d7493f89918363550455db__button hover-white">
                    Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
                </a>
        </div>
        <div class="ce9f468bbc8d7493f89918363550455db__bottom pos-relative">
            <img src="<?php echo e($content->thumbnail); ?>" class="design-image" alt="">
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/Media - Le Thanh Nhan/src/DesignAndApplication/index.blade.php ENDPATH**/ ?>