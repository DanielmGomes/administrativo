<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficialsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficialsTable Test Case
 */
class OfficialsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficialsTable
     */
    public $Officials;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Officials',
        'app.Users',
        'app.Companies',
        'app.Offices',
        'app.Departments',
        'app.Sectors',
        'app.CenterCosts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Officials') ? [] : ['className' => OfficialsTable::class];
        $this->Officials = TableRegistry::getTableLocator()->get('Officials', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Officials);

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
