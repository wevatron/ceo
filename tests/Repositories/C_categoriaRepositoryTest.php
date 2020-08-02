<?php namespace Tests\Repositories;

use App\Models\C_categoria;
use App\Repositories\C_categoriaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class C_categoriaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var C_categoriaRepository
     */
    protected $cCategoriaRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cCategoriaRepo = \App::make(C_categoriaRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_c_categoria()
    {
        $cCategoria = factory(C_categoria::class)->make()->toArray();

        $createdC_categoria = $this->cCategoriaRepo->create($cCategoria);

        $createdC_categoria = $createdC_categoria->toArray();
        $this->assertArrayHasKey('id', $createdC_categoria);
        $this->assertNotNull($createdC_categoria['id'], 'Created C_categoria must have id specified');
        $this->assertNotNull(C_categoria::find($createdC_categoria['id']), 'C_categoria with given id must be in DB');
        $this->assertModelData($cCategoria, $createdC_categoria);
    }

    /**
     * @test read
     */
    public function test_read_c_categoria()
    {
        $cCategoria = factory(C_categoria::class)->create();

        $dbC_categoria = $this->cCategoriaRepo->find($cCategoria->id);

        $dbC_categoria = $dbC_categoria->toArray();
        $this->assertModelData($cCategoria->toArray(), $dbC_categoria);
    }

    /**
     * @test update
     */
    public function test_update_c_categoria()
    {
        $cCategoria = factory(C_categoria::class)->create();
        $fakeC_categoria = factory(C_categoria::class)->make()->toArray();

        $updatedC_categoria = $this->cCategoriaRepo->update($fakeC_categoria, $cCategoria->id);

        $this->assertModelData($fakeC_categoria, $updatedC_categoria->toArray());
        $dbC_categoria = $this->cCategoriaRepo->find($cCategoria->id);
        $this->assertModelData($fakeC_categoria, $dbC_categoria->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_c_categoria()
    {
        $cCategoria = factory(C_categoria::class)->create();

        $resp = $this->cCategoriaRepo->delete($cCategoria->id);

        $this->assertTrue($resp);
        $this->assertNull(C_categoria::find($cCategoria->id), 'C_categoria should not exist in DB');
    }
}
