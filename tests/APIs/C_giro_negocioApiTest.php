<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\C_giro_negocio;

class C_giro_negocioApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_c_giro_negocio()
    {
        $cGiroNegocio = factory(C_giro_negocio::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/c_giro_negocios', $cGiroNegocio
        );

        $this->assertApiResponse($cGiroNegocio);
    }

    /**
     * @test
     */
    public function test_read_c_giro_negocio()
    {
        $cGiroNegocio = factory(C_giro_negocio::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/c_giro_negocios/'.$cGiroNegocio->id
        );

        $this->assertApiResponse($cGiroNegocio->toArray());
    }

    /**
     * @test
     */
    public function test_update_c_giro_negocio()
    {
        $cGiroNegocio = factory(C_giro_negocio::class)->create();
        $editedC_giro_negocio = factory(C_giro_negocio::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/c_giro_negocios/'.$cGiroNegocio->id,
            $editedC_giro_negocio
        );

        $this->assertApiResponse($editedC_giro_negocio);
    }

    /**
     * @test
     */
    public function test_delete_c_giro_negocio()
    {
        $cGiroNegocio = factory(C_giro_negocio::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/c_giro_negocios/'.$cGiroNegocio->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/c_giro_negocios/'.$cGiroNegocio->id
        );

        $this->response->assertStatus(404);
    }
}
