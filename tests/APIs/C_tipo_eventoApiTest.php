<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\C_tipo_evento;

class C_tipo_eventoApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_c_tipo_evento()
    {
        $cTipoEvento = factory(C_tipo_evento::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/c_tipo_eventos', $cTipoEvento
        );

        $this->assertApiResponse($cTipoEvento);
    }

    /**
     * @test
     */
    public function test_read_c_tipo_evento()
    {
        $cTipoEvento = factory(C_tipo_evento::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/c_tipo_eventos/'.$cTipoEvento->id
        );

        $this->assertApiResponse($cTipoEvento->toArray());
    }

    /**
     * @test
     */
    public function test_update_c_tipo_evento()
    {
        $cTipoEvento = factory(C_tipo_evento::class)->create();
        $editedC_tipo_evento = factory(C_tipo_evento::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/c_tipo_eventos/'.$cTipoEvento->id,
            $editedC_tipo_evento
        );

        $this->assertApiResponse($editedC_tipo_evento);
    }

    /**
     * @test
     */
    public function test_delete_c_tipo_evento()
    {
        $cTipoEvento = factory(C_tipo_evento::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/c_tipo_eventos/'.$cTipoEvento->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/c_tipo_eventos/'.$cTipoEvento->id
        );

        $this->response->assertStatus(404);
    }
}
