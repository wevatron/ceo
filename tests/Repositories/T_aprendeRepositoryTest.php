<?php namespace Tests\Repositories;

use App\Models\T_aprende;
use App\Repositories\T_aprendeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class T_aprendeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var T_aprendeRepository
     */
    protected $tAprendeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tAprendeRepo = \App::make(T_aprendeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_t_aprende()
    {
        $tAprende = factory(T_aprende::class)->make()->toArray();

        $createdT_aprende = $this->tAprendeRepo->create($tAprende);

        $createdT_aprende = $createdT_aprende->toArray();
        $this->assertArrayHasKey('id', $createdT_aprende);
        $this->assertNotNull($createdT_aprende['id'], 'Created T_aprende must have id specified');
        $this->assertNotNull(T_aprende::find($createdT_aprende['id']), 'T_aprende with given id must be in DB');
        $this->assertModelData($tAprende, $createdT_aprende);
    }

    /**
     * @test read
     */
    public function test_read_t_aprende()
    {
        $tAprende = factory(T_aprende::class)->create();

        $dbT_aprende = $this->tAprendeRepo->find($tAprende->id);

        $dbT_aprende = $dbT_aprende->toArray();
        $this->assertModelData($tAprende->toArray(), $dbT_aprende);
    }

    /**
     * @test update
     */
    public function test_update_t_aprende()
    {
        $tAprende = factory(T_aprende::class)->create();
        $fakeT_aprende = factory(T_aprende::class)->make()->toArray();

        $updatedT_aprende = $this->tAprendeRepo->update($fakeT_aprende, $tAprende->id);

        $this->assertModelData($fakeT_aprende, $updatedT_aprende->toArray());
        $dbT_aprende = $this->tAprendeRepo->find($tAprende->id);
        $this->assertModelData($fakeT_aprende, $dbT_aprende->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_t_aprende()
    {
        $tAprende = factory(T_aprende::class)->create();

        $resp = $this->tAprendeRepo->delete($tAprende->id);

        $this->assertTrue($resp);
        $this->assertNull(T_aprende::find($tAprende->id), 'T_aprende should not exist in DB');
    }
}
