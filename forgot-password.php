<?php include_once("include/head.inc.html"); ?>

<body style="background: #FAFCFD !important;">
    <div class="container my-5 content  h-100">
        <div
            class="container-fluid p-0  py-5 my-5  "
            id="hero-section"
        >
            <div class=" position-relative  h-100 bg-secondsary text-center py-4">

                <h3
                    class="text-blue  fw-bolder  mx-auto"
                   
                >
                    PASSWORD RESET

                </h3>
                <h6 class="text-blue  mx-auto mb-5">
                    Please enter your registered Email
                </h6>

            </div>

            <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">

                <form
                    action="#"
                    method="post"
                >
                    <div class="col mb-3">
                       
                        <div class="col  ">
                            <input
                                type="text"
                                name="email"
                                class="form-control  py-2"
                                placeholder="Enter your email"
                                id="email"
                            >
                        </div>
                    </div>


                    <div class="col ">
                        <input
                            type="submit"
                            class="form-control bg-blue text-white py-3"
                            value="Reset Password"
                        >

                    </div>

                </form>
                <div class="col text-center mt-4">
                   
                    <p class="text-blue">Remember my password? <a
                            href="login.php"
                            class="text-blue fw-bold"
                        >Log In</a> </p>
                </div>

            </div>

        </div>



    </div>

    <?php include_once("include/footer.inc.html"); ?>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>


</html>