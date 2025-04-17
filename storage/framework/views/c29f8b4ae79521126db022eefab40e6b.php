<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['heading' => 'Unlock Your Career Potential', 'subheading' => 'Discover the perfect job opportunity for you.']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['heading' => 'Unlock Your Career Potential', 'subheading' => 'Discover the perfect job opportunity for you.']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<section class="bg-blue-900 text-white py-6 text-center">
    <div class="container mx-auto">
        <h2 class="text-3xl font-semibold">
            <?php echo e($heading); ?>

        </h2>
        <p class="text-lg mt-2">
            <?php echo e($subheading); ?>

        </p>
    </div>
</section><?php /**PATH /home/lakshmee/Lakshmee Projects/PHP/Laravel/Workopia/resources/views/components/top-banner.blade.php ENDPATH**/ ?>