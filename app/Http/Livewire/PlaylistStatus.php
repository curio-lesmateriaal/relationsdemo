<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PlaylistStatus extends Component
{

    public $list;

    public function render()
    {
        return view('livewire.playlist-status', ['list' => $this->list]);
    }

    public function toggle()
    {
        if($this->list->public == true)
        {
            $this->list->public = false;
        }
        else
        {
            $this->list->public = true;
        }

        $this->list->save();
    }
}
