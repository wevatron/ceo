<?php namespace Tests\Repositories;

use App\Models\C_tipo_evento;
use App\Repositories\C_tipo_eventoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class C_tipo_eventoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var C_tipo_eventoRepository
     */
    protected $cTipoEventoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cTipoEventoRepo = \App::make(C_tipo_eventoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_c_tipo_evento()
    {
        $cTipoEvento = factory(C_tipo_evento::class)->make()->toArray();

        $createdC_tipo_evento = $this->cTipoEventoRepo->create($cTipoEvento);

        $createdC_tipo_evento = $createdC_tipo_evento->toArray();
        $this->assertArrayHasKey('id', $createdC_tipo_evento);
        $this->assertNotNull($createdC_tipo_evento['id'], 'Created C_tipo_evento must have id specified');
        $this->assertNotNull(C_tipo_evento::find($createdC_tipo_evento['id']), 'C_tipo_evento with given id must be in DB');
        $this->assertModelData($cTipoEvento, $createdC_tipo_evento);
    }

    /**
     * @test read
     */
    public function test_read_c_tipo_evento()
    {
        $cTipoEvento = factory(C_tipo_evento::class)->create();

        $dbC_tipo_evento = $this->cTipoEventoRepo->find($cTipoEvento->id);

        $dbC_tipo_evento = $dbC_tipo_evento->toArray();
        $this->assertModelData($cTipoEvento->toArray(), $dbC_tipo_evento);
    }

    /**
     * @test update
     */
    public function test_update_c_tipo_evento()
    {
        $cTipoEvento = factory(C_tipo_evento::class)->create();
        $fakeC_tipo_evento = factory(C_tipo_evento::class)->make()->toArray();

        $updatedC_tipo_evento = $this->cTipoEventoRepo->update($fakeC_tipo_evento, $cTipoEvento->id);

        $this->assertModelData($fakeC_tipo_evento, $updatedC_tipo_evento->toArray());
        $dbC_tipo_evento = $this->cTipoEventoRepo->find($cTipoEvento->id);
        $this->assertModelData($fakeC_tipo_evento, $dbC_tipo_evento->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_c_tipo_evento()
    {
        $cTipoEvento = factory(C_tipo_evento::class)->create();

        $resp = $this->cTipoEventoRepo->delete($cTipoEvento->id);

        $this->assertTrue($resp);
        $this->assertNull(C_tipo_evento::find($cTipoEvento->id), 'C_tipo_evento should not exist in DB');
    }
}
