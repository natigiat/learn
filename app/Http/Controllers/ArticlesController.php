<?php namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticel;
use Request;



class ArticlesController extends Controller {

	//
	public function __construct() {
		$this->middleware('auth' , ['only' => 'create' , 'only' => 'edit']);
	}
	
	public function index()
	{ 
		
		$articles = \App\Articel::latest()->get();

		return view('articles.index' , compact('articles'));
	}
		

	public function show($id)
	{ 

        $article = \App\Articel::findOrFail($id);
		//return $article;

		return view('articles.show' , compact('article'));

	}

	public function create() 
	{ 
		return view('articles.create');

	}

	public function store(CreateArticel $request) 
	{ 
		
		$article = new \App\Articel($request->all());
		
		\Auth::user()->articles()->save($article);

        \Session::flash('flash_message' , 'Your article has been created');
		
		return redirect('articles');

	}


	public function edit($id) 
	{ 
		
		$article = \App\Articel::findOrFail($id);
		
		return view('articles.edit' , compact('article'));

	}

	public function update($id ,CreateArticel $request) 
	{ 
		
		$article = \App\Articel::findOrFail($id);
		
		$article->update($request->all());
		return redirect('articles');

	}

}
