<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Link do CSS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #ffffff;
            border-right: 1px solid #dee2e6;
        }
        .sidebar .nav-link {
            color: #333;
            font-weight: 500;
        }
        .sidebar .nav-link:hover {
            background-color: #e9ecef;
        }
        .dashboard-header {
            border-bottom: 1px solid #dee2e6;
        }
        .post-card img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 sidebar px-3 py-4">
                <div class="text-center mb-4">
                    <img src="https://via.placeholder.com/100x50" alt="Logo" class="img-fluid">
                </div>
                <h5 class="text-primary fw-bold mb-4">Dashboard</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="views/index.view.php">
                           Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/create.view.php">
                          Criar Post
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/edit.view.php">
                            Editar Post
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/login.view.php">
                           Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/register.view.php">
                            Cadastro
                        </a>
                    </li>
                </ul>
            </nav>