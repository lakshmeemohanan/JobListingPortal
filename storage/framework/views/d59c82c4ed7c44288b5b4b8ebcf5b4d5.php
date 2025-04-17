<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"></link>
        <title><?php echo e($title ?? 'Workopia | Find and list jobs'); ?></title>
    </head>
    <body class="bg-gray-100">
        <?php if (isset($component)) { $__componentOriginal2a2e454b2e62574a80c8110e5f128b60 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a2e454b2e62574a80c8110e5f128b60 = $attributes; } ?>
<?php $component = App\View\Components\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Header::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $attributes = $__attributesOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__attributesOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $component = $__componentOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?> 
        <?php if(request()->is('/')): ?>
            <?php if (isset($component)) { $__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5 = $attributes; } ?>
<?php $component = App\View\Components\Hero::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Hero::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5)): ?>
<?php $attributes = $__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5; ?>
<?php unset($__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5)): ?>
<?php $component = $__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5; ?>
<?php unset($__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc69e7e520b7ab298a16b9471d7b29cde = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc69e7e520b7ab298a16b9471d7b29cde = $attributes; } ?>
<?php $component = App\View\Components\TopBanner::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('top-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TopBanner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc69e7e520b7ab298a16b9471d7b29cde)): ?>
<?php $attributes = $__attributesOriginalc69e7e520b7ab298a16b9471d7b29cde; ?>
<?php unset($__attributesOriginalc69e7e520b7ab298a16b9471d7b29cde); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc69e7e520b7ab298a16b9471d7b29cde)): ?>
<?php $component = $__componentOriginalc69e7e520b7ab298a16b9471d7b29cde; ?>
<?php unset($__componentOriginalc69e7e520b7ab298a16b9471d7b29cde); ?>
<?php endif; ?>
        <?php endif; ?>
         <main class="container mx-auto p-4 mt-4">
            <?php echo e($slot); ?>

        </main>
        <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    </body>
</html><?php /**PATH /home/lakshmee/Lakshmee Projects/PHP/Laravel/Workopia/resources/views/layout.blade.php ENDPATH**/ ?>