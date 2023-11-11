<?php

/**
 * @var bool $isNew
 * @var string $companyName
 * @var string $companyLieu
 * @var string $companyDuration
 * @var string $companyWorkType
 * @var string $companyImage
 * @var string $companyJob
 * @var array $companyTask
 * @var array $companySkill
 * @var ?bool $rapportMany
 */

use Luriusfox\MyPackage\Tools\Pager;

?>

<div id="work-experience-wrapper" class="experience clearfix cardbox" data-aos="flip-up" data-aos-easing="ease-out-cubic">
    <div class="row justify-content-end">
        <div class="col-sm-9 col-lg-2">
            <div class="companyName"><?= $companyName; ?>&nbsp;<?= $isNew ? '<span class="badge text-bg-info">New</span>' : null; ?>
            </div>
            <div class="lieu"><?= $companyLieu; ?></div>
            <div class="date"><?= $companyDuration; ?></div>
            <div><span class="badge text-bg-success mb-1"><?= $companyWorkType; ?></span></div>
        </div>
        <div class="col-sm-3 col-lg-2">
            <img src="<?= $companyImage; ?>" style="width: 100px;" class="card-img-top" alt="Photo de l'entreprise <?= $companyName; ?>">
        </div>
        <div class="col-lg-8">
            <div class="profession"><?= $companyJob; ?></div>
            <div class="details">
                <ul>
                    <?php foreach ($companyTask as $task) : ?>
                        <li><?= $task; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="details">
                <p class="mb-0">Compétences travailler :</p>
                <?php Pager::renderPage(VIEW . '/utils/v_listBadge.php', [
                    'companySkill' => $companySkill
                ]); ?>
            </div>
            <?php if (!is_null($rapportMany)) : ?>
                <a href="?action=companyReport&company=<?= $companyName; ?>">
                    <button type="button" class="custom-btn btn-3">
                        <span>
                            <i class="fa fa-duotone fa-scroll fa-beat fa-2xs "></i> <?= $rapportMany ? 'Lire les rapports' : 'Lire le rapport'; ?>
                        </span>
                    </button>
                </a>
            <?php else : ?>
                <button a="#" type="button" class="custom-btn btn-3" disable><span><i class="fa fa-duotone fa-scroll fa-beat fa-2xs "></i> Aucun rapport</span></button>
            <?php endif; ?>
        </div>
    </div>
</div>