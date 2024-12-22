<?php require __DIR__.'/partials/_header.php'; ?>

            <!-- Main Content -->
            <main class="col-md-9 col-lg-10 px-md-4">
                <header class="dashboard-header py-3 d-flex justify-content-between align-items-center">
                    <h1 class="h3">Login</h1>
                    <div>
                        <i class="fas fa-bell me-3"></i>
                        <i class="fas fa-user"></i>
                    </div>
                </header>

                <section class="my-4">
                    <form class="p-3 bg-white shadow-sm rounded">
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha">Senha</label>
                            <input type="text" class="form-control" name="password" placeholder="Senha" required>
                        </div>    
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-paper-plane"></i>Login
                        </button>
                    </form>
                </section>
            </main>
        </div>
    </div>

    <!-- JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php require __DIR__.'../partials/_footer.php'; ?>