
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    
                    <i class="fas fa-angellist"></i>
                </div>
                <div>Videos</div>
            </div>
            <div class="page-title-actions">
                <a href="<?php echo e(url('app/videos/create')); ?>" class="btn-shadow mr-3 btn btn-primary" name="button">
                    <i class="fas fa-plus-circle"></i>&nbsp;Adicionar Video
                </a>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="dataTable" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Tempo</th>
                    <th class="text-center">Saque($)</th>
                    <th class="text-center">Bonus(%)</th>
                    <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center text-muted"><?php echo e($loop->index+1); ?></td>
                        <td class="text-center"><?php echo e($item->name); ?></td>
                        <td class="text-center"><?php echo e($item->tempo); ?></td>
                        <td class="text-center"><?php echo e($item->saque); ?></td>
                        <td class="text-center"><?php echo e($item->bonus); ?></td>
                        <td class="text-center"><a href="<?php echo e(asset('video/'.$item->file)); ?>"><?php echo e($item->file); ?></a></td>
                       
                        <td class="text-center">

                            <button onclick="deleteData(<?php echo e($item->id); ?>)" type="button" class="btn btn-danger"><i
                                    class="fas fa-trash"></i></button>
                            <form id="delete-<?php echo e($item->id); ?>" method="POST"
                                  action="<?php echo e(route('app.videos.destroy', $item->id)); ?>" style="display:none;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\s\resources\views/backend/video/index.blade.php ENDPATH**/ ?>