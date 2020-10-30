<?php

namespace App\Http\Livewire;

use App\Vacante;
use Livewire\Component;

class ContactSearchBar extends Component
{
    public $query;
    public $vacantes;
    public $highlightIndex;

    public function mount()
    {
        $this->resetSearch();
    }

    public function resetSearch()
    {
        $this->query = '';
        $this->vacantes = [];
        $this->highlightIndex = 0;
    }

    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->vacantes) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->vacantes) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function selectContact()
    {
        $vacante = $this->vacantes[$this->highlightIndex] ?? null;
        if ($vacante) {
            $this->redirect(route('vacantes.show', $vacante));
        }
    }

    public function updatedQuery()
    {
        $this->vacantes = Vacante::where('titulo', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.contact-search-bar');
    }
}
