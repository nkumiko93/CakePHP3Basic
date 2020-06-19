<div>
    <h3>Delete Person</h3>
    <?= $this->Form->create($person) ?>
    <fieldset>
        <p><?= h($person->id) ?></p>
        <p><?= h($person->name) ?></p>
        <p><?= h($person->age) ?></p>
        <p><?= h($person->mail) ?></p>
    </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
</div>
