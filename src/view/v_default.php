<?php
/**
 * @var string $headerContent
 * @var string $content
 */
?>
<!doctype html>
<html lang="fr">
<style>
    .bordertop {
        border-top: 10px ridge var(--bs-info);
    }
</style>

<head>
    <?php
    require_once VIEW . '/v_head.html';
    echo $headerContent
    ?>
</head>

<body>
    <?php require_once VIEW . '/v_nav.php'; ?>
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-lg-10 nopadding img-1" id="content">
                <?php require(VIEW . '/v_owner.html'); ?>
                <div class="p-lg-5 bg-body-tertiary img-1">
                    <div class="box-lg rounded-top border-sm border-red bg-white">
                        <?= $content; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-lg-10 nopadding bordertop">
                <footer>
                    <?php require_once VIEW . '/v_defaultfooter.php'; ?>
                </footer>
            </div>
        </div>
    </div>

</body>

</html>