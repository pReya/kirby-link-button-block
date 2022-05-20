<?php
$alignmentClass = "left-align";

switch ($block->alignment()) {
  case "center":
    $alignmentClass = "center-align";
    break;
  case "right":
    $alignmentClass = "right-align";
    break;
  default:
    $alignmentClass = "left-align";
}

?>

<div class="k-block-type-link-button">
  <div class="button-container <?= $alignmentClass ?>">
    <a class="button-link<?= $block->fullWidth()->toBool() ? ' full-width' : '' ?><?= $block->iconAlignment() == "right" ? ' reverse' : '' ?>" href="<?= $block->targetIsDownload()->toBool() ? $block->downloadTarget()->toFile()->url() : $block->target()->toUrl()  ?>" <?= $block->targetIsDownload()->toBool() ? ' download' : '' ?>>
      <?php if ($block->icon()->isNotEmpty()) : ?>
        <div class="button-icon">
          <?= $block->icon() ?>
        </div>
      <?php endif ?>
      <?php if ($block->caption()->isNotEmpty()) : ?>
        <div class="button-content">
          <?= $block->caption()->html() ?>
        </div>
      <?php endif ?>
    </a>
  </div>
</div>