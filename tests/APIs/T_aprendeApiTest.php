<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\T_aprende;

class T_aprendeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_t_aprende()
    {
        $tAprende = factory(T_aprende::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/t_aprendes', $tAprende
        );

        $this->assertApiResponse($tAprende);
    }

    /**
     * @test
     */
    public function test_read_t_aprende()
    {
        $tAprende = factory(T_aprende::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/t_aprendes/'.$tAprende->id
        );

        $this->assertApiResponse($tAprende->toArray());
    }

    /**
     * @test
     */
    public function test_update_t_aprende()
    {
        $tAprende = factory(T_aprende::class)->create();
        $editedT_aprende = factory(T_aprende::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/t_aprendes/'.$tAprende->id,
            $editedT_aprende
        );

        $this->assertApiResponse($editedT_aprende);
    }

    /**
     * @test
     */
    public function test_delete_t_aprende()
    {
        $tAprende = factory(T_aprende::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/t_aprendes/'.$tAprende->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/t_aprendes/'.$tAprende->id
        );

        $this->response->assertStatus(404);
    }
}
