<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Repositories\PizzaRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PizzaRepositoryTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @test
     */
    public function it_creates_one_record()
    {
        app()->make(PizzaRepository::class)->createOne([
            'name' => 'somename',
            'selling_price' => 100
        ]);

        $this->assertDatabaseHas('pizzas', [
            'name' => 'somename',
            'selling_price' => 100
        ]);
    }
}
