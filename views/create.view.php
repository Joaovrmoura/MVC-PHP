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
                    <form id="postForm" class="p-3 bg-white shadow-sm rounded" method="post" action="store" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="title" placeholder="Título do Post" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="thumbnail" placeholder="Descrição do Post" rows="4" required></textarea>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <button type="button" class="btn btn-primary me-2">
                                <i class="fas fa-upload"></i> Escolher Imagem
                            </button>
                            <input type="file" name="img" class="form-control"  id="image" style="max-width: 200px;">
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-paper-plane"></i> Publicar Post
                        </button>
                    </form>
                </section>
                <?php if(isset($_SESSION['success'])) : ?>
                    <h1 id="result" class="hidden">
                        <?= 
                            $_SESSION['success']; 
                            unset($_SESSION['success']);
                        ?>
                    </h1>
                <?php endif; ?>   
                <!-- Posts Display Section -->
                <section class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <img src="https://via.placeholder.com/300x200" alt="Post Image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Primeiro Post</h5>
                                <p class="card-text">Uma breve descrição do primeiro post criado no dashboard.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <img src="https://via.placeholder.com/300x200" alt="Post Image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Segundo Post</h5>
                                <p class="card-text">Descrição interessante para o segundo post do dashboard.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <img src="https://via.placeholder.com/300x200" alt="Post Image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Terceiro Post</h5>
                                <p class="card-text">Mais um post para demonstrar o layout do dashboard.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <!-- JS do Bootstrap -->
     <!-- <script src="./public/js/ajax.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
