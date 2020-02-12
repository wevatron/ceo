<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\C_universidad;

class C_universidadApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_c_universidad()
    {
        $cUniversidad = factory(C_universidad::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/c_universidads', $cUniversidad
        );

        $this->assertApiResponse($cUniversidad);
    }

    /**
     * @test
     */
    public function test_read_c_universidad()
    {
        $cUniversidad = factory(C_universidad::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/c_universidads/'.$cUniversidad->id
        );

        $this->assertApiResponse($cUniversidad->toArray());
    }

    /**
     * @test
     */
    public function test_update_c_universidad()
    {
        $cUniversidad = factory(C_universidad::class)->create();
        $editedC_universidad = factory(C_universidad::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/c_universidads/'.$cUniversidad->id,
            $editedC_universidad
        );

        $this->assertApiResponse($editedC_universidad);
    }

    /**
     * @test
     */
    public function test_delete_c_universidad()
    {
        $cUniversidad = factory(C_universidad::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/c_universidads/'.$cUniversidad->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/c_universidads/'.$cUniversidad->id
        );

        $this->response->assertStatus(404);
    }
}
