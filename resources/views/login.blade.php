<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/script2.js') }}"></script>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #f8f9fa;">
        <div class="card p-4 shadow" style="width: 350px;">
          <h3 class="text-center mb-4">Login</h3>
          <form id="loginForm">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
            </div>
      
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">
                  Remember Me
                </label>
              </div>
              <a href="#" style="font-size: 0.9rem;">Lupa Password?</a>
            </div>
      
            <button type="submit" class="btn w-100" style="background-color: orange;" >Login</button>
          </form>
          <div id="loginMessage" class="text-center mt-3"></div>
        </div>
    </div>      
</body>
</html>