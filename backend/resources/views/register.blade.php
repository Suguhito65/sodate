<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Register</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body style="background:#f2f2f2">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
          <div class="card">
          <div class="card-header text-white text-center" style="background:linear-gradient(120deg, orange 0 ,gold 100%)">新規登録</div>
            <div class="card-body">
              <form action="">
                <div class="form-group">
                  <label for="email" class="my-3">名前</label>
                  <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email" class="my-3">メールアドレス</label>
                  <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password" class="my-3">パスワード</label>
                  <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password-confirm" class="my-3">パスワード再入力</label>
                  <input type="password" name="password-confirm" id="password-confirm" class="form-control">
                </div>
                <button class="btn btn-primary w-100 mt-5" type="submit">ログイン</button>
                <div class="login_reminder"><a href="#">パスワードをお忘れの方</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>