<?php namespace Tests\Repositories;

use App\Models\C_categoria_aprende;
use App\Repositories\C_categoria_aprendeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class C_categoria_aprendeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var C_categoria_aprendeRepository
     */
    protected $cCategoriaAprendeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cCategoriaAprendeRepo = \App::make(C_categoria_aprendeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_c_categoria_aprende()
    {
        $cCategoriaAprende = factory(C_categoria_aprende::class)->make()->toArray();

        $createdC_categoria_aprende = $this->cCategoriaAprendeRepo->create($cCategoriaAprende);

        $createdC_categoria_aprende = $createdC_categoria_aprende->toArray();
        $this->assertArrayHasKey('id', $createdC_categoria_aprende);
        $this->assertNotNull($createdC_categoria_aprende['id'], 'Created C_categoria_aprende must have id specified');
        $this->assertNotNull(C_categoria_aprende::find($createdC_categoria_aprende['id']), 'C_categoria_aprende with given id must be in DB');
        $this->assertModelData($cCategoriaAprende, $createdC_categoria_aprende);
    }

    /**
     * @test read
     */
    public function test_read_c_categoria_aprende()
    {
        $cCategoriaAprende = factory(C_categoria_aprende::class)->create();

        $dbC_categoria_aprende = $this->cCategoriaAprendeRepo->find($cCategoriaAprende->id);

        $dbC_categoria_aprende = $dbC_categoria_aprende->toArray();
        $this->assertModelData($cCategoriaAprende->toArray(), $dbC_categoria_aprende);
    }

    /**
     * @test update
     */
    public function test_update_c_categoria_aprende()
    {
        $cCategoriaAprende = factory(C_categoria_aprende::class)->create();
        $fakeC_categoria_aprende = factory(C_categoria_aprende::class)->make()->toArray();

        $updatedC_categoria_aprende = $this->cCategoriaAprendeRepo->update($fakeC_categoria_aprende, $cCategoriaAprende->id);

        $this->assertModelData($fakeC_categoria_aprende, $updatedC_categoria_aprende->toArray());
        $dbC_categoria_aprende = $this->cCategoriaAprendeRepo->find($cCategoriaAprende->id);
        $this->assertModelData($fakeC_categoria_aprende, $dbC_categoria_aprende->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_c_categoria_aprende()
    {
        $cCategoriaAprende = factory(C_categoria_aprende::class)->create();

        $resp = $this->cCategoriaAprendeRepo->delete($cCategoriaAprende->id);

        $this->assertTrue($resp);
        $this->assertNull(C_categoria_aprende::find($cCategoriaAprende->id), 'C_categoria_aprende should not exist in DB');
    }
}
