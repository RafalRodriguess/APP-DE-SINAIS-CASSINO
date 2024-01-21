
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
     <div class="page-title-heading">
        <div class="page-title-icon">
        <i class="pe-7s-check icon-gradient bg-mean-fruit"></i>
        </div>
    <div>Adicionar Video</div>
     </div>
     <div class="page-title-actions">
        <a href="<?php echo e(url('app/videos/index')); ?>" class="btn-shadow mr-3 btn btn-warning" name="button">
         <i class="fas fa-arrow-left"></i>&nbsp;Voltar
        </a>
     </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="<?php echo e(url('app/videos/store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                 
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="tempo">Tempo(Em Segundos)</label>
                                    <input id="tempo" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tempo" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="valor">Valor($)</label>
                                    <input id="valor" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="saque" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="bonus">Bonus(% Porcentual)</label>
                                    <input id="bonus" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="bonus" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="video">Video</label>
                                    <input id="video" type="file" class="form-control <?php $__errorArgs = ['video'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="video"  required  autofocus>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <?php if(isset($role)): ?>
                                    <i class="fas fa-arrow-circle-up"></i>&nbsp;Mudar</button>
                                    <?php else: ?>
                                    <i class="fas fa-plus-circle"></i>&nbsp;Criar</button>
                                    <?php endif; ?>   
                                </button>


                            </div>

                        </div>
                    </div>

                </div>
           </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script>
    $(document).ready(function() {
        $('.roleSelect').select2();
    });
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\s\resources\views/backend/video/form.blade.php ENDPATH**/ ?>