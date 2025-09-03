<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif
    }

    html,
    body {
        height: 100%;
        overflow: hidden;
    }

    .container {
        /* margin: 50px auto; */
        height: 100vh;
    }

    .body {
        position: relative;
        width: 720px;
        max-width: 100%;
        height: auto;
        max-height: 90vh;
        margin: auto;
        border: 1px solid #dddd;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .box-1 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .box-2 {
        padding: 10px;
        margin-top: 0 !important;
    }

    .box-1,
    .box-2 {
        width: 50%;
    }

    .h-1 {
        font-size: 24px;
        font-weight: 700;
    }

    .text-muted {
        font-size: 14px;
    }

    .container .box {
        width: 100px;
        height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 2px solid transparent;
        text-decoration: none;
        color: #615f5fdd;
    }

    .box:active,
    .box:visited {
        border: 2px solid #ee82ee;
    }

    .box:hover {
        border: 2px solid #ee82ee;
    }

    .btn.btn-primary {
        background-color: #ee82ee;
        color: white;
        /* border: 0px; */
        padding: 10;
        width: 150px;
        font-size: 14px;
        border: #ee82ee;
        border-radius: 10px;
    }

    .btn.btn-primary:hover {
        background-color: #db78db;
        color: white;
        font-size: 14px;
        border: #ee82ee;
    }

    .btn.btn-primary .fas.fa-chevron-right {
        font-size: 12px;
    }

    .footer .p-color {
        color: #ee82ee;
    }

    .footer.text-muted {
        font-size: 10px;
    }


    input.form-control {
        /* background-color: #f8eafd; */
        /* color: #6c3483; */
        border: 2px solid #ffe7ff;
        border-radius: 10px;
    }


    @media (max-width:767px) {
        body {
            padding: 10px;
        }

        .body {
            width: 100%;
            height: 100%;
        }

        .box-1 {
            width: 100%;
        }

        .box-2 {
            width: 100%;
            height: 440px;
        }
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="body d-md-flex justify-content-between">
            <div class="box-1 mt-md-0 mt-5">
                <img src="https://images.pexels.com/photos/2033997/pexels-photo-2033997.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                    class="" alt="">
            </div>
            <div class=" box-2 d-flex flex-column h-100">
                <div class="mt-5 text-center">
                    <p class="mb-2 h-1">Sign in.</p>
                    <p class="text-muted mb-2">Welcome to HydTech <br> please fill the form below</p>
                    {{-- <div class="d-flex flex-column ">
                        <p class="text-muted mb-2">Fill up the form below</p>
                    </div> --}}
                </div>
                <form action="/login" class="mt-3" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="emailHelp" class="form-label text-right">Email address</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">

                        <label for="emailHelp" class="form-label text-right">Password</label>
                        <input type="password" name="password" class="form-control" id="password">

                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary ">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
