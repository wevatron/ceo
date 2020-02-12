<?php namespace Tests\Repositories;

use App\Models\C_giro_negocio;
use App\Repositories\C_giro_negocioRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class C_giro_negocioRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var C_giro_negocioRepository
     */
    protected $cGiroNegocioRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cGiroNegocioRepo = \App::make(C_giro_negocioRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_c_giro_negocio()
    {
        $cGiroNegocio = factory(C_giro_negocio::class)->make()->toArray();

        $createdC_giro_negocio = $this->cGiroNegocioRepo->create($cGiroNegocio);

        $createdC_giro_negocio = $createdC_giro_negocio->toArray();
        $this->assertArrayHasKey('id', $createdC_giro_negocio);
        $this->assertNotNull($createdC_giro_negocio['id'], 'Created C_giro_negocio must have id specified');
        $this->assertNotNull(C_giro_negocio::find($createdC_giro_negocio['id']), 'C_giro_negocio with given id must be in DB');
        $this->assertModelData($cGiroNegocio, $createdC_giro_negocio);
    }

    /**
     * @test read
     */
    public function test_read_c_giro_negocio()
    {
        $cGiroNegocio = factory(C_giro_negocio::class)->create();

        $dbC_giro_negocio = $this->cGiroNegocioRepo->find($cGiroNegocio->id);

        $dbC_giro_negocio = $dbC_giro_negocio->toArray();
        $this->assertModelData($cGiroNegocio->toArray(), $dbC_giro_negocio);
    }

    /**
     * @test update
     */
    public function test_update_c_giro_negocio()
    {
        $cGiroNegocio = factory(C_giro_negocio::class)->create();
        $fakeC_giro_negocio = factory(C_giro_negocio::class)->make()->toArray();

        $updatedC_giro_negocio = $this->cGiroNegocioRepo->update($fakeC_giro_negocio, $cGiroNegocio->id);

        $this->assertModelData($fakeC_giro_negocio, $updatedC_giro_negocio->toArray());
        $dbC_giro_negocio = $this->cGiroNegocioRepo->find($cGiroNegocio->id);
        $this->assertModelData($fakeC_giro_negocio, $dbC_giro_negocio->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_c_giro_negocio()
    {
        $cGiroNegocio = factory(C_giro_negocio::class)->create();

        $resp = $this->cGiroNegocioRepo->delete($cGiroNegocio->id);

        $this->assertTrue($resp);
        $this->assertNull(C_giro_negocio::find($cGiroNegocio->id), 'C_giro_negocio should not exist in DB');
    }
}
