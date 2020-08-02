<?php namespace Tests\Repositories;

use App\Models\T_imagen_bazar;
use App\Repositories\T_imagen_bazarRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class T_imagen_bazarRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var T_imagen_bazarRepository
     */
    protected $tImagenBazarRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tImagenBazarRepo = \App::make(T_imagen_bazarRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_t_imagen_bazar()
    {
        $tImagenBazar = factory(T_imagen_bazar::class)->make()->toArray();

        $createdT_imagen_bazar = $this->tImagenBazarRepo->create($tImagenBazar);

        $createdT_imagen_bazar = $createdT_imagen_bazar->toArray();
        $this->assertArrayHasKey('id', $createdT_imagen_bazar);
        $this->assertNotNull($createdT_imagen_bazar['id'], 'Created T_imagen_bazar must have id specified');
        $this->assertNotNull(T_imagen_bazar::find($createdT_imagen_bazar['id']), 'T_imagen_bazar with given id must be in DB');
        $this->assertModelData($tImagenBazar, $createdT_imagen_bazar);
    }

    /**
     * @test read
     */
    public function test_read_t_imagen_bazar()
    {
        $tImagenBazar = factory(T_imagen_bazar::class)->create();

        $dbT_imagen_bazar = $this->tImagenBazarRepo->find($tImagenBazar->id);

        $dbT_imagen_bazar = $dbT_imagen_bazar->toArray();
        $this->assertModelData($tImagenBazar->toArray(), $dbT_imagen_bazar);
    }

    /**
     * @test update
     */
    public function test_update_t_imagen_bazar()
    {
        $tImagenBazar = factory(T_imagen_bazar::class)->create();
        $fakeT_imagen_bazar = factory(T_imagen_bazar::class)->make()->toArray();

        $updatedT_imagen_bazar = $this->tImagenBazarRepo->update($fakeT_imagen_bazar, $tImagenBazar->id);

        $this->assertModelData($fakeT_imagen_bazar, $updatedT_imagen_bazar->toArray());
        $dbT_imagen_bazar = $this->tImagenBazarRepo->find($tImagenBazar->id);
        $this->assertModelData($fakeT_imagen_bazar, $dbT_imagen_bazar->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_t_imagen_bazar()
    {
        $tImagenBazar = factory(T_imagen_bazar::class)->create();

        $resp = $this->tImagenBazarRepo->delete($tImagenBazar->id);

        $this->assertTrue($resp);
        $this->assertNull(T_imagen_bazar::find($tImagenBazar->id), 'T_imagen_bazar should not exist in DB');
    }
}
