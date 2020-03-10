<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\T_boleto;

class T_boletoApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_t_boleto()
    {
        $tBoleto = factory(T_boleto::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/t_boletos', $tBoleto
        );

        $this->assertApiResponse($tBoleto);
    }

    /**
     * @test
     */
    public function test_read_t_boleto()
    {
        $tBoleto = factory(T_boleto::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/t_boletos/'.$tBoleto->id
        );

        $this->assertApiResponse($tBoleto->toArray());
    }

    /**
     * @test
     */
    public function test_update_t_boleto()
    {
        $tBoleto = factory(T_boleto::class)->create();
        $editedT_boleto = factory(T_boleto::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/t_boletos/'.$tBoleto->id,
            $editedT_boleto
        );

        $this->assertApiResponse($editedT_boleto);
    }

    /**
     * @test
     */
    public function test_delete_t_boleto()
    {
        $tBoleto = factory(T_boleto::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/t_boletos/'.$tBoleto->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/t_boletos/'.$tBoleto->id
        );

        $this->response->assertStatus(404);
    }
}
