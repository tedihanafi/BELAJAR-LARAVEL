

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Detail Mobil</h1>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <th style="border: 1px solid #007bff; padding: 10px; text-align: left;">Atribut</th>
            <th style="border: 1px solid #007bff; padding: 10px; text-align: left;">Detail</th>
        </tr>
        <tr>
            <td style="border: 1px solid #ccc; padding: 10px;">Nama Mobil</td>
            <td style="border: 1px solid #ccc; padding: 10px;"><?php echo e($mobil->nama); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #ccc; padding: 10px;">Merek</td>
            <td style="border: 1px solid #ccc; padding: 10px;"><?php echo e($mobil->merek); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #ccc; padding: 10px;">Kategori</td>
            <td style="border: 1px solid #ccc; padding: 10px;"><?php echo e($mobil->category->name); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #ccc; padding: 10px;">Nomor Polisi</td>
            <td style="border: 1px solid #ccc; padding: 10px;"><?php echo e($mobil->nopol); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #ccc; padding: 10px;">Warna</td>
            <td style="border: 1px solid #ccc; padding: 10px;"><?php echo e($mobil->warna); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #ccc; padding: 10px;">Tahun</td>
            <td style="border: 1px solid #ccc; padding: 10px;"><?php echo e($mobil->tahun); ?></td>
        </tr>
    </table>

    <a href="<?php echo e(route('mobils.index')); ?>" style="display: inline-block; margin-top: 20px; color: #007bff; text-decoration: none; font-weight: bold;">Kembali ke Daftar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud-roleadmin-laravel11\resources\views/mobils/show.blade.php ENDPATH**/ ?>