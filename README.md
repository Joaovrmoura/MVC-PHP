Este projeto foi criado para estudos e prática de Arquitetura MVC 
(Model-View-Controller) usando PHP orientado a objetos. 

Estrutura do Projeto
Diretórios e Arquivos:
app/

controllers/: Contém as classes responsáveis por gerenciar a lógica do sistema.
models/: Contém as classes que manipulam os dados e interagem com o banco.
views/partials/: Contém partes reutilizáveis da interface, como cabeçalhos e rodapés.

database/migrations/: Scripts responsáveis por alterações estruturais no banco de dados.

public/assets/css/: Diretório para arquivos estáticos acessíveis pelo navegador, como CSS e JavaScript.

vendor/: Diretório gerenciado pelo Composer que contém dependências externas.

Arquivos importantes:

.htaccess: Configuração de URL amigável.
composer.json e composer.lock: Configuração e controle de dependências.
index.php: Ponto de entrada da aplicação.
config.php: Configurações globais do projeto.
bootstrap.php: Inicialização da aplicação.
routes.php: Definição de rotas do sistema.
Configuração do Ambiente
1. Pré-requisitos:
PHP 7.4+
Composer
Servidor Apache ou outro com suporte a .htaccess
2. Instalar dependências:
Execute no terminal:

bash
composer install
4. Atualizar autoload:
Sempre que adicionar novas classes:
bash
composer dump-autoload
Arquitetura e Funcionamento

1. Views/Partials
Contém elementos reutilizáveis, como o cabeçalho (header.php)
e o rodapé (footer.php).
Exemplo de inclusão:
php
include 'views/partials/header.php';
include 'views/partials/footer.php';

3. Controllers
Responsáveis por gerenciar a lógica da aplicação e conectar modelos às views.
Exemplo:
php
class PostController {
    public function show($id) {
        $post = Post::find($id);
        include 'views/post/show.php';
    }
}
4. Database/Migrations
Scripts que versionam mudanças no banco de dados.
Exemplo de migração:
php
Schema::create('users', function($table) {
    $table->id();
    $table->string('name');
    $table->timestamps();

});

5. Public/Assets/CSS
Diretório para arquivos acessíveis pelo cliente, como:
CSS (ex.: styles.css)
Imagens
JavaScript

7. Arquivo .htaccess
Define URLs amigáveis e manipulação de rotas.
Exemplo de regra de reescrita:
apache
RewriteEngine On
RewriteRule ^([a-zA-Z0-9-]+)$ index.php?page=$1 [QSA,L]
8. Rotas
O arquivo routes.php define as rotas do sistema.
Classes envolvidas:
Request.php: Processa e sanitiza a URL.
Router.php: Compara a URL tratada com as rotas definidas e carrega o controlador.
Exemplo de Configuração
config.php
Contém configurações como credenciais do banco de dados.
Exemplo:
php
return [
    'database' => [
        'host' => 'localhost',
        'dbname' => 'meu_banco',
        'user' => 'root',
        'password' => ''
    ]
];
index.php
Inicializa a aplicação, carregando o bootstrap.php, rotas e dependências:
php
require_once 'vendor/autoload.php';
require_once 'bootstrap.php';
Fluxo de Execução
O arquivo index.php recebe a requisição.
A classe Request.php trata e sanitiza a URL.
A classe Router.php valida as rotas.
O controlador correspondente é chamado para executar a lógica.
A view adequada é carregada para renderização.
Observações
Sempre execute composer dump-autoload ao adicionar novas classes.
Use migrations para mudanças controladas no banco de dados.
Certifique-se de configurar corretamente o .htaccess para URLs amigáveis.
Licença
Este projeto é apenas para fins de estudo. Sinta-se à vontade para explorar, modificar e aprender!
