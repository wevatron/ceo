<?php namespace Tests\Repositories;

use App\Models\C_horario;
use App\Repositories\C_horarioRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class C_horarioRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var C_horarioRepository
     */
    protected $cHorarioRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cHorarioRepo = \App::make(C_horarioRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_c_horario()
    {
        $cHorario = factory(C_horario::class)->make()->toArray();

        $createdC_horario = $this->cHorarioRepo->create($cHorario);

        $createdC_horario = $createdC_horario->toArray();
        $this->assertArrayHasKey('id', $createdC_horario);
        $this->assertNotNull($createdC_horario['id'], 'Created C_horario must have id specified');
        $this->assertNotNull(C_horario::find($createdC_horario['id']), 'C_horario with given id must be in DB');
        $this->assertModelData($cHorario, $createdC_horario);
    }

    /**
     * @test read
     */
    public function test_read_c_horario()
    {
        $cHorario = factory(C_horario::class)->create();

        $dbC_horario = $this->cHorarioRepo->find($cHorario->id);

        $dbC_horario = $dbC_horario->toArray();
        $this->assertModelData($cHorario->toArray(), $dbC_horario);
    }

    /**
     * @test update
     */
    public function test_update_c_horario()
    {
        $cHorario = factory(C_horario::class)->create();
        $fakeC_horario = factory(C_horario::class)->make()->toArray();

        $updatedC_horario = $this->cHorarioRepo->update($fakeC_horario, $cHorario->id);

        $this->assertModelData($fakeC_horario, $updatedC_horario->toArray());
        $dbC_horario = $this->cHorarioRepo->find($cHorario->id);
        $this->assertModelData($fakeC_horario, $dbC_horario->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_c_horario()
    {
        $cHorario = factory(C_horario::class)->create();

        $resp = $this->cHorarioRepo->delete($cHorario->id);

        $this->assertTrue($resp);
        $this->assertNull(C_horario::find($cHorario->id), 'C_horario should not exist in DB');
    }
}
