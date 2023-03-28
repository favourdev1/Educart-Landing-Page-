<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta
            http-equiv="X-UA-Compatible"
            content="IE=edge"
        >
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        >
        <title>Educart</title>


        <link
            rel="stylesheet"
            href="../style.css"
        >
        <!-- bootstrap -->
        <link
            rel="stylesheet"
            href="../node_modules/bootstrap/dist/css/bootstrap.min.css"
        >

        <!-- animate on scroll -->
        <link
            rel="stylesheet"
            href="../node_modules/aos/dist/aos.css"
        >

        <!-- boxicons -->
        <link
            rel="stylesheet"
            href="../node_modules/boxicons/css/boxicons.min.css"
        >
    </head>


    <body style="background: #FAFCFD !important;
">
        <div class="container mb-3 content">
            <div
                class="container-fluid p-0  pt-5  "
                id="hero-section"
            >
                <div class=" position-relative  h-100 bg-secondsary text-center py-4">

                    <h3
                        class="text-light-blue  fw-bold "
                        style="color: #17324F ; "
                    >
                        <span
                            class="position-absolute  "
                            style="z-index:-1; bottom:20%;left:28%;"
                        > <img
                                src="../img/circle-ellipse.png"
                                alt=""
                                height="70"
                                style="z-index:-1"
                            />
                        </span>Choose an Account Type to Get Started

                    </h3>


                </div>



                <div class="d-block d-md-flex  align-items-center justify-content-center p-3 mt-5 " >


                    <div class="col col-md-6 col-lg-4 ">
                        <div
                            class=" px-3 py-4 p-md-5 m-3 text-center text-decoration-none cursor-pointer"
                            id="personal-account-btn"
                            style="background:#F4F9FA; border: 4px solid #20466F; border-radius: 15.9319px;"
                        >
                            <img
                                src="../img/profile.png"
                                alt=""
                                class="img-fluid my-4"
                            >
                            <h6 class="text-blue-2"> Personal Account</h6>
                        </div>

                    </div>

                    <div class="col col-md-6 col-lg-4 ">
                        <div
                            class=" px-3 py-4 p-md-5 m-3 text-center text-decoration-none cursor-pointer"
                            id="institution-account-btn"
                            style="background:#F4F9FA; border: 4px solid #20466F; border-radius: 15.9319px;"
                        >
                            <img
                                src="../img/bank.png"
                                alt=""
                                class="img-fluid my-4"
                            >
                            <h6 class="text-blue-2">Institution Account</h6>
                        </div>

                    </div>




                </div>

                <div class="col text-end">
                    <a
                        href="#"
                        class="btn bg-blue py-2 px-4 py-md-3 px-md-5 shadow rounded-pill text-decoration-none text-white"
                    >
                        <img
                            src="../img/light-message-question.png"
                            alt="Help Button"
                        >
                        Help
                    </a>
                </div>
            </div>



        </div>

        <?php include_once("footer.php"); ?>


            <!-- *************** BOOTSTRAP LIBRARY ********************** -->
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


        
        <script src="../js/choose-account.js"></script>
    </body>


</html>