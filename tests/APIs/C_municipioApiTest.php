<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\C_municipio;

class C_municipioApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_c_municipio()
    {
        $cMunicipio = factory(C_municipio::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/c_municipios', $cMunicipio
        );

        $this->assertApiResponse($cMunicipio);
    }

    /**
     * @test
     */
    public function test_read_c_municipio()
    {
        $cMunicipio = factory(C_municipio::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/c_municipios/'.$cMunicipio->id
        );

        $this->assertApiResponse($cMunicipio->toArray());
    }

    /**
     * @test
     */
    public function test_update_c_municipio()
    {
        $cMunicipio = factory(C_municipio::class)->create();
        $editedC_municipio = factory(C_municipio::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/c_municipios/'.$cMunicipio->id,
            $editedC_municipio
        );

        $this->assertApiResponse($editedC_municipio);
    }

    /**
     * @test
     */
    public function test_delete_c_municipio()
    {
        $cMunicipio = factory(C_municipio::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/c_municipios/'.$cMunicipio->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/c_municipios/'.$cMunicipio->id
        );

        $this->response->assertStatus(404);
    }
}
