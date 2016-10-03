<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <script src="ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading">SSTV 로그인</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="이메일주소" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="비밀번호" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 자동로그인
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">로그인</button>

      </form>
    </div>

    <script src="ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
