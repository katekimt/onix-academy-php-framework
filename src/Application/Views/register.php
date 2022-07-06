<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="/src/Application/Views/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&family=Lora:wght@400;700&display=swap"
          rel="stylesheet">
</head>
<body>

<div class="container__part">
    <div class="part_one"></div>
    <div class="part_two">
        <div class="logo">RUNO</div>
        <div class="title__register">Create account</div>
        <form>
            <div class="input_name">Email</div>
            <input class="input" type="email" name="email">
            <div class="input_name">Password</div>
            <input class="input" type="password"
                   name="password">
            <div class="input_name">Confirm Password</div>
            <input class="input" type="password"
                   name="confirm_password">

            <button class="button btn-1" name="login" type="submit">Create
                account
            </button>
            <button class="button btn-2" name="sign_in" type="submit">Sign
                in with
                Google
            </button>
        </form>
        <div class="text">
            Already have an account?
            <a class="link link-reg" href="/login">Log In</a>
        </div>
    </div>
</div>
</body>
</html>