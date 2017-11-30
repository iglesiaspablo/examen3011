<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LigasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LigasTable Test Case
 */
class LigasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LigasTable
     */
    public $Ligas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ligas',
        'app.equipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ligas') ? [] : ['className' => LigasTable::class];
        $this->Ligas = TableRegistry::get('Ligas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ligas);

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
}
