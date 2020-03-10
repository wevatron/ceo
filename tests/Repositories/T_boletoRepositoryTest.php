<?php namespace Tests\Repositories;

use App\Models\T_boleto;
use App\Repositories\T_boletoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class T_boletoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var T_boletoRepository
     */
    protected $tBoletoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tBoletoRepo = \App::make(T_boletoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_t_boleto()
    {
        $tBoleto = factory(T_boleto::class)->make()->toArray();

        $createdT_boleto = $this->tBoletoRepo->create($tBoleto);

        $createdT_boleto = $createdT_boleto->toArray();
        $this->assertArrayHasKey('id', $createdT_boleto);
        $this->assertNotNull($createdT_boleto['id'], 'Created T_boleto must have id specified');
        $this->assertNotNull(T_boleto::find($createdT_boleto['id']), 'T_boleto with given id must be in DB');
        $this->assertModelData($tBoleto, $createdT_boleto);
    }

    /**
     * @test read
     */
    public function test_read_t_boleto()
    {
        $tBoleto = factory(T_boleto::class)->create();

        $dbT_boleto = $this->tBoletoRepo->find($tBoleto->id);

        $dbT_boleto = $dbT_boleto->toArray();
        $this->assertModelData($tBoleto->toArray(), $dbT_boleto);
    }

    /**
     * @test update
     */
    public function test_update_t_boleto()
    {
        $tBoleto = factory(T_boleto::class)->create();
        $fakeT_boleto = factory(T_boleto::class)->make()->toArray();

        $updatedT_boleto = $this->tBoletoRepo->update($fakeT_boleto, $tBoleto->id);

        $this->assertModelData($fakeT_boleto, $updatedT_boleto->toArray());
        $dbT_boleto = $this->tBoletoRepo->find($tBoleto->id);
        $this->assertModelData($fakeT_boleto, $dbT_boleto->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_t_boleto()
    {
        $tBoleto = factory(T_boleto::class)->create();

        $resp = $this->tBoletoRepo->delete($tBoleto->id);

        $this->assertTrue($resp);
        $this->assertNull(T_boleto::find($tBoleto->id), 'T_boleto should not exist in DB');
    }
}
