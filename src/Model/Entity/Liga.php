<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Liga Entity
 *
 * @property string $id
 * @property string $nombre
 * @property string $deporte
 * @property \Cake\I18n\FrozenDate $fecha_inicio
 * @property \Cake\I18n\FrozenDate $fecha_fin
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Equipo[] $equipos
 */
class Liga extends Entity
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
        'deporte' => true,
        'fecha_inicio' => true,
        'fecha_fin' => true,
        'created' => true,
        'modified' => true,
        'equipos' => true
    ];
}
