<div>
    <h3>Index Page</h3>
    <p><?= $message ?></p>
    <?=$this->Form->create(null,[
        'type' => 'post',
        'url' => ['controller' => 'Helo', 'action' => 'index']]
    ) ?>
    <?=$this->Form->radio('radio',[
        ['value'=>'男','text'=>'male','checked'=>true],
        ['value'=>'女','text'=>'female']
    ]) ?>
    <?=$this->Form->select('select',[
        ['value'=>'Mac','text'=>'Mac OS X'],
        ['value'=>'Windows','text'=>'Windows 10'],
        ['value'=>'Linux','text'=>'Linux']
    ]) ?>
    <?=$this->Form->select('select2',[
        ['value'=>'Mac','text'=>'Mac OS X'],
        ['value'=>'Windows','text'=>'Windows 10'],
        ['value'=>'Linux','text'=>'Linux']
    ],['multiple'=>true]) ?>
    <?=$this->Form->submit('OK') ?>
    <?=$this->Form->end() ?>
    </form>
</div>
