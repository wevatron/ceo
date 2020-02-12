<?php namespace Tests\Repositories;

use App\Models\T_persona;
use App\Repositories\T_personaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class T_personaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var T_personaRepository
     */
    protected $tPersonaRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tPersonaRepo = \App::make(T_personaRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_t_persona()
    {
        $tPersona = factory(T_persona::class)->make()->toArray();

        $createdT_persona = $this->tPersonaRepo->create($tPersona);

        $createdT_persona = $createdT_persona->toArray();
        $this->assertArrayHasKey('id', $createdT_persona);
        $this->assertNotNull($createdT_persona['id'], 'Created T_persona must have id specified');
        $this->assertNotNull(T_persona::find($createdT_persona['id']), 'T_persona with given id must be in DB');
        $this->assertModelData($tPersona, $createdT_persona);
    }

    /**
     * @test read
     */
    public function test_read_t_persona()
    {
        $tPersona = factory(T_persona::class)->create();

        $dbT_persona = $this->tPersonaRepo->find($tPersona->id);

        $dbT_persona = $dbT_persona->toArray();
        $this->assertModelData($tPersona->toArray(), $dbT_persona);
    }

    /**
     * @test update
     */
    public function test_update_t_persona()
    {
        $tPersona = factory(T_persona::class)->create();
        $fakeT_persona = factory(T_persona::class)->make()->toArray();

        $updatedT_persona = $this->tPersonaRepo->update($fakeT_persona, $tPersona->id);

        $this->assertModelData($fakeT_persona, $updatedT_persona->toArray());
        $dbT_persona = $this->tPersonaRepo->find($tPersona->id);
        $this->assertModelData($fakeT_persona, $dbT_persona->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_t_persona()
    {
        $tPersona = factory(T_persona::class)->create();

        $resp = $this->tPersonaRepo->delete($tPersona->id);

        $this->assertTrue($resp);
        $this->assertNull(T_persona::find($tPersona->id), 'T_persona should not exist in DB');
    }
}
