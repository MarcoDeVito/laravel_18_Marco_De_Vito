<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component

{
    use WithPagination;
    public $search='';
    public $paginateNumber=10;

    public function destroy(Article $article){
        $article->delete();
        session()->flash('status', 'Articolo Eliminato con successo.');
    }
    #[On('update-article')]
    public function render()
    {
        if ($this->search) {
            if($this->paginateNumber>25)
            {
                $this->paginateNumber=25;
            }
            $articles =  Article::where('title','LIKE','%'.$this->search.'%')->orWhere('subtitle','LIKE','%'.$this->search.'%')->paginate($this->paginateNumber);
            
       
        }
        else{
            if($this->paginateNumber>25)
            {
                $this->paginateNumber=25;
            }
            $articles = Article::paginate($this->paginateNumber);
            // $articles = Article::all();
        }

        return view('livewire.articles.index', compact('articles'));
    }
}
