<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="/style.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class="bg-[#fff5d2] w-screen h-screen flex justify-center items-start">
    <section class="flex flex-col items-center">
        <img height="400px" width="400px"  src="/assets/logo.jpg" class="">
        <form class="bg-white flex flex-col justify-star items-center md:w-[400px] md:h-[220px] md:mb-32" method="post" action="/handle_db/login.php">
            <h3 class="text-gray-500 mt-6">Bienvendio Ingresa con tu cuenta</h3>
            <input type="email" name="email" class="ring-1 ring-[#c2c5cd] rounded-sm w-10/12 mt-6" placeholder="email">
            <input type="password" name="contracena" class="ring-1 ring-[#c2c5cd] rounded-sm w-10/12 mt-6" placeholder="contraceña">
            <button type="submit" class="bg-blue-500 px-2 py-1 rounded-sm self-end mr-7 my-4 hover:bg-blue-600 active:bg-blue-700">Ingresar</button>
        </form>

    </section>
</body>
</html>