<?php namespace Tests\Repositories;

use App\Models\T_evento;
use App\Repositories\T_eventoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class T_eventoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var T_eventoRepository
     */
    protected $tEventoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tEventoRepo = \App::make(T_eventoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_t_evento()
    {
        $tEvento = factory(T_evento::class)->make()->toArray();

        $createdT_evento = $this->tEventoRepo->create($tEvento);

        $createdT_evento = $createdT_evento->toArray();
        $this->assertArrayHasKey('id', $createdT_evento);
        $this->assertNotNull($createdT_evento['id'], 'Created T_evento must have id specified');
        $this->assertNotNull(T_evento::find($createdT_evento['id']), 'T_evento with given id must be in DB');
        $this->assertModelData($tEvento, $createdT_evento);
    }

    /**
     * @test read
     */
    public function test_read_t_evento()
    {
        $tEvento = factory(T_evento::class)->create();

        $dbT_evento = $this->tEventoRepo->find($tEvento->id);

        $dbT_evento = $dbT_evento->toArray();
        $this->assertModelData($tEvento->toArray(), $dbT_evento);
    }

    /**
     * @test update
     */
    public function test_update_t_evento()
    {
        $tEvento = factory(T_evento::class)->create();
        $fakeT_evento = factory(T_evento::class)->make()->toArray();

        $updatedT_evento = $this->tEventoRepo->update($fakeT_evento, $tEvento->id);

        $this->assertModelData($fakeT_evento, $updatedT_evento->toArray());
        $dbT_evento = $this->tEventoRepo->find($tEvento->id);
        $this->assertModelData($fakeT_evento, $dbT_evento->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_t_evento()
    {
        $tEvento = factory(T_evento::class)->create();

        $resp = $this->tEventoRepo->delete($tEvento->id);

        $this->assertTrue($resp);
        $this->assertNull(T_evento::find($tEvento->id), 'T_evento should not exist in DB');
    }
}
