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
            href="../../style.css"
        >
        <!-- bootstrap -->
        <link
            rel="stylesheet"
            href="../../node_modules/bootstrap/dist/css/bootstrap.min.css"
        >

        <!-- animate on scroll -->
        <link
            rel="stylesheet"
            href="../../node_modules/aos/dist/aos.css"
        >

        <!-- boxicons -->
        <link
            rel="stylesheet"
            href="../../node_modules/boxicons/css/boxicons.min.css"
        >
    </head>


    <body style="background: #FAFCFD !important;">
        <div class="container my-5 content  h-100">
            <div
                class="container-fluid p-0  pt-5  "
                id="hero-section"
            >
                <div class=" position-relative  h-100 bg-secondsary text-center py-4">

                    <h3
                        class="text-light-blue  fw-bold w-min-content mx-auto"
                        style="color: #17324F ; "
                    >
                        SignUp

                    </h3>


                </div>

                <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
                    <form
                        action="#"
                        method="post"
                    >
                        <div class="col mb-3">
                            <label
                                class="form-label"
                                for="firstname"
                            >Firstname </label>
                            <div class="col  ">
                                <input
                                    type="text"
                                    name="firstname"
                                    class="form-control  py-2"
                                    placeholder="Enter your First Name"
                                    id="firstname"
                                >
                            </div>
                        </div>



                        <div class="col mb-3">
                            <label
                                class="form-label"
                                for="lastname"
                            >Lastname </label>
                            <div class="col ">
                                <input
                                    type="text"
                                    name="lastname"
                                    class="form-control  py-2"
                                    placeholder="Enter your Last Name"
                                    id="lastname"
                                >
                            </div>

                        </div>

                        <div class="col mb-3">
                            <label
                                class="form-label "
                                for="institution"
                            >Institution </label>
                            <div class="col">
                                <select
                                    name="institution"
                                    class="form-select py-2"
                                    id=""
                                >
                                    <option
                                        value="Select Institution"
                                        class=" rounded"
                                    >Select Institution</option>
                                </select>
                            </div>
                        </div>


                        <div class="col mb-3">
                            <label
                                class="form-label "
                                for="phone"
                            >Phone number </label>
                            <div class="col input-group">
                                <select
                                    name="countrycode"
                                    class="input-group-text bg-white p-2"
                                    id="countrycode"
                                >
                                    <option
                                        value="Select Institution"
                                        class="form-control"
                                    >+234</option>
                                </select>
                                <input
                                    type='tel'
                                    name="phone"
                                    class="form-control"
                                    placeholder="phone"
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
                                <span class="input-group-text bg-white border-start-0"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>

                        <div class="col form-check text-blue mb-3">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                name="t&c"
                                id="terms"
                            >
                            <label
                                for="form-check-label"
                                for="t&c"
                            >By clicking Next you agree with our <a
                                    href="#"
                                    class="text-blue"
                                >Terms and Conditions </a>
                                and our <a
                                    href="#"
                                    class="text-blue"
                                >Privacy Policy</a></label>
                        </div>


                        <div class="col ">
                            <input
                                type="submit"
                                class="form-control bg-blue text-white py-3"
                                value="Create Account"
                            >

                        </div>

                    </form>
                    <div class="col text-center mt-4">
                        <a
                            href="../../forgot-password.php"
                            class=" text-decoration-none text-blue fw-bold"
                        >Forgot Password</a>

                        <p class="text-blue">Already have an Account? <a
                                href="../../login.php"
                                class="text-blue fw-bold"
                            >Log In</a> </p>
                    </div>

                </div>

            </div>



        </div>

        <?php include_once("../footer.php"); ?>



            <!-- *************** BOOTSTRAP LIBRARY ********************** -->
        <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>


</html>