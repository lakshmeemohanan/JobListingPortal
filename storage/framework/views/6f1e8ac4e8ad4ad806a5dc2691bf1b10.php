<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Find your dream job']));

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

foreach (array_filter((['title' => 'Find your dream job']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<section
class="hero relative bg-cover bg-center bg-no-repeat h-80 flex items-center"
>
<div class="overlay"></div>
<div class="container mx-auto text-center z-10">
    <h2 class="text-4xl md:text-5xl text-white font-bold mb-8">
        <?php echo e($title); ?>

    </h2>
    <form class="block mx-5 space-y-2 md:mx-auto md:space-x-2">
        <input
            type="text"
            name="keywords"
            placeholder="Keywords"
            class="w-full md:w-72 px-4 py-3 focus:outline-none"
        />
        <input
            type="text"
            name="location"
            placeholder="Location"
            class="w-full md:w-72 px-4 py-3 focus:outline-none"
        />
        <button
            class="w-full md:w-auto bg-blue-700 hover:bg-blue-600 text-white px-4 py-3 focus:outline-none"
        >
            <i class="fa fa-search mr-1"></i> Search
        </button>
    </form>
</div>
</section><?php /**PATH /home/lakshmee/Lakshmee Projects/PHP/Laravel/Workopia/resources/views/components/hero.blade.php ENDPATH**/ ?>