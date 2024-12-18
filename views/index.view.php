<?php require __DIR__.'/partials/_header.php'; ?>

<div class="dashboard">
        <!-- Sidebar (Same as previous design) -->
        <aside class="sidebar">
            <div class="sidebar-logo">
                <img src="/api/placeholder/40/40" alt="Logo">
                <h2>Dashboard</h2>
            </div>

            <ul class="sidebar-menu">
                <li>
                    <a href="#" class="active">
                        <i class="fas fa-home"></i>
                        <span>Início</span>
                    </a>
                </li>
                <li>
                    <a href="create.view.php">
                        <i class="fas fa-blog"></i>
                        <span>Posts</span>
                    </a>
                </li>
                <li>
                    <a href="login.view.php">
                        <i class="fas fa-users"></i>
                        <span>Usuários</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <span>Configurações</span>
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="dashboard-header">
                <h1>Criar Novo Post</h1>
                <div>
                    <i class="fas fa-bell"></i>
                    <i class="fas fa-user"></i>
                </div>
            </header>

            <!-- Post Creation Section -->
            <section class="post-creation">
                <form class="post-form" id="postForm">
                    <input type="text" placeholder="Título do Post" required>
                    <textarea placeholder="Descrição do Post" rows="4" required></textarea>
                    
                    <div class="file-upload">
                        <button type="button" class="file-upload-btn">
                            <i class="fas fa-upload"></i> Escolher Imagem
                        </button>
                        <input type="file" accept="image/*" id="imageUpload">
                    </div>

                    <img id="imagePreview" class="image-preview" style="display:none;">

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Publicar Post
                    </button>
                </form>
            </section>

            <!-- Posts Display Section -->
            <section class="posts-grid">
                <!-- Sample Post Cards -->
                <div class="post-card">
                    <img src="/api/placeholder/300/250" alt="Post Image">
                    <div class="post-card-content">
                        <h3>Primeiro Post</h3>
                        <p>Uma breve descrição do primeiro post criado no dashboard.</p>
                    </div>
                </div>

                <div class="post-card">
                    <img src="/api/placeholder/300/250" alt="Post Image">
                    <div class="post-card-content">
                        <h3>Segundo Post</h3>
                        <p>Descrição interessante para o segundo post do dashboard.</p>
                    </div>
                </div>

                <div class="post-card">
                    <img src="/api/placeholder/300/250" alt="Post Image">
                    <div class="post-card-content">
                        <h3>Terceiro Post</h3>
                        <p>Mais um post para demonstrar o layout do dashboard.</p>
                    </div>
                </div>
            </section>
        </main>
    </div>

<?php require __DIR__.'/partials/_footer.php'; ?>