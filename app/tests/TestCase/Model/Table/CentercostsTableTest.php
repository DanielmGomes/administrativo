<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CentercostsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CentercostsTable Test Case
 */
class CentercostsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CentercostsTable
     */
    public $Centercosts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Centercosts',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Centercosts') ? [] : ['className' => CentercostsTable::class];
        $this->Centercosts = TableRegistry::getTableLocator()->get('Centercosts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Centercosts);

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
