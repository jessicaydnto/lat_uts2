

<?php $__env->startSection('content'); ?>
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Ticket Booking for <?php echo e($flight->code); ?></h2>
    <p class="text-sm mb-2"><?php echo e($flight->departure); ?> → <?php echo e($flight->arrival); ?></p>
    <p class="text-sm text-gray-600 mb-4">
        Departure: <strong><?php echo e(\Carbon\Carbon::parse($flight->departure_time)->format('l, d F Y, H:i')); ?></strong><br>
        Arrival: <strong><?php echo e(\Carbon\Carbon::parse($flight->arrival_time)->format('l, d F Y, H:i')); ?></strong>
    </p>

    <form method="POST" action="<?php echo e(url('/ticket/submit')); ?>">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="flight_id" value="<?php echo e($flight->id); ?>">

        <div class="mb-4">
            <label class="block text-sm font-medium">Passenger Name</label>
            <input type="text" name="name" required class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Passenger Phone</label>
            <input type="text" name="phone" required class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Seat Number</label>
            <input type="text" name="seat_number" required class="w-full border rounded p-2">
        </div>

        <div class="flex justify-between">
            <a href="/flights" class="px-4 py-2 bg-gray-400 text-white rounded">Cancel</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Book Ticket</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\yudia\OneDrive\Documents\UNIVERSITY\4TH SEMESTER\WFD D\lat_uts\airplane\resources\views/tickets/book.blade.php ENDPATH**/ ?>