

<?php $__env->startSection('content'); ?>
<div class="container">  

<h3>
     Daftar Album
     <a href="<?php echo e(url('/album/create')); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3> 
 
 
<table class="table table-bordered"> 
    <tr>   
        <th>ID</th> 
        <th>NAME</th> 
        <th>TEXT</th> 
        <th>PHOTO</th> 
    </tr> 
    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <tr> 
        <td><?php echo e($row->album_id); ?></td> 
        <td><?php echo e($row->album_name); ?></td> 
        <td><?php echo e($row->album_text); ?></td> 
        <td><?php echo e($row->album_photo); ?></td> 
        </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </table> 
</div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quis\resources\views/album/index.blade.php ENDPATH**/ ?>