<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{
    #[Validate('required|string')]
    public $title;
    #[Validate('required')]
    public $subtitle;
    #[Validate('required|min:20')]
    public $content;
    public $article;

    public function update(){
        $this->validate();
        $this->article->update([
            'title'=>$this->title,
            'subtitle'=>$this->subtitle,
            'content'=>$this->content,
        ]);
        session()->flash('status', 'Articolo modificato con successo.');
        $this->closeModal();
        
        
    } 

    public function mount(){
        $this->title=$this->article->title;
        $this->subtitle=$this->article->subtitle;
        $this->content=$this->article->content;
    }
    
    public function render()
    {
        return view('livewire.articles.edit');
    }
}
