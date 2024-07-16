<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
    <style>
        * {
    
        }
        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-box {
            width: 100%;
            max-width: 450px;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 30px;
           
        }
        .form-box h2 {
          
            text-align: center;
            margin-bottom: 20px;
        }
        .inputbox {
            position: relative;
            margin: 15px 0;
        }
     
        .inputbox input {
            width: 100%;
            height: 45px;
            padding: 10px;
            border: 1px solid #ddd;
          
        }
        .inputbox input:focus {
            border-color: #007bff;
        }
        button {
            width: 100%;
            height: 45px;
            border-radius: 5px;
            background: #007bff;
            border: none;
            color: white;
            font-size: 1em;
            font-weight: 600;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background: #0056b3;
        }
        .register {
            font-size: 0.9em;
            color: #333;
            text-align: center;
            margin-top: 20px;
        }
      
        .register p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Login</h2>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="inputbox">
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="inputbox">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Log in</button>
            <div class="register">
                <p>No tienes cuenta?  <a href="{{ route('registro.vista') }}">Registrate</a></p>
            </div>
        </form>
    </div>
</body>
</html>
