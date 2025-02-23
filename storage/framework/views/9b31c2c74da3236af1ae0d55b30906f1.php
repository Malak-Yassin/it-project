<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" <?php echo printHtmlAttributes('html'); ?>>
<!--begin::Head-->
<head>
    <base href=""/>
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content=""/>
    <link rel="canonical" href=""/>

    <?php echo includeFavicon(); ?>


    <!--begin::Fonts-->
    <?php echo includeFonts(); ?>

    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <?php $__currentLoopData = getGlobalAssets('css'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo sprintf('<link rel="stylesheet" href="%s">', asset($path)); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Vendor Stylesheets(used by this page)-->
    <?php $__currentLoopData = getVendors('css'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo sprintf('<link rel="stylesheet" href="%s">', asset($path)); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!--end::Vendor Stylesheets-->

    <!--begin::Custom Stylesheets(optional)-->
    <?php $__currentLoopData = getCustomCss(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo sprintf('<link rel="stylesheet" href="%s">', asset($path)); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!--end::Custom Stylesheets-->
</head>
<!--end::Head-->

<!--begin::Body-->
<body <?php echo printHtmlClasses('body'); ?> <?php echo printHtmlAttributes('body'); ?>>

<?php echo $__env->make('partials/theme-mode/_init', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<?php $__currentLoopData = getGlobalAssets(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo sprintf('<script src="%s"></script>', asset($path)); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used by this page)-->
<?php $__currentLoopData = getVendors('js'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo sprintf('<script src="%s"></script>', asset($path)); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(optional)-->
<?php $__currentLoopData = getCustomJs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo sprintf('<script src="%s"></script>', asset($path)); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--end::Custom Javascript-->
<!--end::Javascript-->

</body>
<!--end::Body-->

</html>
<?php /**PATH D:\Data\laravel_demo1\starterkit\resources\views/layout/master.blade.php ENDPATH**/ ?>