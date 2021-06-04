<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Clientes;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientesTest extends TestCase {
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCreate(){

        //$this->markTestSkipped(); Para evitar o teste

        $cliente = Clientes::create([   'nome' => 'Mizaaki',
                                        'email' => 'Mizaaki@gmail.com',
                                        'endereco' => 'Av. três',
                                        'nascimento' => '2000-10-26']);

        $this->assertDatabaseHas('Clientes', ['nome' => 'Mizaaki']);
    }

}
