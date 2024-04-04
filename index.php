<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <!-- css link -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <!-- Home page section 01 -->
    <section class="home-sec1 pt-3">
        <div class="container">
            <div class="d-flex justify-content-center gap-5">
                <div class="home-sec1-left alg-bg-light-green alg-text-h3 p-4">Welcome to Focus Frame, your gateway to a world of captivating imagery and storytelling through photography. Explore our curated collection of stunning photographs, each frame a narrative waiting to be discovered. From breathtaking landscapes to intimate portraits, our passion for visual storytelling knows no bounds. Join us on this journey of exploration, inspiration, and visual delight. Start your adventure with FocusFrame today.</div>
                <div class="home-sec1-right d-flex  gap-3">
                    <div class="d-flex flex-column gap-3">
                        <img class="sec1-image" src="resources/home/image1.png" alt="">
                        <img class="sec1-image" src="resources/home/image2.png" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <img class="sec1-image" src="resources/home/image3.png" alt="">
                        <img class="sec1-image" src="resources/home/image4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Home page section 02 -->
    <section class="home-sec2 pt-5 ">
        <div class="container text-center">
            <div class="alg-text-h2 alg-bold alg-text-dark pb-4">CATEGORIES</div>
            <div class="d-flex gap-5 justify-content-center">
                <div class="d-flex flex-column gap-5">
                    <!-- 1st card -->
                    <div class="home-sec2-card alg-bg-light-green alg-rounded-mid d-flex flex-column justify-content-center align-items-center gap-3">
                        <div class="alg-text-h3 alg-bold">Wild Life</div>
                        <div><img class="home-sec2-image" src="resources/home/card1.png" alt=""></div>
                        <div><button class="home-sec2-card-button alg-bg-lighter-green border-0 alg-rounded-mid">Book Now</button></div>
                    </div>
                    <!-- 1st card -->
                    <div class="home-sec2-card alg-bg-light-green alg-rounded-mid d-flex flex-column justify-content-center align-items-center gap-3">
                        <div class="alg-text-h3 alg-bold">Weddings</div>
                        <div><img class="home-sec2-image" src="resources/home/card2.png" alt=""></div>
                        <div><button class="home-sec2-card-button alg-bg-lighter-green border-0 alg-rounded-mid">Book Now</button></div>
                    </div>
                </div>
                <div class="d-flex flex-column gap-5">
                    <div class="home-sec2-card alg-bg-light-green alg-rounded-mid d-flex flex-column justify-content-center align-items-center gap-3">
                        <div class="alg-text-h3 alg-bold">Pre Shoots</div>
                        <div><img class="home-sec2-image" src="resources/home/card3.png" alt=""></div>
                        <div><button class="home-sec2-card-button alg-bg-lighter-green border-0 alg-rounded-mid">Book Now</button></div>
                    </div>
                    <div class="home-sec2-card alg-bg-light-green alg-rounded-mid d-flex flex-column justify-content-center align-items-center gap-3">
                        <div class="alg-text-h3 alg-bold">Events</div>
                        <div><img class="home-sec2-image" src="resources/home/card4.png" alt=""></div>
                        <div><button class="home-sec2-card-button alg-bg-lighter-green border-0 alg-rounded-mid">Book Now</button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <?php include 'pages/footer.php'?>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>