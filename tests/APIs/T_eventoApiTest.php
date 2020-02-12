<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\T_evento;

class T_eventoApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_t_evento()
    {
        $tEvento = factory(T_evento::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/t_eventos', $tEvento
        );

        $this->assertApiResponse($tEvento);
    }

    /**
     * @test
     */
    public function test_read_t_evento()
    {
        $tEvento = factory(T_evento::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/t_eventos/'.$tEvento->id
        );

        $this->assertApiResponse($tEvento->toArray());
    }

    /**
     * @test
     */
    public function test_update_t_evento()
    {
        $tEvento = factory(T_evento::class)->create();
        $editedT_evento = factory(T_evento::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/t_eventos/'.$tEvento->id,
            $editedT_evento
        );

        $this->assertApiResponse($editedT_evento);
    }

    /**
     * @test
     */
    public function test_delete_t_evento()
    {
        $tEvento = factory(T_evento::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/t_eventos/'.$tEvento->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/t_eventos/'.$tEvento->id
        );

        $this->response->assertStatus(404);
    }
}
