<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jugador Entity
 *
 * @property string $id
 * @property string $nombre
 * @property string $apellido
 * @property string $posicion
 * @property \Cake\I18n\FrozenDate $fecha_nacimiento
 * @property int $rating
 * @property int $esta_sancionado
 * @property string $equipo_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Equipo $equipo
 */
class Jugador extends Entity
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
        'apellido' => true,
        'posicion' => true,
        'fecha_nacimiento' => true,
        'rating' => true,
        'esta_sancionado' => true,
        'equipo_id' => true,
        'created' => true,
        'modified' => true,
        'equipo' => true
    ];
}
