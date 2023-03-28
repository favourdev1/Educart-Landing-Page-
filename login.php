<?php include_once("include/head.inc.html"); ?>

<body>
    
    <div>
        <div
            class="container-fluid p-0 hero-background vh-70  "
            id="hero-section"
        >

            <div class="col h-100 hero py-5 ">
                
                <div class="container h-100">
                    <div class=" row row-cols align-items-center m-0 h-100  ">

                         
                        <div class="col-11 col-sm-8 col-md-8 col-lg-6 col-xl-5 col-xxl-4 m-auto ">
                        <img
                                src="img/educart-logo.svg"
                                alt="educart-logo"
                                class="mb-5 img-fluid"
                            >
                            <form
                                action="#"
                                method="post"
                            >


                                <div class="col mb-3">
                                    <label
                                        class="form-label"
                                        for="email"
                                    >
                                        Lastname
                                    </label>
                                    <div class="col ">
                                        <input
                                            type="text"
                                            name="email"
                                            class="form-control  py-2"
                                            placeholder="Enter your Last Name"
                                            id="email"
                                        >
                                    </div>

                                </div>




                                <div class="col mb-3">
                                    <label
                                        class="form-label "
                                        for="password"
                                    >Password </label>
                                    <div class="col input-group">

                                        <input
                                            type="password"
                                            class="form-control border-end-0"
                                            placeholder=""
                                        >
                                        <span class="input-group-text bg-white border-start-0">
                                            <i class="bx bx-hide"></i>
                                        </span>
                                    </div>
                                </div>


                                <div class="col ">
                                    <input
                                        type="submit"
                                        class="form-control bg-blue text-white py-2"
                                        value="Create Account"
                                    >

                                </div>

                            </form>
                            <div class="col text-center mt-4">
                                <a
                                    href="../../forgot-password.php"
                                    class=" text-decoration-none text-blue fw-bold"
                                >Forgot Password</a>

                                <p class="text-blue mt-2">Don't have an Account? <a
                                        href="signup/choosesignup.php"
                                        class="text-blue fw-bold text-decoration-none"
                                    >Signup Here!</a> </p>
                            </div>

                        </div>



                    </div>





                </div>

            </div>

        </div>

    </div>


    <?php include_once("include/footer.inc.html"); ?>

    <!-- *************** BOOTSTRAP LIBRARY ********************** -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>


</html>