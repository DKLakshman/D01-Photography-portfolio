<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <!-- css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <?php require 'header.php'?>


    <section class="home-hero pb-5">
        <div class="home-hero-container container d-flex justify-content-center ">
            <div class="home-hero-box d-flex flex-column align-items-center">
                <h1 class="alg-text-light alg-bolder">Malcolm Lismore Photography</h1>
                <div class="home-hero-para alg-text-light p-3">Discover captivating moments frozen in time.
 Let our images speak volumes as we capture the essence of life in every frame.</div>
            </div>
        </div>
    </section>

    <section class="home-paraSec pt-5 pb-5">
        <div class="container d-flex justify-content-center">
            <div class="home-paraSec-text">
            Welcome to Malcolm Lismore Photography, your gateway to a world of captivating imagery and storytelling through photography. Explore our curated collection of stunning photographs, each frame a narrative waiting to be discovered. From breathtaking landscapes to intimate portraits, our passion for visual storytelling knows no bounds. Join us on this journey of exploration, inspiration, and visual delight. Start your adventure with Malcolm Lismore Photography today.
            </div>
        </div>
    </section>

    <section class="pack-sec2 pb-5 pt-4">
        <div class="container d-flex justify-content-center gap-4">
            <div class="home-sec3-card1 d-flex justify-content-center" style="height: 400px;">
                <div><button class="pack-se2-btn" style="margin-top: 340px;">wild Life</button></div>
            </div>
            <div class="home-sec3-card2 d-flex justify-content-center" style="height: 400px;">
                <div><button class="pack-se2-btn" style="margin-top: 340px;">Weddings</button></div>
            </div>
            <div class="home-sec3-card3 d-flex justify-content-center" style="height: 400px;">
                <div><button class="pack-se2-btn" style="margin-top: 340px;">Pre Shoots</button></div>
            </div>
            <div class="home-sec3-card4 d-flex justify-content-center" style="height: 400px;">
                <div><button class="pack-se2-btn" style="margin-top: 340px;">Events</button></div>
            </div>
        </div>
    </section>


    <!-- Home page section 01 -->
    <section class="home-sec1 pt-3 pb-5">
        <div class="container d-flex justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="home-sec1-right d-flex  gap-3">
                    <div class="d-flex flex-column gap-3">
                        <img class="sec1-image" src="../resources/home/image1.png" alt="">
                        <img class="sec1-image" src="../resources/home/image2.png" alt="">
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <img class="sec1-image" src="../resources/home/image3.png" alt="">
                        <img class="sec1-image" src="../resources/home/image4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'?>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>