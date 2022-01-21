<link rel="stylesheet" href="/main.css">
<div class="ce9f468bbc8d7493f89918363550455db" id="caceecbf971be42fe8dbe57797affa1f5">
    <!-- Write your code here -->
    <div class="container-lg ce9f468bbc8d7493f89918363550455db__wrapper">
        <div class="ce9f468bbc8d7493f89918363550455db__left">
            <img src="<?php echo e($content->thumbnail); ?>" alt="">
        </div>
        <div class="ce9f468bbc8d7493f89918363550455db__right flex-column order-first z-999">
            <h2><?php echo e($content->title); ?></h2>
            <p><?php echo $content->content; ?></p>
            <div class="ce9f468bbc8d7493f89918363550455db__items">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="ce9f468bbc8d7493f89918363550455db__item text-black hover" href="<?php echo e(route('article', ['alias' => $item->alias])); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e(route('article', ['alias' => $content->alias])); ?>" class="ce9f468bbc8d7493f89918363550455db__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
            <div class="ce9f468bbc8d7493f89918363550455db__contact bg-blue p-3 mt-3 text-white">
                <p>Bạn đang có ý tưởng thiết kế bộ nhận diện thương hiệu riêng nhưng chưa biết bắt đầu từ đâu?</p>
                <a href="#" class="text-decoration-none text-white hover">Liên hệ ngay!</a>
            </div>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/Media - Le Thanh Nhan/src/Branding/index.blade.php ENDPATH**/ ?>