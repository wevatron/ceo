<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\C_tipo_usuario;

class C_tipo_usuarioApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_c_tipo_usuario()
    {
        $cTipoUsuario = factory(C_tipo_usuario::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/c_tipo_usuarios', $cTipoUsuario
        );

        $this->assertApiResponse($cTipoUsuario);
    }

    /**
     * @test
     */
    public function test_read_c_tipo_usuario()
    {
        $cTipoUsuario = factory(C_tipo_usuario::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/c_tipo_usuarios/'.$cTipoUsuario->id
        );

        $this->assertApiResponse($cTipoUsuario->toArray());
    }

    /**
     * @test
     */
    public function test_update_c_tipo_usuario()
    {
        $cTipoUsuario = factory(C_tipo_usuario::class)->create();
        $editedC_tipo_usuario = factory(C_tipo_usuario::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/c_tipo_usuarios/'.$cTipoUsuario->id,
            $editedC_tipo_usuario
        );

        $this->assertApiResponse($editedC_tipo_usuario);
    }

    /**
     * @test
     */
    public function test_delete_c_tipo_usuario()
    {
        $cTipoUsuario = factory(C_tipo_usuario::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/c_tipo_usuarios/'.$cTipoUsuario->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/c_tipo_usuarios/'.$cTipoUsuario->id
        );

        $this->response->assertStatus(404);
    }
}
