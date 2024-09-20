<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post List - Tutorial CRUD Laravel 8 @ qadrlabs.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <?php if(session('error')): ?>
                    <div class="alert alert-error">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="<?php echo e(route('post.create')); ?>" class="btn btn-md btn-success mb-3 float-right">New
                            Post</a>

                        <table class="table table-bordered mt-1">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Create At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($post->title); ?></td>
                                        <td><?php echo e($post->status == 0 ? 'Draft' : 'Publish'); ?></td>
                                        <td><?php echo e($post->created_at->format('d-m-Y')); ?></td>
                                        <td class="text-center">
                                            
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit posts', Post::class)): ?>
                                                <a href="<?php echo e(route('post.edit', $post->id)); ?>"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                            <?php endif; ?>

                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete posts', Post::class)): ?>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="<?php echo e(route('post.destroy', $post->id)); ?>" method="POST">

                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            <?php endif; ?>

                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('publish posts', Post::class)): ?>
                                                <form onsubmit="return confirm('Publish post ini?');"
                                                    action="<?php echo e(route('post.publish', $post->id)); ?>" method="POST">

                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <button type="submit" class="btn btn-sm btn-info">Publish</button>
                                                </form>
                                            <?php endif; ?>

                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('unpublish posts', Post::class)): ?>
                                                <form onsubmit="return confirm('Unpublish post ini?');"
                                                    action="<?php echo e(route('post.unpublish', $post->id)); ?>" method="POST">

                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <button type="submit" class="btn btn-sm btn-info">Unpublish</button>
                                                </form>
                                            <?php endif; ?>
                                            
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td class="text-center text-mute" colspan="4">Data post tidak tersedia</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\BELAJAR-LARAVEL\belajar-role-admin-laravel8\resources\views/posts/index.blade.php ENDPATH**/ ?>