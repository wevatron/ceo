<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\C_estados_rep;

class C_estados_repApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_c_estados_rep()
    {
        $cEstadosRep = factory(C_estados_rep::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/c_estados_reps', $cEstadosRep
        );

        $this->assertApiResponse($cEstadosRep);
    }

    /**
     * @test
     */
    public function test_read_c_estados_rep()
    {
        $cEstadosRep = factory(C_estados_rep::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/c_estados_reps/'.$cEstadosRep->id
        );

        $this->assertApiResponse($cEstadosRep->toArray());
    }

    /**
     * @test
     */
    public function test_update_c_estados_rep()
    {
        $cEstadosRep = factory(C_estados_rep::class)->create();
        $editedC_estados_rep = factory(C_estados_rep::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/c_estados_reps/'.$cEstadosRep->id,
            $editedC_estados_rep
        );

        $this->assertApiResponse($editedC_estados_rep);
    }

    /**
     * @test
     */
    public function test_delete_c_estados_rep()
    {
        $cEstadosRep = factory(C_estados_rep::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/c_estados_reps/'.$cEstadosRep->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/c_estados_reps/'.$cEstadosRep->id
        );

        $this->response->assertStatus(404);
    }
}
