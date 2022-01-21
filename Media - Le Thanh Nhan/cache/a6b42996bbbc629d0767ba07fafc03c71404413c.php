<link rel="stylesheet" href="/main.css">
<div class="ce9f468bbc8d7493f89918363550455db pos-relative" id="cd54c04c50dfa4a60965c6ad75bf24cfe">
    <!-- Write your code here -->
    <div class="bg-image">
        <img src="https://anflash.com/images/background-group5.png" class="img-cover" alt="">
    </div>
    <div class="container ce9f468bbc8d7493f89918363550455db__wrapper">
        <div class="ce9f468bbc8d7493f89918363550455db__left">
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
        <div class="ce9f468bbc8d7493f89918363550455db__right z-1">
            <iframe src="<?php echo e($content->thumbnail); ?>" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/Media - Le Thanh Nhan/src/Media/index.blade.php ENDPATH**/ ?>