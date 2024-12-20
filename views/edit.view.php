<?php require __DIR__.'/partials/_header.php'; ?>

            <!-- Main Content -->
            <main class="col-md-9 col-lg-10 px-md-4">
                <header class="dashboard-header py-3 d-flex justify-content-between align-items-center">
                    <h1 class="h3">Editar Posts</h1>
                    <div>
                        <i class="fas fa-bell me-3"></i>
                        <i class="fas fa-user"></i>
                    </div>
                </header>

                <!-- Post Creation Section -->
                <section class="my-4">
                    <form class="p-3 bg-white shadow-sm rounded">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Título do Post" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Descrição do Post" rows="4" required></textarea>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <button type="button" class="btn btn-primary me-2">
                                <i class="fas fa-upload"></i> Escolher Imagem
                            </button>
                            <input type="file" class="form-control" style="max-width: 200px;">
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-paper-plane"></i> Publicar Post
                        </button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-paper-plane"></i><a href="delete">Delete Post</a> 
                        </button>
                    </form>
                </section>
            </main>
        </div>
    </div>

    <!-- JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
