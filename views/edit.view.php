<?php require __DIR__.'/partials/_header.php'; ?>

            <!-- Main Content -->
            <main class="col-md-9 col-lg-10 px-md-4">
                <header class="dashboard-header py-3 d-flex justify-content-between align-items-center">
                    <h1 class="h3">Criar posts</h1>
                    <div>
                        <i class="fas fa-bell me-3"></i>
                        <i class="fas fa-user"></i>
                    </div>
                </header>
               
                <!-- Post Creation Section -->
                <section class="my-4">
                    <form id="postForm" class="p-3 bg-white shadow-sm rounded" method="get" action="update" enctype="multipart/form-data">
                    <?php if($post) : ?>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="title" value="<?= $post->title ?>" placeholder="Título do Post" required>
                            <input type="hidden" name="id" value="<?= $post->id ?>">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="description" placeholder="Descrição do Post" rows="4" required><?= $post->description ?></textarea>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <button type="button" class="btn btn-primary me-2">
                                <i class="fas fa-upload"></i> Escolher Imagem
                            </button>
                            <input type="file" name="img" class="form-control"  id="image" style="max-width: 200px;">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Editar Post
                        </button>
                    <?php endif ?>
                    </form>
                </section>
    
            </main>
        </div>
    </div>

    <!-- JS do Bootstrap -->
     <!-- <script src="./public/js/ajax.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php require __DIR__.'../partials/_footer.php'; ?>
