<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\T_imagen_bazar;

class T_imagen_bazarApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_t_imagen_bazar()
    {
        $tImagenBazar = factory(T_imagen_bazar::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/t_imagen_bazars', $tImagenBazar
        );

        $this->assertApiResponse($tImagenBazar);
    }

    /**
     * @test
     */
    public function test_read_t_imagen_bazar()
    {
        $tImagenBazar = factory(T_imagen_bazar::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/t_imagen_bazars/'.$tImagenBazar->id
        );

        $this->assertApiResponse($tImagenBazar->toArray());
    }

    /**
     * @test
     */
    public function test_update_t_imagen_bazar()
    {
        $tImagenBazar = factory(T_imagen_bazar::class)->create();
        $editedT_imagen_bazar = factory(T_imagen_bazar::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/t_imagen_bazars/'.$tImagenBazar->id,
            $editedT_imagen_bazar
        );

        $this->assertApiResponse($editedT_imagen_bazar);
    }

    /**
     * @test
     */
    public function test_delete_t_imagen_bazar()
    {
        $tImagenBazar = factory(T_imagen_bazar::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/t_imagen_bazars/'.$tImagenBazar->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/t_imagen_bazars/'.$tImagenBazar->id
        );

        $this->response->assertStatus(404);
    }
}
