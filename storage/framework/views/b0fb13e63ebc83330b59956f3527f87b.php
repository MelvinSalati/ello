<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($title ?? 'WhatsApp'); ?></title>

    <?php
        $cssMode = config('laravel-whatsapp.ui.css_mode', 'vite');
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($cssMode === 'vite'): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php elseif($cssMode === 'standalone'): ?>
        <link rel="stylesheet" href="<?php echo e(route('whatsapp.ui.assets.css')); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php echo app('flux')->fluxAppearance(); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <style>[x-cloak]{display:none!important}</style>
</head>
<body class="min-h-screen bg-zinc-50 dark:bg-wa-canvas-dark">

<?php
    $prefix = config('laravel-whatsapp.ui.route_prefix', 'whatsapp');
?>

<?php if (isset($component)) { $__componentOriginale96c14d638c792103c11b984a4ed1896 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale96c14d638c792103c11b984a4ed1896 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::header','data' => ['sticky' => true,'class' => 'bg-white dark:bg-wa-surface-dark border-b border-zinc-200 dark:border-zinc-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sticky' => true,'class' => 'bg-white dark:bg-wa-surface-dark border-b border-zinc-200 dark:border-zinc-700']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <?php if (isset($component)) { $__componentOriginal39d28151b541c57956bc721586eadae9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39d28151b541c57956bc721586eadae9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::container','data' => ['class' => '!max-w-screen-2xl flex items-center gap-6 py-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!max-w-screen-2xl flex items-center gap-6 py-0']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


        
        <?php if (isset($component)) { $__componentOriginal6cdb42459f68d5ce2e97131ae988e57c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cdb42459f68d5ce2e97131ae988e57c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::brand','data' => ['href' => url($prefix),'name' => 'WhatsApp','class' => 'dark:hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::brand'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix)),'name' => 'WhatsApp','class' => 'dark:hidden']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

             <?php $__env->slot('logo', null, []); ?> 
                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-wa-500 text-white">
                    <?php if (isset($component)) { $__componentOriginal0a0cf1bc116bd79ae77f26af29c340e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a0cf1bc116bd79ae77f26af29c340e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.chat-bubble-oval-left','data' => ['variant' => 'solid','class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.chat-bubble-oval-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'solid','class' => 'size-5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a0cf1bc116bd79ae77f26af29c340e4)): ?>
<?php $attributes = $__attributesOriginal0a0cf1bc116bd79ae77f26af29c340e4; ?>
<?php unset($__attributesOriginal0a0cf1bc116bd79ae77f26af29c340e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a0cf1bc116bd79ae77f26af29c340e4)): ?>
<?php $component = $__componentOriginal0a0cf1bc116bd79ae77f26af29c340e4; ?>
<?php unset($__componentOriginal0a0cf1bc116bd79ae77f26af29c340e4); ?>
<?php endif; ?>
                </div>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cdb42459f68d5ce2e97131ae988e57c)): ?>
<?php $attributes = $__attributesOriginal6cdb42459f68d5ce2e97131ae988e57c; ?>
<?php unset($__attributesOriginal6cdb42459f68d5ce2e97131ae988e57c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cdb42459f68d5ce2e97131ae988e57c)): ?>
<?php $component = $__componentOriginal6cdb42459f68d5ce2e97131ae988e57c; ?>
<?php unset($__componentOriginal6cdb42459f68d5ce2e97131ae988e57c); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal6cdb42459f68d5ce2e97131ae988e57c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cdb42459f68d5ce2e97131ae988e57c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::brand','data' => ['href' => url($prefix),'name' => 'WhatsApp','class' => 'hidden dark:flex']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::brand'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix)),'name' => 'WhatsApp','class' => 'hidden dark:flex']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

             <?php $__env->slot('logo', null, []); ?> 
                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-wa-600 text-white">
                    <?php if (isset($component)) { $__componentOriginal0a0cf1bc116bd79ae77f26af29c340e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a0cf1bc116bd79ae77f26af29c340e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.chat-bubble-oval-left','data' => ['variant' => 'solid','class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.chat-bubble-oval-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'solid','class' => 'size-5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a0cf1bc116bd79ae77f26af29c340e4)): ?>
<?php $attributes = $__attributesOriginal0a0cf1bc116bd79ae77f26af29c340e4; ?>
<?php unset($__attributesOriginal0a0cf1bc116bd79ae77f26af29c340e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a0cf1bc116bd79ae77f26af29c340e4)): ?>
<?php $component = $__componentOriginal0a0cf1bc116bd79ae77f26af29c340e4; ?>
<?php unset($__componentOriginal0a0cf1bc116bd79ae77f26af29c340e4); ?>
<?php endif; ?>
                </div>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cdb42459f68d5ce2e97131ae988e57c)): ?>
<?php $attributes = $__attributesOriginal6cdb42459f68d5ce2e97131ae988e57c; ?>
<?php unset($__attributesOriginal6cdb42459f68d5ce2e97131ae988e57c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cdb42459f68d5ce2e97131ae988e57c)): ?>
<?php $component = $__componentOriginal6cdb42459f68d5ce2e97131ae988e57c; ?>
<?php unset($__componentOriginal6cdb42459f68d5ce2e97131ae988e57c); ?>
<?php endif; ?>

        
        <?php if (isset($component)) { $__componentOriginald33a3439ec8f8da64b388b23a8637b39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald33a3439ec8f8da64b388b23a8637b39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.index','data' => ['class' => '-mb-px max-lg:hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '-mb-px max-lg:hidden']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'squares-2x2','href' => url($prefix),'current' => request()->path() === $prefix]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'squares-2x2','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix)),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->path() === $prefix)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Overview <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'device-phone-mobile','href' => url($prefix.'/sessions'),'current' => request()->is($prefix.'/sessions*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'device-phone-mobile','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/sessions')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is($prefix.'/sessions*'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Sessions <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'pencil-square','href' => url($prefix.'/compose'),'current' => request()->is($prefix.'/compose*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'pencil-square','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/compose')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is($prefix.'/compose*'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Compose <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'chat-bubble-left-right','href' => url($prefix.'/chats'),'current' => request()->is($prefix.'/chats*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'chat-bubble-left-right','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/chats')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is($prefix.'/chats*'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Conversations <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'user-group','href' => url($prefix.'/groups'),'current' => request()->is($prefix.'/groups*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'user-group','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/groups')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is($prefix.'/groups*'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Groups <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'users','href' => url($prefix.'/contacts'),'current' => request()->is($prefix.'/contacts*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'users','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/contacts')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is($prefix.'/contacts*'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Contacts <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'bolt','href' => url($prefix.'/webhooks'),'current' => request()->is($prefix.'/webhooks*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'bolt','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/webhooks')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is($prefix.'/webhooks*'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Webhooks <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'heart','href' => url($prefix.'/status'),'current' => request()->is($prefix.'/status*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heart','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/status')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is($prefix.'/status*'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Status <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald33a3439ec8f8da64b388b23a8637b39)): ?>
<?php $attributes = $__attributesOriginald33a3439ec8f8da64b388b23a8637b39; ?>
<?php unset($__attributesOriginald33a3439ec8f8da64b388b23a8637b39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald33a3439ec8f8da64b388b23a8637b39)): ?>
<?php $component = $__componentOriginald33a3439ec8f8da64b388b23a8637b39; ?>
<?php unset($__componentOriginald33a3439ec8f8da64b388b23a8637b39); ?>
<?php endif; ?>

        
        <?php if (isset($component)) { $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::dropdown','data' => ['class' => 'lg:hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'lg:hidden']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['icon' => 'bars-2','variant' => 'ghost','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'bars-2','variant' => 'ghost','size' => 'sm']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal0acbef9d8e9b45c80d953734a49636ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0acbef9d8e9b45c80d953734a49636ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'squares-2x2','href' => url($prefix)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'squares-2x2','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Overview <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'device-phone-mobile','href' => url($prefix.'/sessions')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'device-phone-mobile','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/sessions'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Sessions <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'pencil-square','href' => url($prefix.'/compose')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'pencil-square','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/compose'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Compose <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'chat-bubble-left-right','href' => url($prefix.'/chats')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'chat-bubble-left-right','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/chats'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Conversations <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'user-group','href' => url($prefix.'/groups')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'user-group','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/groups'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Groups <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'users','href' => url($prefix.'/contacts')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'users','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/contacts'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Contacts <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'bolt','href' => url($prefix.'/webhooks')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'bolt','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/webhooks'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Webhooks <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'heart','href' => url($prefix.'/status')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heart','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/status'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Status <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0acbef9d8e9b45c80d953734a49636ad)): ?>
<?php $attributes = $__attributesOriginal0acbef9d8e9b45c80d953734a49636ad; ?>
<?php unset($__attributesOriginal0acbef9d8e9b45c80d953734a49636ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0acbef9d8e9b45c80d953734a49636ad)): ?>
<?php $component = $__componentOriginal0acbef9d8e9b45c80d953734a49636ad; ?>
<?php unset($__componentOriginal0acbef9d8e9b45c80d953734a49636ad); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $attributes = $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $component = $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal4a4f7aa062a095c651c2f80bb685a42a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::spacer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::spacer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a)): ?>
<?php $attributes = $__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a; ?>
<?php unset($__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a4f7aa062a095c651c2f80bb685a42a)): ?>
<?php $component = $__componentOriginal4a4f7aa062a095c651c2f80bb685a42a; ?>
<?php unset($__componentOriginal4a4f7aa062a095c651c2f80bb685a42a); ?>
<?php endif; ?>

        
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('whatsapp.status-indicator', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-1369705853-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>


        
        <div x-data="{ value: $flux.appearance }">
            <?php if (isset($component)) { $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::dropdown','data' => ['position' => 'bottom','align' => 'end']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom','align' => 'end']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                <?php if (isset($component)) { $__componentOriginalf5109f209df079b3a83484e1e6310749 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5109f209df079b3a83484e1e6310749 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::tooltip.index','data' => ['content' => 'Theme']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => 'Theme']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['variant' => 'ghost','size' => 'sm','ariaLabel' => 'Theme','class' => '!px-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'ghost','size' => 'sm','aria-label' => 'Theme','class' => '!px-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                        <?php if (isset($component)) { $__componentOriginald5f987720f2b51852a6659d9a2c7a66b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5f987720f2b51852a6659d9a2c7a66b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.sun','data' => ['xShow' => 'value === \'light\'','xCloak' => true,'class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.sun'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'value === \'light\'','x-cloak' => true,'class' => 'size-5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5f987720f2b51852a6659d9a2c7a66b)): ?>
<?php $attributes = $__attributesOriginald5f987720f2b51852a6659d9a2c7a66b; ?>
<?php unset($__attributesOriginald5f987720f2b51852a6659d9a2c7a66b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5f987720f2b51852a6659d9a2c7a66b)): ?>
<?php $component = $__componentOriginald5f987720f2b51852a6659d9a2c7a66b; ?>
<?php unset($__componentOriginald5f987720f2b51852a6659d9a2c7a66b); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal8aa8d5bc914d8b570a9db7c847a44cc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8aa8d5bc914d8b570a9db7c847a44cc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.moon','data' => ['xShow' => 'value === \'dark\'','xCloak' => true,'class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.moon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'value === \'dark\'','x-cloak' => true,'class' => 'size-5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8aa8d5bc914d8b570a9db7c847a44cc2)): ?>
<?php $attributes = $__attributesOriginal8aa8d5bc914d8b570a9db7c847a44cc2; ?>
<?php unset($__attributesOriginal8aa8d5bc914d8b570a9db7c847a44cc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8aa8d5bc914d8b570a9db7c847a44cc2)): ?>
<?php $component = $__componentOriginal8aa8d5bc914d8b570a9db7c847a44cc2; ?>
<?php unset($__componentOriginal8aa8d5bc914d8b570a9db7c847a44cc2); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal7906b2bbeb0e6efeed16189cac9d419a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7906b2bbeb0e6efeed16189cac9d419a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.computer-desktop','data' => ['xShow' => 'value === \'system\'','xCloak' => true,'class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.computer-desktop'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'value === \'system\'','x-cloak' => true,'class' => 'size-5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7906b2bbeb0e6efeed16189cac9d419a)): ?>
<?php $attributes = $__attributesOriginal7906b2bbeb0e6efeed16189cac9d419a; ?>
<?php unset($__attributesOriginal7906b2bbeb0e6efeed16189cac9d419a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7906b2bbeb0e6efeed16189cac9d419a)): ?>
<?php $component = $__componentOriginal7906b2bbeb0e6efeed16189cac9d419a; ?>
<?php unset($__componentOriginal7906b2bbeb0e6efeed16189cac9d419a); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $attributes = $__attributesOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__attributesOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $component = $__componentOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__componentOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                    <?php if (isset($component)) { $__componentOriginal48a7a6275c4dbe43f3b08c99bf9c2ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48a7a6275c4dbe43f3b08c99bf9c2ce1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.radio.group','data' => ['xModel' => 'value','xOn:change' => '$flux.appearance = value']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.radio.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-model' => 'value','x-on:change' => '$flux.appearance = value']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                        <?php if (isset($component)) { $__componentOriginal763facc893e4de8b6e8106f07c0fccb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763facc893e4de8b6e8106f07c0fccb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.radio.index','data' => ['value' => 'light','icon' => 'sun']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'light','icon' => 'sun']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Light <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763facc893e4de8b6e8106f07c0fccb4)): ?>
<?php $attributes = $__attributesOriginal763facc893e4de8b6e8106f07c0fccb4; ?>
<?php unset($__attributesOriginal763facc893e4de8b6e8106f07c0fccb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763facc893e4de8b6e8106f07c0fccb4)): ?>
<?php $component = $__componentOriginal763facc893e4de8b6e8106f07c0fccb4; ?>
<?php unset($__componentOriginal763facc893e4de8b6e8106f07c0fccb4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal763facc893e4de8b6e8106f07c0fccb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763facc893e4de8b6e8106f07c0fccb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.radio.index','data' => ['value' => 'dark','icon' => 'moon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'dark','icon' => 'moon']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
Dark <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763facc893e4de8b6e8106f07c0fccb4)): ?>
<?php $attributes = $__attributesOriginal763facc893e4de8b6e8106f07c0fccb4; ?>
<?php unset($__attributesOriginal763facc893e4de8b6e8106f07c0fccb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763facc893e4de8b6e8106f07c0fccb4)): ?>
<?php $component = $__componentOriginal763facc893e4de8b6e8106f07c0fccb4; ?>
<?php unset($__componentOriginal763facc893e4de8b6e8106f07c0fccb4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal763facc893e4de8b6e8106f07c0fccb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763facc893e4de8b6e8106f07c0fccb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.radio.index','data' => ['value' => 'system','icon' => 'computer-desktop']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'system','icon' => 'computer-desktop']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
System <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763facc893e4de8b6e8106f07c0fccb4)): ?>
<?php $attributes = $__attributesOriginal763facc893e4de8b6e8106f07c0fccb4; ?>
<?php unset($__attributesOriginal763facc893e4de8b6e8106f07c0fccb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763facc893e4de8b6e8106f07c0fccb4)): ?>
<?php $component = $__componentOriginal763facc893e4de8b6e8106f07c0fccb4; ?>
<?php unset($__componentOriginal763facc893e4de8b6e8106f07c0fccb4); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48a7a6275c4dbe43f3b08c99bf9c2ce1)): ?>
<?php $attributes = $__attributesOriginal48a7a6275c4dbe43f3b08c99bf9c2ce1; ?>
<?php unset($__attributesOriginal48a7a6275c4dbe43f3b08c99bf9c2ce1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48a7a6275c4dbe43f3b08c99bf9c2ce1)): ?>
<?php $component = $__componentOriginal48a7a6275c4dbe43f3b08c99bf9c2ce1; ?>
<?php unset($__componentOriginal48a7a6275c4dbe43f3b08c99bf9c2ce1); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a)): ?>
<?php $attributes = $__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a; ?>
<?php unset($__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a)): ?>
<?php $component = $__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a; ?>
<?php unset($__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $attributes = $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $component = $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
        </div>

        
        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['href' => url($prefix.'/sessions'),'variant' => 'primary','size' => 'sm','icon' => 'plus','class' => '!bg-wa-600 hover:!bg-wa-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url($prefix.'/sessions')),'variant' => 'primary','size' => 'sm','icon' => 'plus','class' => '!bg-wa-600 hover:!bg-wa-700']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            New session
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39d28151b541c57956bc721586eadae9)): ?>
<?php $attributes = $__attributesOriginal39d28151b541c57956bc721586eadae9; ?>
<?php unset($__attributesOriginal39d28151b541c57956bc721586eadae9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39d28151b541c57956bc721586eadae9)): ?>
<?php $component = $__componentOriginal39d28151b541c57956bc721586eadae9; ?>
<?php unset($__componentOriginal39d28151b541c57956bc721586eadae9); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale96c14d638c792103c11b984a4ed1896)): ?>
<?php $attributes = $__attributesOriginale96c14d638c792103c11b984a4ed1896; ?>
<?php unset($__attributesOriginale96c14d638c792103c11b984a4ed1896); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale96c14d638c792103c11b984a4ed1896)): ?>
<?php $component = $__componentOriginale96c14d638c792103c11b984a4ed1896; ?>
<?php unset($__componentOriginale96c14d638c792103c11b984a4ed1896); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal95c5505ccad18880318521d2bba3eac7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95c5505ccad18880318521d2bba3eac7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::main','data' => ['container' => true,'class' => '!max-w-screen-2xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['container' => true,'class' => '!max-w-screen-2xl']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal95c5505ccad18880318521d2bba3eac7)): ?>
<?php $attributes = $__attributesOriginal95c5505ccad18880318521d2bba3eac7; ?>
<?php unset($__attributesOriginal95c5505ccad18880318521d2bba3eac7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal95c5505ccad18880318521d2bba3eac7)): ?>
<?php $component = $__componentOriginal95c5505ccad18880318521d2bba3eac7; ?>
<?php unset($__componentOriginal95c5505ccad18880318521d2bba3eac7); ?>
<?php endif; ?>

<?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>
<?php /**PATH C:\Users\ADMIN\Downloads\wala\wala\vendor\kstmostofa\laravel-whatsapp\src/../resources/views/layouts/app.blade.php ENDPATH**/ ?>