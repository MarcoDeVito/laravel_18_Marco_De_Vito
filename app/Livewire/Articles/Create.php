<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    #[Validate('required|string')]
    public $title;
    #[Validate('required')]
    public $subtitle;
    #[Validate('required|min:20')]
    public $content;

    public function store()
    {
        $this->validate();
        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
        ]);
        session()->flash('status', 'Articolo creato con successo.');
        $this->reset();
        $this->dispatch('update-article');
        $this->closeModal();
    }
   
    public function render()
    {


        return view('livewire.articles.create');
    }
}
