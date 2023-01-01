<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require('include/links.php')?>
    <title><?php echo $settings_r['site_title'] ?>- ABOUT</title>

    <style>
    .box {
        border-top-color: var(--teal) !important;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


</head>

<body class="bg-light">

    <?php require('include/header.php')?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolor <br> animi laudantium velit
            consequuntur quos expedita quam esse? Veniam!
        </p>
    </div>


    <div class="container">
        <div class="row justify-content-between align-items-center ">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit amet.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quos explicabo quisquam enim, sit
                    praesentium vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium corporis
                    hic delectus amet quaerat suscipit excepturi.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about2.jpeg" class="w-100">

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">2000+ CUSTOMERS</h4>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>

            </div>
        </div>

    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>


    <div class="container px-4">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">

                <?php 
                $about_r = selectAll('team_details');
                $path = ABOUT_IMG_PATH;

                while($row = mysqli_fetch_assoc($about_r)){
                echo<<<data
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="$path$row[picture]" class="w-100">
                    <h5 class="mt-2">$row[name]</h5>
                </div>
                data;
              }

              ?>


                <!-- <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div> -->

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>






    <?php require('include/footer.php')?>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 40,
        pagination: {
            el: ".swiper-pagination",

        },
        breakpoints: {
            320: {
                slideShadows: 1,
            },
            640: {
                slideShadows: 1,
            },
            768: {
                slideShadows: 2,
            },
            1024: {
                slideShadows: 3,
            },
        }
    });
    </script>





</body>

</html>