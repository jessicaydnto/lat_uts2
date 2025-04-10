

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto py-10 px-6">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="bg-gray-100 p-6 rounded-xl shadow-md">
                <div class="flex justify-between items-center mb-2">
                    <div class="text-xl font-bold"><?php echo e($flight->code); ?></div>
                    <div class="text-sm font-semibold text-gray-700"><?php echo e($flight->departure); ?> → <?php echo e($flight->arrival); ?></div>
                </div>
                <div class="text-sm text-gray-800">
                    <p><strong>Departure</strong><br><?php echo e(\Carbon\Carbon::parse($flight->departure_time)->format('l, d F Y, H:i')); ?></p>
                    <p class="mt-2"><strong>Arrived</strong><br><?php echo e(\Carbon\Carbon::parse($flight->arrival_time)->format('l, d F Y, H:i')); ?></p>
                </div>
                <div class="mt-4 flex gap-2">
                    <a href="/flights/book/<?php echo e($flight->id); ?>" class="px-4 py-2 bg-gray-800 text-white text-sm rounded hover:bg-gray-700">Book Ticket</a>
                    <a href="/flights/ticket/<?php echo e($flight->id); ?>" class="px-4 py-2 bg-gray-300 text-black text-sm rounded hover:bg-gray-400">View Details</a>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\yudia\OneDrive\Documents\UNIVERSITY\4TH SEMESTER\WFD D\lat_uts\airplane\resources\views/flights/index.blade.php ENDPATH**/ ?>