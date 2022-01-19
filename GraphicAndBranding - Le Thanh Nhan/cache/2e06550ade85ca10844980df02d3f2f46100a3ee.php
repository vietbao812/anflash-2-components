<link rel="stylesheet" href="/main.css">
<div class="ce418bee7add3470fb6f12f79bf463f02" id="ccac6ed870d77410488aa063826613f6d">
    <!-- Write your code here -->
    <div class="container ce418bee7add3470fb6f12f79bf463f02__wrapper">
        <div class="ce418bee7add3470fb6f12f79bf463f02__left">
            <img src="<?php echo e($content->thumbnail); ?>" alt="">
        </div>
        <div class="ce418bee7add3470fb6f12f79bf463f02__right">
            <h2><?php echo e($content->title); ?></h2>
            <p><?php echo $content->content; ?></p>
            <div class="ce418bee7add3470fb6f12f79bf463f02__items">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="ce418bee7add3470fb6f12f79bf463f02__item" href="<?php echo e($item->alias); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e($content->alias); ?>" class="ce418bee7add3470fb6f12f79bf463f02__button">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
            <div class="ce418bee7add3470fb6f12f79bf463f02__contact">
                <p>Bạn đang có ý tưởng thiết kế bộ nhận diện thương hiệu riêng nhưng chưa biết bắt đầu từ đâu?</p>
                <a href="#" class="">Liên hệ ngay!</a>
            </div>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/GraphicAndBranding/src/GraphicAndBranding/index.blade.php ENDPATH**/ ?>