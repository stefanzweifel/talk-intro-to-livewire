<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Counter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CounterTest extends TestCase
{
    /** @test */
    public function the_counter_counts()
    {
        Livewire::test(Counter::class)
            ->assertSet('counter', 0)
            ->call('increment')
            ->assertSet('counter', 1)
            ->call('increment')
            ->assertSet('counter', 2);
    }
}
