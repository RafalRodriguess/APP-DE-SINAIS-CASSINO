<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(setting('site_title') ?? config('app.name', 'Laravel')); ?></title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/frontend.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

     <?php echo HCaptcha::renderJs(); ?>



     <!-- <style>
        canvas{
            height: 400px;
            width: 100%;
        }
    </style> -->
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(setting('site_title')); ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Acessar')); ?></a>
                        </li>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrar')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'access-dashboard')): ?>
                                <a class="dropdown-item" href="<?php echo e(url('app/users')); ?>">
                                    <?php echo e(__('Usuarios')); ?>

                                </a>
                                <?php endif; ?>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Sair')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
<!-- Scripts -->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script src="<?php echo e(asset('js/frontend.js')); ?>" defer></script>
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
<script>

    
var video = document.querySelector('video');
var progress = $('#progress');

progress.attr('data-progress');

if(progress.attr('data-progress') >= 100 ){
    Swal.fire({
        title: "Saque seu valor!",
        icon: "success",
        confirmButtonText: "Sacar",
    }).then((result) => {
        if (result.isConfirmed) {

            var formData = {
                '_token': "<?php echo e(csrf_token()); ?>" 
            };

            var url = "<?php echo e(url('app/ajax/sacar')); ?>";
          
            $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    dataType: 'JSON',
                    encode: true,
                    success: function(response, status, xhr) {
                        Swal.fire("Cantidad retirada!", "", "success");
                    },
                    error: function(xhr, status, error) {
                        Swal.fire("¡Error al retirar!", "", "error");
                    }
                });

            Swal.fire("Cantidad retirada!", "", "success");
        }  
    });
}

video.addEventListener('timeupdate', function (event) {
    if (video.currentTime >= 5.2 && video.currentTime <= 5.3) {
        // Swal.fire({
        //     title: "Moedas!",
        //     text: $(this).attr('bonus')"Vc ganhou moedas!",
        //     icon: "success"
        // });
        console.log('Tiempo exacto')
    }else if(video.currentTime >= (video.duration - 1)) {
        console.log('Vídeo terminado')
    }else if(video.currentTime >= (video.duration - 2) && video.currentTime <= (video.duration - 1.9)) {
        // video.style.marginTop = "-12050px";
        // Swal.fire({
        //     title: "Moedas!",
        //     text: "Vc ganhou moedas!",
        //     icon: "success"
        // });

                var url = "<?php echo e(url('app/ajax/bonus')); ?>";
                var formData = {
                    'bonus': $(this).attr('data-bonus'),
                    'saque': $(this).attr('data-saque'),
                    '_token': "<?php echo e(csrf_token()); ?>" 
                };

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    dataType: 'JSON',
                    encode: true,
                    success: function(response, status, xhr) {

                        console.log(response);
                        console.log($(this).attr('bonus'));
                        Swal.fire({
                            title: "Moedas!",
                            text: "Monedas adquiridas con éxito!",
                            icon: "success"
                        });
                    }
                    // error: function(xhr, status, error) {
                    //     Swal.fire({
                    //         title: "Moedas!",
                    //         text: "Algum erro aconteceu!",
                    //         icon: "error"
                    //     });
                    // }
                });

        location.reload();
    }
});

// video.addEventListener('timeupdate', function (event) {
//     if (video.currentTime >= $(this).attr("video-time")) {

//         var url = "ajax/bonus";
//         var formData = {
//             'bonus': '1',
//         };

//         $.ajax({
//             type: 'POST',
//             url: url,
//             data: formData,
//             dataType: 'JSON',
//             encode: true,
//             success: function(response, status, xhr) {
//                 Swal.fire({
//                     title: "Moedas!",
//                     text: "Moedas adquiridas com sucesso!",
//                     icon: "success"
//                 });
//             },
//             error: function(xhr, status, error) {
//                 Swal.fire({
//                     title: "Moedas!",
//                     text: "Algum erro aconteceu!",
//                     icon: "error"
//                 });
//             }
//         });
//     }
// });


//   var canvas = document.getElementById('canvas');
//   var ctx = canvas.getContext('2d');
//   var video = document.querySelector('video');

//   video.setAttribute('play', true);

//   video.addEventListener('play', function() {
//     var $this = this; //cache
//     (function loop() {
//       if (!$this.paused && !$this.ended) {
//         ctx.drawImage($this, 0, 0);
//         setTimeout(loop, 1000 / 30); // drawing at 30fps
//       }
//     })();
//   }, 0);


</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\s\resources\views/layouts/frontend/app.blade.php ENDPATH**/ ?>