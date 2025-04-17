<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
              <a href="<?php echo e(url('/')); ?>">Workopia</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('/'))]); ?>Home <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/jobs','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('jobs'))]); ?>All Jobs <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/jobs/saved','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('jobs/saved'))]); ?>Saved Jobs <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/login','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('login')),'icon' => 'user']); ?>Login <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/register','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('register'))]); ?>Register <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/dashboard','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dashboard')),'icon' => 'gauge']); ?>Dashboard <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginale21d90f41251e682846d7af3e3cbbb3b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale21d90f41251e682846d7af3e3cbbb3b = $attributes; } ?>
<?php $component = App\View\Components\ButtonLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ButtonLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/jobs/create','icon' => 'edit']); ?>Create Job <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale21d90f41251e682846d7af3e3cbbb3b)): ?>
<?php $attributes = $__attributesOriginale21d90f41251e682846d7af3e3cbbb3b; ?>
<?php unset($__attributesOriginale21d90f41251e682846d7af3e3cbbb3b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale21d90f41251e682846d7af3e3cbbb3b)): ?>
<?php $component = $__componentOriginale21d90f41251e682846d7af3e3cbbb3b; ?>
<?php unset($__componentOriginale21d90f41251e682846d7af3e3cbbb3b); ?>
<?php endif; ?>
        </nav>
        <button
            id="hamburger"
            class="text-white md:hidden flex items-center"
        >
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu"
        class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
    <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/jobs','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('jobs')),'mobile' => true]); ?>All Jobs <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/jobs/saved','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('jobs/saved')),'mobile' => true]); ?>Saved Jobs <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/login','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('login')),'icon' => 'user','mobile' => true]); ?>Login <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/register','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('register')),'mobile' => true]); ?>Register <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df = $attributes; } ?>
<?php $component = App\View\Components\NavLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NavLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/dashboard','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dashboard')),'icon' => 'gauge','mobile' => true]); ?>Dashboard <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $attributes = $__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__attributesOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df)): ?>
<?php $component = $__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df; ?>
<?php unset($__componentOriginal5c5186fe0c5c5f30b7e4c343793be4df); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginale21d90f41251e682846d7af3e3cbbb3b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale21d90f41251e682846d7af3e3cbbb3b = $attributes; } ?>
<?php $component = App\View\Components\ButtonLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ButtonLink::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/jobs/create','icon' => 'edit','block' => true]); ?>Create Job <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale21d90f41251e682846d7af3e3cbbb3b)): ?>
<?php $attributes = $__attributesOriginale21d90f41251e682846d7af3e3cbbb3b; ?>
<?php unset($__attributesOriginale21d90f41251e682846d7af3e3cbbb3b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale21d90f41251e682846d7af3e3cbbb3b)): ?>
<?php $component = $__componentOriginale21d90f41251e682846d7af3e3cbbb3b; ?>
<?php unset($__componentOriginale21d90f41251e682846d7af3e3cbbb3b); ?>
<?php endif; ?>
    <i class="fa fa-edit"></i> Create Job
        </a>
    </nav>
</header>
<?php /**PATH /home/lakshmee/Lakshmee Projects/PHP/Laravel/Workopia/resources/views/components/header.blade.php ENDPATH**/ ?>