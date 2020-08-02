<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\C_categoria;

class C_categoriaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_c_categoria()
    {
        $cCategoria = factory(C_categoria::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/c_categorias', $cCategoria
        );

        $this->assertApiResponse($cCategoria);
    }

    /**
     * @test
     */
    public function test_read_c_categoria()
    {
        $cCategoria = factory(C_categoria::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/c_categorias/'.$cCategoria->id
        );

        $this->assertApiResponse($cCategoria->toArray());
    }

    /**
     * @test
     */
    public function test_update_c_categoria()
    {
        $cCategoria = factory(C_categoria::class)->create();
        $editedC_categoria = factory(C_categoria::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/c_categorias/'.$cCategoria->id,
            $editedC_categoria
        );

        $this->assertApiResponse($editedC_categoria);
    }

    /**
     * @test
     */
    public function test_delete_c_categoria()
    {
        $cCategoria = factory(C_categoria::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/c_categorias/'.$cCategoria->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/c_categorias/'.$cCategoria->id
        );

        $this->response->assertStatus(404);
    }
}
