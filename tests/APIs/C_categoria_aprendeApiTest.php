<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\C_categoria_aprende;

class C_categoria_aprendeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_c_categoria_aprende()
    {
        $cCategoriaAprende = factory(C_categoria_aprende::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/c_categoria_aprendes', $cCategoriaAprende
        );

        $this->assertApiResponse($cCategoriaAprende);
    }

    /**
     * @test
     */
    public function test_read_c_categoria_aprende()
    {
        $cCategoriaAprende = factory(C_categoria_aprende::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/c_categoria_aprendes/'.$cCategoriaAprende->id
        );

        $this->assertApiResponse($cCategoriaAprende->toArray());
    }

    /**
     * @test
     */
    public function test_update_c_categoria_aprende()
    {
        $cCategoriaAprende = factory(C_categoria_aprende::class)->create();
        $editedC_categoria_aprende = factory(C_categoria_aprende::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/c_categoria_aprendes/'.$cCategoriaAprende->id,
            $editedC_categoria_aprende
        );

        $this->assertApiResponse($editedC_categoria_aprende);
    }

    /**
     * @test
     */
    public function test_delete_c_categoria_aprende()
    {
        $cCategoriaAprende = factory(C_categoria_aprende::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/c_categoria_aprendes/'.$cCategoriaAprende->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/c_categoria_aprendes/'.$cCategoriaAprende->id
        );

        $this->response->assertStatus(404);
    }
}
