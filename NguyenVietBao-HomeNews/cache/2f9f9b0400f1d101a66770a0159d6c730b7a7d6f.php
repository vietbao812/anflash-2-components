<link rel="stylesheet" href="/main.css">
<div class="ceac9064ab6e54dd58dd62b4c3dcf324a" id="c5b81c3fbe5484abcbaab611664a81069">
    <!-- Write your code here -->

    <div class="container">
        <div class="left">
            <div class="left-image">
                <a href="">
                    <img src="<?php echo e($articles[1] -> thumbnail); ?>" alt="">
                </a>          
            </div>
            <div class="left-content">
                <div class="left-title">
                    <a href=""><?php echo e($greetings); ?></a>
                    <span class="day">
                    <?php
                        echo substr($articles[0] -> created_at, 0, 10)
                    ?>
                </span>
                </div>

                <h3><a class="title-name" href=""><?php echo e($articles[0]->title); ?></a></h3>
                <p class="description">
                    <?php 
                        echo substr($articles[0] -> content, 0, 499)
                    ?>
                </p>
                
            </div>
        </div>
        <div class="right">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="right-item">
                <a class="title" href=""><?php echo e($greetings); ?></a>
                <span class="day">
                    <?php
                        echo substr($article -> created_at, 0, 10)
                    ?>
                </span>
                <h3><a class="title-name" href=""><?php echo e($article -> title); ?></a></h3>
                <p class="description">
                    <?php 
                        echo substr($article -> content, 0, 299)
                    ?>
                </p>
                <a class="see-more" href="<?php echo e(route('/demo-routes//articles', ['alias' => $article->alias])); ?>">Xem thêm</a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            <a class="btn-see-more" href="">Xem thêm tin khác</a>
        </div>
    </div>

    <!-- <h1><?php echo e($greetings); ?></h1>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($article->title); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <h1>1111</h1>
    <div style="width: 100px; height: 100px; background-color: <?php echo e($variables["left-background-color"]); ?>;"></div> -->

    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
<?php /**PATH D:\ANFLASH\anflash-2-components\NguyenVietBao-HomeNews\src\HomeNews/index.blade.php ENDPATH**/ ?>