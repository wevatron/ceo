<?php namespace Tests\Repositories;

use App\Models\T_bazar;
use App\Repositories\T_bazarRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class T_bazarRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var T_bazarRepository
     */
    protected $tBazarRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tBazarRepo = \App::make(T_bazarRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_t_bazar()
    {
        $tBazar = factory(T_bazar::class)->make()->toArray();

        $createdT_bazar = $this->tBazarRepo->create($tBazar);

        $createdT_bazar = $createdT_bazar->toArray();
        $this->assertArrayHasKey('id', $createdT_bazar);
        $this->assertNotNull($createdT_bazar['id'], 'Created T_bazar must have id specified');
        $this->assertNotNull(T_bazar::find($createdT_bazar['id']), 'T_bazar with given id must be in DB');
        $this->assertModelData($tBazar, $createdT_bazar);
    }

    /**
     * @test read
     */
    public function test_read_t_bazar()
    {
        $tBazar = factory(T_bazar::class)->create();

        $dbT_bazar = $this->tBazarRepo->find($tBazar->id);

        $dbT_bazar = $dbT_bazar->toArray();
        $this->assertModelData($tBazar->toArray(), $dbT_bazar);
    }

    /**
     * @test update
     */
    public function test_update_t_bazar()
    {
        $tBazar = factory(T_bazar::class)->create();
        $fakeT_bazar = factory(T_bazar::class)->make()->toArray();

        $updatedT_bazar = $this->tBazarRepo->update($fakeT_bazar, $tBazar->id);

        $this->assertModelData($fakeT_bazar, $updatedT_bazar->toArray());
        $dbT_bazar = $this->tBazarRepo->find($tBazar->id);
        $this->assertModelData($fakeT_bazar, $dbT_bazar->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_t_bazar()
    {
        $tBazar = factory(T_bazar::class)->create();

        $resp = $this->tBazarRepo->delete($tBazar->id);

        $this->assertTrue($resp);
        $this->assertNull(T_bazar::find($tBazar->id), 'T_bazar should not exist in DB');
    }
}
