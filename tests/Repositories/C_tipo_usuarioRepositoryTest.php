<?php namespace Tests\Repositories;

use App\Models\C_tipo_usuario;
use App\Repositories\C_tipo_usuarioRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class C_tipo_usuarioRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var C_tipo_usuarioRepository
     */
    protected $cTipoUsuarioRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cTipoUsuarioRepo = \App::make(C_tipo_usuarioRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_c_tipo_usuario()
    {
        $cTipoUsuario = factory(C_tipo_usuario::class)->make()->toArray();

        $createdC_tipo_usuario = $this->cTipoUsuarioRepo->create($cTipoUsuario);

        $createdC_tipo_usuario = $createdC_tipo_usuario->toArray();
        $this->assertArrayHasKey('id', $createdC_tipo_usuario);
        $this->assertNotNull($createdC_tipo_usuario['id'], 'Created C_tipo_usuario must have id specified');
        $this->assertNotNull(C_tipo_usuario::find($createdC_tipo_usuario['id']), 'C_tipo_usuario with given id must be in DB');
        $this->assertModelData($cTipoUsuario, $createdC_tipo_usuario);
    }

    /**
     * @test read
     */
    public function test_read_c_tipo_usuario()
    {
        $cTipoUsuario = factory(C_tipo_usuario::class)->create();

        $dbC_tipo_usuario = $this->cTipoUsuarioRepo->find($cTipoUsuario->id);

        $dbC_tipo_usuario = $dbC_tipo_usuario->toArray();
        $this->assertModelData($cTipoUsuario->toArray(), $dbC_tipo_usuario);
    }

    /**
     * @test update
     */
    public function test_update_c_tipo_usuario()
    {
        $cTipoUsuario = factory(C_tipo_usuario::class)->create();
        $fakeC_tipo_usuario = factory(C_tipo_usuario::class)->make()->toArray();

        $updatedC_tipo_usuario = $this->cTipoUsuarioRepo->update($fakeC_tipo_usuario, $cTipoUsuario->id);

        $this->assertModelData($fakeC_tipo_usuario, $updatedC_tipo_usuario->toArray());
        $dbC_tipo_usuario = $this->cTipoUsuarioRepo->find($cTipoUsuario->id);
        $this->assertModelData($fakeC_tipo_usuario, $dbC_tipo_usuario->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_c_tipo_usuario()
    {
        $cTipoUsuario = factory(C_tipo_usuario::class)->create();

        $resp = $this->cTipoUsuarioRepo->delete($cTipoUsuario->id);

        $this->assertTrue($resp);
        $this->assertNull(C_tipo_usuario::find($cTipoUsuario->id), 'C_tipo_usuario should not exist in DB');
    }
}
