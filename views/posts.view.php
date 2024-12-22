<?php require __DIR__.'/partials/_header.php'; ?>

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
           
                    <!-- Card 1 -->
                    <?php foreach($posts as $post) : ?>
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm">
                                <img src="http://localhost/projeto-OOP/public/assets/<?= $post->thumbnail ?>" alt="Post Image" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $post->title ?></h5>
                                    <p class="card-text"><?= $post->description ?></p>
                                <div class="mb-3 d-flex align-items-center">
                                <form action="show" method="GET">
                                    <input type="hidden"  value="<?= $post->id ?>" name="id">
                                    <button type="submit" class="btn btn-primary me-2">Ver mais</button>
                                </form>
                                <form action="edit" method="GET">
                                    <input type="hidden"  value="<?= $post->id ?>" name="id">
                                    <button type="submit" class="btn btn-warning me-2">Editar Post</button>
                                </form>
                                <form action="delete" method="POST">
                                    <input type="hidden"  value="<?= $post->id ?>" name="id">
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <!-- Card 2 -->
                    </div>
                </section>
            </main>
        </div>
    </div>

    <!-- JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php require __DIR__.'../partials/_footer.php'; ?>