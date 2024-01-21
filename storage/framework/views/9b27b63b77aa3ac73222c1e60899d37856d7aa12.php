<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(setting('site_title') ?? config('app.name', 'Laravel')); ?></title>


    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" id="apple-touch-icon" />
    <link rel="icon" id="favicon" href="utils/logo.png" />
    <link rel="manifest" id="manifest-app" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" charset="UTF-8"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/games.css">
    <link rel="stylesheet" href="./styles/penalty.css">
    
   


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
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                
            </div>
        </div>
    </nav>

    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
<!-- Scripts -->

<?php 
?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script src="<?php echo e(asset('js/frontend.js')); ?>" defer></script>
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
</body>
</html>
<?php /**PATH /home/u859157959/domains/squadgaming.online/public_html/resources/views/layouts/frontend/app.blade.php ENDPATH**/ ?>