<?php
$user = [
    'name' => 'Diestha',
    'email' => 'diestafadila@gmail.com',
    'tanggal_lahir' => '03-12-2006',
    'photo' => 'profile.jpeg',


];
?>

<!DOCTYPE html>`
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px" style="background-color:cornsilk;">
            <div class="card-body text-center">
                <img src="profile2.jpg" alt="Foto Profil" class="rounded-circle mb-3" width="100">
                <h4 class="card-title"> <?= $user['name']; ?> </h4>
                <p class="text-muted"> <?= $user['email']; ?> </p>
                <p class="text-muted"> <?= $user['tanggal_lahir']; ?> </p>


            </div>
        </div>
    </div>
</body>

</html>