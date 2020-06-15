<div class="row">
    <h4><?= __('Name') ?></h4>
    <?= $this->Text->autoParagraph(h($member->name)); ?>
</div>
<div class="row">
    <h4><?= __('Mail') ?></h4>
    <?= $this->Text->autoParagraph(h($member->mail)); ?>
</div>