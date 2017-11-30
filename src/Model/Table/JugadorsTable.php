<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jugadors Model
 *
 * @property \App\Model\Table\EquiposTable|\Cake\ORM\Association\BelongsTo $Equipos
 *
 * @method \App\Model\Entity\Jugador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jugador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jugador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jugador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jugador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jugador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jugador findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JugadorsTable extends Table
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

        $this->setTable('jugadors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Equipos', [
            'foreignKey' => 'equipo_id'
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
            ->scalar('apellido')
            ->maxLength('apellido', 100)
            ->allowEmpty('apellido');

        $validator
            ->scalar('posicion')
            ->maxLength('posicion', 100)
            ->allowEmpty('posicion');

        $validator
            ->date('fecha_nacimiento')
            ->allowEmpty('fecha_nacimiento');

        $validator
            ->integer('rating')
            ->allowEmpty('rating');

        $validator
            ->integer('esta_sancionado')
            ->allowEmpty('esta_sancionado');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['equipo_id'], 'Equipos'));

        return $rules;
    }
}
