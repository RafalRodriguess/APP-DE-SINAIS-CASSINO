

<?php 
   
?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header"><?php echo e(__('Ganhe moedas')); ?></div> -->
       
                <div class="col-md-12 d-flex text-center mt-2">
                    <div class="col text-start"><a href="#" id="saldo" class="btn btn-white">Balance: <?php echo e(auth()->user()->bonus); ?></a></div>
                    <div class="col"><a href="#" class="btn btn-white"><img class="logo w-100" src="<?php echo e(url('assets/logo.jpeg')); ?>" /></a></div>
                    <div class="col text-end"><a href="#" id="saque" class="btn btn-white">Retirar: <?php echo e(number_format(auth()->user()->saque, 2)); ?> $</a></div>
                </div> 
                <div class="card-body">
                    <div class="mb-4 mt-3">
                        <div class="progress" style="height: 30px;">
                            <div id="progress" data-progress="<?php echo e(auth()->user()->bonus % 1.2); ?>" class="progress-bar h-100" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(((auth()->user()->bonus / 100)*2.2)); ?>;">
                                <?php echo e(((auth()->user()->bonus / 100)*2.2)); ?>

                            </div>
                        </div>
                    </div>  
                  

                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <!-- <?php echo e(__('You are logged in!')); ?> -->
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\s\resources\views/home.blade.php ENDPATH**/ ?>