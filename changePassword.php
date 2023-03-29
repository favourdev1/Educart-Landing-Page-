<?php include_once("include/head.inc.html"); ?>

<body style="background: #FAFCFD !important;">
    <div class="container my-5 content  h-100">
        <div
            class="container-fluid p-0  py-5 my-5 "
            id="hero-section"
        >
            <div class=" position-relative  h-100 bg-secondsary text-center py-4">

                <h3 class="text-blue  fw-bolder  mx-auto">
                    CREATE A NEW PASSWORD

                </h3>
                <h6 class="text-blue  mx-auto mb-5">
                    Create a new password you would easily remember
                </h6>

            </div>

            <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">

                <form
                    action="#"
                    method="post"
                >
                    <div class="col mb-4">

                        <div class="col  ">
                            <input
                                type="text"
                                name="password"
                                class="form-control  py-2"
                                placeholder="Old Password"
                                id="old-password"
                            >
                        </div>
                    </div>


                    <div class="col mb-4">

                        <div class="col  ">
                            <input
                                type="text"
                                name="password"
                                class="form-control  py-2"
                                placeholder="New Password"
                                id="new-password"
                            >
                        </div>
                    </div>


                    <div class="col mb-4">

                        <div class="col  ">
                            <input
                                type="text"
                                name="password"
                                class="form-control  py-2"
                                placeholder="Confirm new password"
                                id="password-confirm"
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

            </div>

        </div>



    </div>

    <?php include_once("include/footer.inc.html"); ?>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>


</html>