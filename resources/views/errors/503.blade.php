<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <script>
        window.Laravel ={
            csrfToken: "{{ csrf_token() }}"
        }
    </script>
    <title>Mi sitio</title>
</head>
<body>
    <div class="container">
        <h1>Estamos actualizando el sitio</h1>
        <p>Por favor intenta de nuevo más tarde</p>

        <footer>Copyright ® {{ date('Y') }}</footer>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
