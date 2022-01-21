<link rel="stylesheet" href="/main.css">
<div class="ce9f468bbc8d7493f89918363550455db no-background" id="c5f8e2943c37f46e0880068d83109940d">
    <!-- Write your code here -->
    <div class="container">
        <div class="ce9f468bbc8d7493f89918363550455db__top">
            <h2><?php echo e($content->title); ?></h2>
            <p><?php echo $content->content; ?></p>
            <div class="ce9f468bbc8d7493f89918363550455db__items">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="ce9f468bbc8d7493f89918363550455db__item text-black" href="<?php echo e($item->alias); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e($content->alias); ?>" class="ce9f468bbc8d7493f89918363550455db__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="ce9f468bbc8d7493f89918363550455db__bottom my-45 overflow-bottom">
            <iframe  class="media-iframe" src="<?php echo e($content->thumbnail); ?>" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/Media - Le Thanh Nhan/src/VirtualReality/index.blade.php ENDPATH**/ ?>