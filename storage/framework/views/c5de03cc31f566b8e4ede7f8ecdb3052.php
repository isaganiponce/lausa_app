<div>
    Products:
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Category</td>
            </tr>
        </thead>
        
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product['id']); ?></td>
                <td><?php echo e($product['name']); ?></td>
                <td><?php echo e($product['category']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\lausa-app\resources\views\products\list.blade.php ENDPATH**/ ?>