<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h1>Welcome to Workopia</h1>
    <?php if (isset($component)) { $__componentOriginald1f9e770aac5dfb615f1de456f01f9e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald1f9e770aac5dfb615f1de456f01f9e3 = $attributes; } ?>
<?php $component = App\View\Components\BottomBanner::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bottom-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BottomBanner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald1f9e770aac5dfb615f1de456f01f9e3)): ?>
<?php $attributes = $__attributesOriginald1f9e770aac5dfb615f1de456f01f9e3; ?>
<?php unset($__attributesOriginald1f9e770aac5dfb615f1de456f01f9e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald1f9e770aac5dfb615f1de456f01f9e3)): ?>
<?php $component = $__componentOriginald1f9e770aac5dfb615f1de456f01f9e3; ?>
<?php unset($__componentOriginald1f9e770aac5dfb615f1de456f01f9e3); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>

    <?php /**PATH /home/lakshmee/Lakshmee Projects/PHP/Laravel/Workopia/resources/views/pages/index.blade.php ENDPATH**/ ?>