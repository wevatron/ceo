<?php namespace Tests\Repositories;

use App\Models\C_estados_rep;
use App\Repositories\C_estados_repRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class C_estados_repRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var C_estados_repRepository
     */
    protected $cEstadosRepRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cEstadosRepRepo = \App::make(C_estados_repRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_c_estados_rep()
    {
        $cEstadosRep = factory(C_estados_rep::class)->make()->toArray();

        $createdC_estados_rep = $this->cEstadosRepRepo->create($cEstadosRep);

        $createdC_estados_rep = $createdC_estados_rep->toArray();
        $this->assertArrayHasKey('id', $createdC_estados_rep);
        $this->assertNotNull($createdC_estados_rep['id'], 'Created C_estados_rep must have id specified');
        $this->assertNotNull(C_estados_rep::find($createdC_estados_rep['id']), 'C_estados_rep with given id must be in DB');
        $this->assertModelData($cEstadosRep, $createdC_estados_rep);
    }

    /**
     * @test read
     */
    public function test_read_c_estados_rep()
    {
        $cEstadosRep = factory(C_estados_rep::class)->create();

        $dbC_estados_rep = $this->cEstadosRepRepo->find($cEstadosRep->id);

        $dbC_estados_rep = $dbC_estados_rep->toArray();
        $this->assertModelData($cEstadosRep->toArray(), $dbC_estados_rep);
    }

    /**
     * @test update
     */
    public function test_update_c_estados_rep()
    {
        $cEstadosRep = factory(C_estados_rep::class)->create();
        $fakeC_estados_rep = factory(C_estados_rep::class)->make()->toArray();

        $updatedC_estados_rep = $this->cEstadosRepRepo->update($fakeC_estados_rep, $cEstadosRep->id);

        $this->assertModelData($fakeC_estados_rep, $updatedC_estados_rep->toArray());
        $dbC_estados_rep = $this->cEstadosRepRepo->find($cEstadosRep->id);
        $this->assertModelData($fakeC_estados_rep, $dbC_estados_rep->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_c_estados_rep()
    {
        $cEstadosRep = factory(C_estados_rep::class)->create();

        $resp = $this->cEstadosRepRepo->delete($cEstadosRep->id);

        $this->assertTrue($resp);
        $this->assertNull(C_estados_rep::find($cEstadosRep->id), 'C_estados_rep should not exist in DB');
    }
}
