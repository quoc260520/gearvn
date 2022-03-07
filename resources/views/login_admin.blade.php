<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-free-5.15.4-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/themify-icons/themify-icons.css') }}">
    <title>Login</title>
</head>
<body>
     <div class="login">
         <div class="login__containner">
             <h1 class="login__header">Login</h1>
             <div class="login__body">
                <form action="" method="post" class="admin__form">
                    <div class="login__body-form">
                        <input type="email" name="email" id="" class="login__body-form__input" placeholder="Email....">
                        <i class="fas fa-envelope login__body-form__icon"></i>
                    </div>
                    @error('email')
                    <span class="erros">{{ $message }}</span>
                    @enderror
                    <div class="login__body-form">
                        <input type="password" name="password" id="" class="login__body-form__input" placeholder="Password....">
                        <i class="fas fa-lock login__body-form__icon"></i> 
                    </div>
                    @error('password')
                    <span class="erros">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="btn btn_login">Login</button>
                    @csrf
                </form>
             </div>

         </div>
     </div>
    
</body>
</html>