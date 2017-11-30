<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ligas Model
 *
 * @property \App\Model\Table\EquiposTable|\Cake\ORM\Association\HasMany $Equipos
 *
 * @method \App\Model\Entity\Liga get($primaryKey, $options = [])
 * @method \App\Model\Entity\Liga newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Liga[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Liga|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Liga patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Liga[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Liga findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LigasTable extends Table
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

        $this->setTable('ligas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Equipos', [
            'foreignKey' => 'liga_id'
        ]);
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->allowEmpty('nombre');

        $validator
            ->scalar('deporte')
            ->maxLength('deporte', 100)
            ->allowEmpty('deporte');

        $validator
            ->date('fecha_inicio')
            ->allowEmpty('fecha_inicio');

        $validator
            ->date('fecha_fin')
            ->allowEmpty('fecha_fin');

        return $validator;
    }
}
