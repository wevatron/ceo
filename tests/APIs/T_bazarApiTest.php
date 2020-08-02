<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\T_bazar;

class T_bazarApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_t_bazar()
    {
        $tBazar = factory(T_bazar::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/t_bazars', $tBazar
        );

        $this->assertApiResponse($tBazar);
    }

    /**
     * @test
     */
    public function test_read_t_bazar()
    {
        $tBazar = factory(T_bazar::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/t_bazars/'.$tBazar->id
        );

        $this->assertApiResponse($tBazar->toArray());
    }

    /**
     * @test
     */
    public function test_update_t_bazar()
    {
        $tBazar = factory(T_bazar::class)->create();
        $editedT_bazar = factory(T_bazar::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/t_bazars/'.$tBazar->id,
            $editedT_bazar
        );

        $this->assertApiResponse($editedT_bazar);
    }

    /**
     * @test
     */
    public function test_delete_t_bazar()
    {
        $tBazar = factory(T_bazar::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/t_bazars/'.$tBazar->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/t_bazars/'.$tBazar->id
        );

        $this->response->assertStatus(404);
    }
}
