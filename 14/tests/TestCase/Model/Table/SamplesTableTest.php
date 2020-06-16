<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SamplesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SamplesTable Test Case
 */
class SamplesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SamplesTable
     */
    public $Samples;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Samples',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Samples') ? [] : ['className' => SamplesTable::class];
        $this->Samples = TableRegistry::getTableLocator()->get('Samples', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Samples);

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
