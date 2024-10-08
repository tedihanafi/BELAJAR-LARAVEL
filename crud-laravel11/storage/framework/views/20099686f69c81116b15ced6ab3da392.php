

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Daftar Mobil</h1>
        <a href="<?php echo e(route('mobils.create')); ?>" class="btn btn-primary">Tambah Mobil Baru</a>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Mobil</th>
                    <th>Kategori</th> 
                    <th>Nopol</th>
                    <th>Warna</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($mobil->nama); ?></td>
                        <td><?php echo e($mobil->category->name); ?></td> <!-- Mengakses nama kategori -->
                        <td><?php echo e($mobil->nopol); ?></td>
                        <td><?php echo e($mobil->warna); ?></td>
                        <td><?php echo e($mobil->tahun); ?></td>
                        <td>
                            <a href="<?php echo e(route('mobils.edit', $mobil->id)); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo e(route('mobils.show', $mobil->id)); ?>" class="btn btn-info">Lihat Detail</a>
                            
                            <!-- Form untuk menghapus mobil -->
                            <form action="<?php echo e(route('mobils.destroy', $mobil->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mobil ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud-roleadmin-laravel11\resources\views/mobils/index.blade.php ENDPATH**/ ?>