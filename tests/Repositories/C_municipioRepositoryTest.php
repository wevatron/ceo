<?php namespace Tests\Repositories;

use App\Models\C_municipio;
use App\Repositories\C_municipioRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class C_municipioRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var C_municipioRepository
     */
    protected $cMunicipioRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cMunicipioRepo = \App::make(C_municipioRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_c_municipio()
    {
        $cMunicipio = factory(C_municipio::class)->make()->toArray();

        $createdC_municipio = $this->cMunicipioRepo->create($cMunicipio);

        $createdC_municipio = $createdC_municipio->toArray();
        $this->assertArrayHasKey('id', $createdC_municipio);
        $this->assertNotNull($createdC_municipio['id'], 'Created C_municipio must have id specified');
        $this->assertNotNull(C_municipio::find($createdC_municipio['id']), 'C_municipio with given id must be in DB');
        $this->assertModelData($cMunicipio, $createdC_municipio);
    }

    /**
     * @test read
     */
    public function test_read_c_municipio()
    {
        $cMunicipio = factory(C_municipio::class)->create();

        $dbC_municipio = $this->cMunicipioRepo->find($cMunicipio->id);

        $dbC_municipio = $dbC_municipio->toArray();
        $this->assertModelData($cMunicipio->toArray(), $dbC_municipio);
    }

    /**
     * @test update
     */
    public function test_update_c_municipio()
    {
        $cMunicipio = factory(C_municipio::class)->create();
        $fakeC_municipio = factory(C_municipio::class)->make()->toArray();

        $updatedC_municipio = $this->cMunicipioRepo->update($fakeC_municipio, $cMunicipio->id);

        $this->assertModelData($fakeC_municipio, $updatedC_municipio->toArray());
        $dbC_municipio = $this->cMunicipioRepo->find($cMunicipio->id);
        $this->assertModelData($fakeC_municipio, $dbC_municipio->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_c_municipio()
    {
        $cMunicipio = factory(C_municipio::class)->create();

        $resp = $this->cMunicipioRepo->delete($cMunicipio->id);

        $this->assertTrue($resp);
        $this->assertNull(C_municipio::find($cMunicipio->id), 'C_municipio should not exist in DB');
    }
}
