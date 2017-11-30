<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipo Entity
 *
 * @property string $id
 * @property string $nombre
 * @property string $ciudad
 * @property string $provincia
 * @property string $liga_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Liga $liga
 * @property \App\Model\Entity\Jugador[] $jugadors
 */
class Equipo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'ciudad' => true,
        'provincia' => true,
        'liga_id' => true,
        'created' => true,
        'modified' => true,
        'liga' => true,
        'jugadors' => true
    ];
}
