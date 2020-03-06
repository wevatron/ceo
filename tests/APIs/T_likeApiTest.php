<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\T_like;

class T_likeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_t_like()
    {
        $tLike = factory(T_like::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/t_likes', $tLike
        );

        $this->assertApiResponse($tLike);
    }

    /**
     * @test
     */
    public function test_read_t_like()
    {
        $tLike = factory(T_like::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/t_likes/'.$tLike->id
        );

        $this->assertApiResponse($tLike->toArray());
    }

    /**
     * @test
     */
    public function test_update_t_like()
    {
        $tLike = factory(T_like::class)->create();
        $editedT_like = factory(T_like::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/t_likes/'.$tLike->id,
            $editedT_like
        );

        $this->assertApiResponse($editedT_like);
    }

    /**
     * @test
     */
    public function test_delete_t_like()
    {
        $tLike = factory(T_like::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/t_likes/'.$tLike->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/t_likes/'.$tLike->id
        );

        $this->response->assertStatus(404);
    }
}
