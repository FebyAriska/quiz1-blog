 

<?php $__env->startSection('content'); ?> 
 
<div class="container"> 
 
    <h3>Tambah Data Album</h3> 
    <form action="<?php echo e(url('/album')); ?>" method="POST"> 
        <?php echo csrf_field(); ?> 

        <div class="form-group">
            <label for="">ID</label>
            <input type="number" name="album_id" class="form-control">
        </div>

        <div class="form-group">
            <label for="">NAME</label>
            <input type="text" name="album_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="">TEXT</label>
            <input type="text" name="album_text" class="form-control">
        </div>

        <div class="form-group">
            <label for="">PHOTO</label>
            <input type="jpg" name="album_photo" class="form-control">
        </div>

        <div>
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
        
    </form> 
 </div> 

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quis\resources\views/album/add.blade.php ENDPATH**/ ?>