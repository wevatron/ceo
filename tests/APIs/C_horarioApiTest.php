<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\C_horario;

class C_horarioApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_c_horario()
    {
        $cHorario = factory(C_horario::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/c_horarios', $cHorario
        );

        $this->assertApiResponse($cHorario);
    }

    /**
     * @test
     */
    public function test_read_c_horario()
    {
        $cHorario = factory(C_horario::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/c_horarios/'.$cHorario->id
        );

        $this->assertApiResponse($cHorario->toArray());
    }

    /**
     * @test
     */
    public function test_update_c_horario()
    {
        $cHorario = factory(C_horario::class)->create();
        $editedC_horario = factory(C_horario::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/c_horarios/'.$cHorario->id,
            $editedC_horario
        );

        $this->assertApiResponse($editedC_horario);
    }

    /**
     * @test
     */
    public function test_delete_c_horario()
    {
        $cHorario = factory(C_horario::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/c_horarios/'.$cHorario->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/c_horarios/'.$cHorario->id
        );

        $this->response->assertStatus(404);
    }
}
