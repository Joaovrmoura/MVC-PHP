<?php require __DIR__ . '/partials/_header.php'; ?>

<!-- Main Content -->
<main class="col-md-9 col-lg-10 px-md-4">
    <header class="dashboard-header py-3 d-flex justify-content-between align-items-center">
        <h1 class="h3">posts</h1>
        <div>
            <i class="fas fa-bell me-3"></i>
            <i class="fas fa-user"></i>
        </div>
    </header>

    <!-- Posts Display Section -->
    <section class="row">
        <?php if ($post) : ?>
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Título: <?= htmlspecialchars($post->title) ?></h5>
                        <p class="card-text">Descrição: <?= htmlspecialchars($post->description) ?></p>
                        <p class="card-text">Criado em: <?= htmlspecialchars($post->created_at) ?></p>
                        <p class="card-text">Publicado: <?= $post->isPublished >= 1 ? 'Publicado' : 'Não Publicado' ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>

</main>
</div>
</div>

<!-- JS do Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php require __DIR__ . '../partials/_footer.php'; ?>