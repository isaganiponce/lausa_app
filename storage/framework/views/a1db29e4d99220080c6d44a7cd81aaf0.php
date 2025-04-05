<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>MyApp</title>
    </head>
    <body>
        <?php if (isset($component)) { $__componentOriginal850419188ae35167c7319eecf5d82db1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal850419188ae35167c7319eecf5d82db1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-bar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal850419188ae35167c7319eecf5d82db1)): ?>
<?php $attributes = $__attributesOriginal850419188ae35167c7319eecf5d82db1; ?>
<?php unset($__attributesOriginal850419188ae35167c7319eecf5d82db1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal850419188ae35167c7319eecf5d82db1)): ?>
<?php $component = $__componentOriginal850419188ae35167c7319eecf5d82db1; ?>
<?php unset($__componentOriginal850419188ae35167c7319eecf5d82db1); ?>
<?php endif; ?>
        <div class = "container">
            <h1 class = "h2"><?php echo e($heading); ?></h1>
            <?php echo e($slot); ?>

        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\lausa-app\resources\views\components\layout.blade.php ENDPATH**/ ?>