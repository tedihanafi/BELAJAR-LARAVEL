

<?php $__env->startSection('content'); ?>
    <h1>Tambah Mobil Baru</h1>
    <form action="<?php echo e(route('mobils.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        
        <label for="nama">Nama Mobil:</label>
        <input type="text" name="nama" required> <!-- Diubah menjadi nama -->
        
        <label for="merek">Merek:</label>
        <input type="text" name="merek" required>
        
        <label for="category_id">Kategori:</label>
        <select name="category_id" required>
            <option value="">Pilih Kategori</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <label for="nopol">Nopol:</label>
        <input type="text" name="nopol" required>

        <label for="warna">Warna:</label>
        <input type="text" name="warna" required>

        <label for="tahun">Tahun:</label>
        <input type="number" name="tahun" required>

        <button type="submit">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud-roleadmin-laravel11\resources\views/mobils/create.blade.php ENDPATH**/ ?>