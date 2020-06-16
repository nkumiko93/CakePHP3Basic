<?php
namespace App\Model\Table;

use App\Model\Entity\Message;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Messages Model
 */
class MessagesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('messages');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Members')
            ->setForeignKey('members_id')
            ->setJoinType('INNER');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('comment')
            ->maxLength('comment', 255)
            ->allowEmptyString('comment');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['members_id'], 'Members'));
        return $rules;
    }
}
