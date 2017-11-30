<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JugadorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JugadorsTable Test Case
 */
class JugadorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JugadorsTable
     */
    public $Jugadors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jugadors',
        'app.equipos',
        'app.ligas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Jugadors') ? [] : ['className' => JugadorsTable::class];
        $this->Jugadors = TableRegistry::get('Jugadors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jugadors);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
