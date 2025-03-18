<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #fdf1f9;
            font-family: Arial, sans-serif;
        }
        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .profile-container h2 {
            color: #ff77cc;
            text-align: center;
        }
        .profile-container img {
            display: block;
            margin: 0 auto;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #ff77cc;
        }
        .profile-container .btn {
            background: #ff77cc;
            color: white;
        }
        .profile-container .btn:hover {
            background: #f28ab2;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <h2>Admin Profile</h2>
    <img src="https://via.placeholder.com/120" alt="Admin Image">
    <p class="text-center mt-3"><strong>Name:</strong> Admin Name</p>
    <p class="text-center"><strong>Email:</strong> admin@example.com</p>
    <p class="text-center"><strong>Role:</strong> Super Admin</p>
    <div class="text-center">
        <a href="#" class="btn">Edit Profile</a>
    </div>
</div>

</body>
</html>
