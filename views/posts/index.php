<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Posts</h2>
            <p class="text-secondary mb-0">Manage your blog posts</p>
        </div>

        <a href="/admin/posts/create" class="btn btn-dark px-4 py-2">
            + New Post
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr>
                        <th class="ps-4 py-3">ID</th>
                        <th>Title</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($posts)): ?>
                        <?php foreach ($posts as $post): ?>
                            <tr>
                                <td class="ps-4 text-secondary">
                                    #<?= $post->id ?>
                                </td>

                                <td class="fw-semibold">
                                    <?= htmlspecialchars($post->title) ?>
                                </td>

                                <td class="text-secondary small">
                                    <?= $post->created_at ?>
                                </td>

                                <td class="text-secondary small">
                                    <?= $post->updated_at ?>
                                </td>

                                <td class="text-end pe-4">
                                    <div class="btn-group btn-group-sm">
                                        <a href="/admin/posts/view?id=<?= $post->id ?>"
                                           class="btn btn-outline-primary">View</a>

                                        <a href="/admin/posts/edit?id=<?= $post->id ?>"
                                           class="btn btn-outline-secondary">Edit</a>

                                        <a href="/admin/posts/delete?id=<?= $post->id ?>"
                                           class="btn btn-outline-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center text-secondary py-5">
                                No posts found.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>

</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
