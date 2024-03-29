
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-check icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Nível</div>
            </div>
            <div class="page-title-actions">
                <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'role-create')): ?>
                <a href="<?php echo e(route('app.roles.create')); ?>" class="btn-shadow mr-3 btn btn-primary" name="button">
                    <i class="fas fa-plus-circle"></i>&nbsp;Create Role
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>



    <div class="main-card mb-3 card">

        <div class="card-body">
            <table style="width: 100%;" id="dataTable" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nível</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Permission</th>
                    <th class="text-center">Cadastro</th>
                    <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center text-muted"><?php echo e($loop->index+1); ?></td>
                        <td class="text-center"><?php echo e($item->name); ?></td>
                        <td class="text-center"><?php echo e($item->name_bn); ?></td>
                        <td class="text-center">
                            <?php if($item->permissions->count() >0): ?>
                                <span class="badge badge-info"><?php echo e($item->permissions->count()); ?></span>
                            <?php else: ?>
                                <span class="badge badge-warning">SEM PERMISSÃO</span>
                            <?php endif; ?>
                        </td>
                        <td class="text-center"><?php echo e($item->created_at->diffForHumans()); ?></td>
                        <td class="text-center">
                            <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'role-update')): ?>
                            <a href="<?php echo e(route('app.roles.edit', $item->id)); ?>" class="btn btn-primary"><i
                                    class="fas fa-edit"></i></a>
                            <?php endif; ?>

                            <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'role-delete')): ?>
                            <?php if($item->deletable == true): ?>
                                <button onclick="deleteData(<?php echo e($item->id); ?>)" type="button" class="btn btn-danger"><i
                                        class="fas fa-trash"></i></button>
                                <form id="delete-<?php echo e($item->id); ?>" method="POST"
                                      action="<?php echo e(route('app.roles.destroy', $item->id)); ?>" style="display:none;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                </form>
                            <?php endif; ?>
                            <?php endif; ?>
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

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u859157959/domains/squadgaming.online/public_html/resources/views/backend/roles/index.blade.php ENDPATH**/ ?>