<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            max-width: 150px;
        }

        .container {
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group input {
            width: 90%;
            padding: 20px 20px 20px 50px;
            border: none;
            border-radius: 25px;
            background: #FAFAFA;
            font-size: 1.25rem;
            color: #333;
            outline: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group input::placeholder {
            color: #aaa;
        }

        .form-group .icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            font-size: 1.5rem;
            color: #aaa;
        }

        button {
            width: 40%;
            padding: 15px;
            background: #c49a6c;
            /* Slightly darker beige color */
            border: none;
            border-radius: 25px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
            /* Added shadow */
        }

        button:hover {
            background: #a97d54;
            /* Darker shade on hover */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
            /* Slightly deeper shadow on hover */
        }

        footer {
            width: 100%;
            position: absolute;
            bottom: 0;
        }

        footer img {
            display: block;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Logo -->
    <img src="../assets/images/logo.png" alt="Camping Boer Bert Logo" class="logo">

    <!-- Login Form -->
    <div class="container">
        <form action="includes/login.inc.php" method="POST">
            <div class="form-group">
                <i class="fas fa-user icon"></i> <!-- User Icon -->
                <input type="text" name="username" placeholder="Gebruikersnaam">
            </div>
            <div class="form-group">
                <i class="fas fa-lock icon"></i> <!-- Lock Icon -->
                <input type="password" name="password" placeholder="Wachtwoord">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <img src="../assets/images/Silhouette.png" alt="Footer Silhouette">
    </footer>
</body>

</html>