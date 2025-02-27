
<link rel="stylesheet" href="<?php echo e(asset('auth_assets/project_assests/css/project_card.css ')); ?>">


<?php $__env->startSection('content'); ?>
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<link id="pagestyle" href="<?php echo e(asset('user_dash_assets/css/soft-ui-dashboard.css')); ?>?v=1.0.3" rel="stylesheet" />


<div class="container-fluid py-4 mt-5">
    <div class="page-header border-radius-xl mt-4" style="min-height:150px;background-image: url('user_dash_assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
<div class="profile">
    
    <div class=" row">
        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="col-md-4 col-sm-12">
        <a class='title ' href="<?php echo e(route('projects.show', $item['id'])); ?>">
            <div class="personal_info_container myworks" style="width: auto;height:380px">
                <div class="container_card">
                    <div class="">
                        <h2 class="h4"><?php echo e($item['title']); ?></h2>
                        <div>
                            <div class="flex">
                                <span>
                                    <ion-icon name="person-outline"></ion-icon>
                                </span>
                                <h5><?php echo e($item->sal_created_by->name); ?> </h5>
                            </div>
                            <div class="flex">
                                <span>
                                    <ion-icon name="time-outline"></ion-icon>
                                </span>
                                <span class="aut_pub"><?php echo e($item['created_at']); ?></span>

                            </div>
                        </div>

                        <div>
                            <?php echo e(Str::substr($item->description, 0, 80)); ?>...


                        </div>
                        <div class="liks_shows">
                            <ul class="d-flex">
                                <li>
                                    <a href="" class="w-50">
                                        <span> الفترة</span>
                                        <span><?php echo e($item['duration']); ?>يوم</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="">
                                        <span> السعر </span>
                                        <span><?php echo e($item['price']); ?>$</span>
                                    </a>
                                </li>
                                <li>

                                <li>
                                    <a href="" class="">
                                        <span>:العروض</span>
                                        <span> <?php echo e($item->sal_offers->count()); ?></span>
                                    </a>
                                </li>
                                
                                <a href="" class="">

                                    <span>الحالة </span>
                                    <?php if($item['status'] == 0): ?>
                                    <span class="text-success text-sm mr-2"> مفتوح </span>
                                    <span class="text-error text-sm mr-2"> بإنتظار الموافقة </span>
                                    <?php elseif($item['status'] == 2): ?>
                                    <span class="text-success text-sm mr-2"> مغلق </span>
                                    <?php endif; ?>


                                </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="hr">
                    </div>
                    <div class="liks_shows">
                        <a href="<?php echo e(route('projects.show', $item['id'])); ?>"><button class="show_more">
                                التقديم</button></a>
                    </div>
                </div>
            </div>
        </a>
</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>




    </div>

</div>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("website.layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Desktop\laaaaaaaaaaaaaaaaaaast\Enjezli-new\resources\views/website/users/project/index.blade.php ENDPATH**/ ?>