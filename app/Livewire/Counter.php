<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;
    public $number = 12;
    public $isVisible = false;
    //Funzione Incrementa
    //Funzione Decerementa?

    public function increment()
    {
        $this->counter++;
        // span.innerHTML = counter;
    }
    public function showHide()
    {
        $this->isVisible = !$this->isVisible;
        // span.innerHTML = counter;
    }

    public function incrementWithNumber()
    {
        $this->counter += $this->number;
        if ($this->counter > 200) {
            $this->isVisible = true;
        }
        // span.innerHTML = counter;
    }

    public function decrement()
    {
        if ($this->counter > 0) {
            $this->counter--;
            // span.innerHTML = counter;
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
