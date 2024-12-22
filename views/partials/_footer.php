<script>
    // exibe  a menssagem da $_SESSION caso exista
    window.onload = function() {
        const result = document.getElementById('result');
        if (result && result.textContent.trim() !== "") {
            result.style.display = 'block'; // Exibe a mensagem
            setTimeout(() => {
                result.style.display = 'none'; // Oculta após 3 segundos
                // não preciso do unset técnicamente
            }, 3000); // Oculta após 3 segundos (3000ms)
        }
    };
</script>
<?php if (isset($_SESSION['success'])) : ?>
    <div id="result" class="hidden">
        <?= getSession('success'); ?>
        <?php unsetSession('success'); ?>
    </div>
<?php endif; ?>
</body>
</html>