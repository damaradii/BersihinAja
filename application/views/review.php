<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BersihinAja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .header-section {
            position: relative;
            background-image: url('/bersihinAja/assets/6856377.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .header-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body>
    <div class="relative h-full w-full bg-cover bg-center p-20 "
        style="background-image: url('/bersihinAja/assets/testimoni.png');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative flex flex-col justify-center h-full ">
            <h1 class="text-white text-4xl font-bold text-center">
                Hasil Review dari Customer<br>Tercinta Kami
            </h1>
        </div>
    </div>

    <section id="testimonials" class="p-10 mt-0">
        <div class="container py-5">
            <div class="flex flex-row">
                <div class="service-card col-md-3 w-full h-full shadow-md border-1 rounded-3 mx-1">
                    <h5 class="mx-3 mt-3">Joni</h5>
                    <p class="mx-3">Home Cleaning</p>
                    <p class="mx-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque dicta deleniti tempora doloribus?.</p>
                </div>
                <div class="service-card col-md-3 w-full h-full shadow-md border-1 rounded-3 mx-1">
                    <h5 class="mx-3 mt-3">Joni</h5>
                    <p class="mx-3">Home Cleaning</p>
                    <p class="mx-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque dicta deleniti tempora doloribus?.</p>
                </div>
                <div class="service-card col-md-3 w-full h-full shadow-md border-1 rounded-3 mx-1">
                    <h5 class="mx-3 mt-3">Joni</h5>
                    <p class="mx-3">Home Cleaning</p>
                    <p class="mx-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque dicta deleniti tempora doloribus?.</p>
                </div>
                <div class="service-card col-md-3 w-full h-full shadow-md border-1 rounded-3 mx-1">
                    <h5 class="mx-3 mt-3">Joni</h5>
                    <p class="mx-3">Home Cleaning</p>
                    <p class="mx-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eaque dicta deleniti tempora doloribus?.</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>