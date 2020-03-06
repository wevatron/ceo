<?php namespace Tests\Repositories;

use App\Models\T_like;
use App\Repositories\T_likeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class T_likeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var T_likeRepository
     */
    protected $tLikeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tLikeRepo = \App::make(T_likeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_t_like()
    {
        $tLike = factory(T_like::class)->make()->toArray();

        $createdT_like = $this->tLikeRepo->create($tLike);

        $createdT_like = $createdT_like->toArray();
        $this->assertArrayHasKey('id', $createdT_like);
        $this->assertNotNull($createdT_like['id'], 'Created T_like must have id specified');
        $this->assertNotNull(T_like::find($createdT_like['id']), 'T_like with given id must be in DB');
        $this->assertModelData($tLike, $createdT_like);
    }

    /**
     * @test read
     */
    public function test_read_t_like()
    {
        $tLike = factory(T_like::class)->create();

        $dbT_like = $this->tLikeRepo->find($tLike->id);

        $dbT_like = $dbT_like->toArray();
        $this->assertModelData($tLike->toArray(), $dbT_like);
    }

    /**
     * @test update
     */
    public function test_update_t_like()
    {
        $tLike = factory(T_like::class)->create();
        $fakeT_like = factory(T_like::class)->make()->toArray();

        $updatedT_like = $this->tLikeRepo->update($fakeT_like, $tLike->id);

        $this->assertModelData($fakeT_like, $updatedT_like->toArray());
        $dbT_like = $this->tLikeRepo->find($tLike->id);
        $this->assertModelData($fakeT_like, $dbT_like->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_t_like()
    {
        $tLike = factory(T_like::class)->create();

        $resp = $this->tLikeRepo->delete($tLike->id);

        $this->assertTrue($resp);
        $this->assertNull(T_like::find($tLike->id), 'T_like should not exist in DB');
    }
}
