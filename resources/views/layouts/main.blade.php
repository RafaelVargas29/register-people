<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&display=swap" rel="stylesheet">
</head>
<body class="site">
    <header>
        <nav>
            <ul class="navbar">
                <li>
                   <a href="#" class="navbar-item">Cadastrar pessoa</a> 
                </li>
                <li>
                   <a href="#" class="navbar-item">Mostrar pessoas</a> 
                </li>
                <li>
                   <a href="#" class="navbar-item">Alterar pessoa</a> 
                </li>
                <li>
                   <a href="#" class="navbar-item">Excluir pessoa</a> 
                </li>
            </ul>
        </nav>
    </header>



    <div class="site-content">
       @yield('content')
    </div>

    <footer id="site-content-footer">
        <p>Register People &copy; 2022</p>
    </footer>
</body>
</html>