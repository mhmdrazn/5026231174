<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400" rel="stylesheet">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
            .container {
                max-width: 480px;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body>
    <div class="container mx-auto">
        <div class="my-5 text-center">
            <img src="/img-pertemuan4/logo-cekdong.png" alt="logo">
        </div>

        <form>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="/img-pertemuan4/person.svg" alt="person" style="filter: invert(72%) sepia(0%) saturate(0%) hue-rotate(180deg) brightness(91%) contrast(85%);">
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="/img-pertemuan4/key.svg" alt="key" style="filter: invert(72%) sepia(0%) saturate(0%) hue-rotate(180deg) brightness(91%) contrast(85%);">
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <p style="color: red; font-size: small">Wrong Password!</p>

            <div class="d-flex flex-column" style="gap: 12px;">
                <button type="submit" class="mx-auto btn rounded-pill" style="background-color: black; color: white; width: 40%;">Login</button>
                <div class="d-flex flex-column">
                    <button type="submit" class="btn btn-link text-dark btn-sm">Forgot Password</button>
                    <button type="submit" class="btn btn-link text-dark btn-sm" style="text-decoration: underline;">Login As Teknisi</button>
                </div>
            </div>

            <div class="py-4 text-center text-white fixed-bottom" style="background-color: #666670; margin: 0;">
                Dont have an account yet? <a href="#" class="text-white" style="text-decoration: underline; font-weight: bold;">Create New</a>
            </div>
        </form>
    </div>
</body>
</html>
