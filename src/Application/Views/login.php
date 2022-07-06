<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/src/Application/Views/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&family=Lora:wght@400;700&display=swap"
          rel="stylesheet">
</head>

<body>

<div class="container__part">
    <div class="part_one"></div>
    <div class="part_two">
        <div class="logo">RUNO</div>
        <div class="title__register">Login to your account</div>
        <form>

            <div class="input_name">Email</div>
            <input class="input" type="email" name="email">
            <div class="input_name">Password</div>
            <input class="input" type="password" name="userpass">

            <div class="creation">
                <div class="creation__container">
                    <div class="creation__item">
                        <input class="creation__check" type="checkbox">Remember me
                    </div>
                    <div class="creation__item">
                        <a class="creation__link" href="">Forgot Password?</a>
                    </div>
                </div>
            </div>

            <button class="button btn-1" name="login" type="submit">Login</button>
            <button class="button btn-2" name="sign_in" type="submit">Sign in with
                Google
            </button>

        </form>

        <div class="text">
            Don’t have an account?
            <a class="link link-reg" href="/register">Register</a>
        </div>

    </div>
</div>
</body>
</html>