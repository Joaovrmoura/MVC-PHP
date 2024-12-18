<script>
        // Image Upload Preview
        document.getElementById('imageUpload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const imagePreview = document.getElementById('imagePreview');
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });

        // Post Form Submission (Simulated)
        document.getElementById('postForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Post criado com sucesso!');
        });
    </script>
</body>
</html>