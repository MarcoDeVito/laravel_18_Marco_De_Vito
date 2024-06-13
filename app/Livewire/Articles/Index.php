<?php

namespace App\Livewire\Articles;

use App\Models\Article;
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
    public function render()
    {
        if ($this->search) {
            
            $articles =  Article::where('title','LIKE','%'.$this->search.'%')->orWhere('subtitle','LIKE','%'.$this->search.'%')->paginate($this->paginateNumber);
            
       
        }
        else{

            $articles = Article::paginate($this->paginateNumber);
            // $articles = Article::all();
        }

        return view('livewire.articles.index', compact('articles'));
    }
}
