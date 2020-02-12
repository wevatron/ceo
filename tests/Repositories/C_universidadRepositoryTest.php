<?php namespace Tests\Repositories;

use App\Models\C_universidad;
use App\Repositories\C_universidadRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class C_universidadRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var C_universidadRepository
     */
    protected $cUniversidadRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cUniversidadRepo = \App::make(C_universidadRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_c_universidad()
    {
        $cUniversidad = factory(C_universidad::class)->make()->toArray();

        $createdC_universidad = $this->cUniversidadRepo->create($cUniversidad);

        $createdC_universidad = $createdC_universidad->toArray();
        $this->assertArrayHasKey('id', $createdC_universidad);
        $this->assertNotNull($createdC_universidad['id'], 'Created C_universidad must have id specified');
        $this->assertNotNull(C_universidad::find($createdC_universidad['id']), 'C_universidad with given id must be in DB');
        $this->assertModelData($cUniversidad, $createdC_universidad);
    }

    /**
     * @test read
     */
    public function test_read_c_universidad()
    {
        $cUniversidad = factory(C_universidad::class)->create();

        $dbC_universidad = $this->cUniversidadRepo->find($cUniversidad->id);

        $dbC_universidad = $dbC_universidad->toArray();
        $this->assertModelData($cUniversidad->toArray(), $dbC_universidad);
    }

    /**
     * @test update
     */
    public function test_update_c_universidad()
    {
        $cUniversidad = factory(C_universidad::class)->create();
        $fakeC_universidad = factory(C_universidad::class)->make()->toArray();

        $updatedC_universidad = $this->cUniversidadRepo->update($fakeC_universidad, $cUniversidad->id);

        $this->assertModelData($fakeC_universidad, $updatedC_universidad->toArray());
        $dbC_universidad = $this->cUniversidadRepo->find($cUniversidad->id);
        $this->assertModelData($fakeC_universidad, $dbC_universidad->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_c_universidad()
    {
        $cUniversidad = factory(C_universidad::class)->create();

        $resp = $this->cUniversidadRepo->delete($cUniversidad->id);

        $this->assertTrue($resp);
        $this->assertNull(C_universidad::find($cUniversidad->id), 'C_universidad should not exist in DB');
    }
}
