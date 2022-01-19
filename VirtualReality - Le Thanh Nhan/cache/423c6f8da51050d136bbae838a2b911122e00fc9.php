<link rel="stylesheet" href="/main.css">
<div class="c3ed3bd0cfcf0458f98525f141095afe3" id="c6995b8f5961a40bf92b98ce8d026dd61">
    <!-- Write your code here -->
    <div class="container">
        <div class="c3ed3bd0cfcf0458f98525f141095afe3__top">
            <h2><?php echo e($content->title); ?></h2>
            <p><?php echo $content->content; ?></p>
            <div class="c3ed3bd0cfcf0458f98525f141095afe3__items">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="c3ed3bd0cfcf0458f98525f141095afe3__item" href="<?php echo e($item->alias); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a class="c3ed3bd0cfcf0458f98525f141095afe3__item" href="#"><i class="fas fa-caret-right"></i>Quét 3D thực tế - 3D Scanning Quét 3D thực tế - 3D Scanning</a>
            </div>
            <a href="<?php echo e($content->alias); ?>" class="c3ed3bd0cfcf0458f98525f141095afe3__button">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="c3ed3bd0cfcf0458f98525f141095afe3__bottom">
            <iframe src="<?php echo e($content->thumbnail); ?>" frameborder="0">

            </iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-component/src/VirtualReality/index.blade.php ENDPATH**/ ?>