<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\T_persona;

class T_personaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_t_persona()
    {
        $tPersona = factory(T_persona::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/t_personas', $tPersona
        );

        $this->assertApiResponse($tPersona);
    }

    /**
     * @test
     */
    public function test_read_t_persona()
    {
        $tPersona = factory(T_persona::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/t_personas/'.$tPersona->id
        );

        $this->assertApiResponse($tPersona->toArray());
    }

    /**
     * @test
     */
    public function test_update_t_persona()
    {
        $tPersona = factory(T_persona::class)->create();
        $editedT_persona = factory(T_persona::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/t_personas/'.$tPersona->id,
            $editedT_persona
        );

        $this->assertApiResponse($editedT_persona);
    }

    /**
     * @test
     */
    public function test_delete_t_persona()
    {
        $tPersona = factory(T_persona::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/t_personas/'.$tPersona->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/t_personas/'.$tPersona->id
        );

        $this->response->assertStatus(404);
    }
}
