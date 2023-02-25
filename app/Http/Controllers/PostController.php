<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): string
    {

//        $posts = [
//            [
//                'id' => 1,
//                'title' => 'post 1',
//                'content' => 'content 1',
//            ],
//            [
//                'id' => 2,
//                'title' => 'post 2',
//                'content' => 'content 2',
//            ],
//            [
//                'id' => 3,
//                'title' => 'post 3',
//                'content' => 'content 3',
//            ],
//            [
//                'id' => 4,
//                'title' => 'post 4',
//                'content' => 'content 4',
//            ],
//            [
//                'id' => 5,
//                'title' => 'post 5',
//                'content' => 'content 5',
//            ]
//        ];

        $categories = null;
        $posts = Post::all();
        return view('posts.index', compact('posts', 'categories'));

//        return view('posts.index', [
//            'pruebaIndex' => 'Este es un mensaje de prueba en controller index'
//        ]);
    }

    public function create(){
        $prueba = "Test";
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request){
//        $result = $request->all(); // El formulario
//        $result = $request->only(['title', 'content']); // Solo los campos especificados
//        $result = $request->except(['title', 'content']); // Todos los campos excepto los especificados
//        $result = $request->input('title'); // Solo el campo especificado
//        $result = $request->title; // Solo el campo especificado
//        $result = $request->has('title'); // Si existe el campo especificado
//        $result = $request->filled('title'); // Si existe el campo especificado y no esta vacio
//        $result = $request->method(); // Metodo de la peticion
//        $result = $request->isMethod('post'); // Si el metodo de la peticion es el especificado
//        $result = $request->isMethod('post', 'put'); // Si el metodo de la peticion es alguno de los especificados
//        $result = $request->url(); // Url de la peticion
//        $result = $request->fullUrl(); // Url completa de la peticion
//        $result = $request->path(); // Path de la peticion
//        $result = $request->query(); // Query de la peticion
//        $result = $request->query('title'); // Query especifico de la peticion
//        $result = $request->header(); // Header de la peticion
//        $result = $request->header('host'); // Header especifico de la peticion
//        $result = $request->cookie(); // Cookie de la peticion
//        $result = $request->cookie('laravel_session'); // Cookie especifica de la peticion
//        $result = $request->server(); // Server de la peticion
//        $result = $request->server('SERVER_NAME'); // Server especifico de la peticion
//        $result = $request->old(); // Old de la peticion
//        $result = $request->old('title'); // Old especifico de la peticion
//        $result = $request->flash(); // Flash de la peticion
//        $result = $request->flashOnly(['title', 'content']); // Flash solo de los campos especificados
//        $result = $request->flashExcept(['title', 'content']); // Flash de todos los campos excepto los especificados
//        $result = $request->flush(); // Flush de la peticion
//        $result = $request->allFiles(); // Todos los archivos de la peticion
//        $result = $request->file('image'); // Archivo especifico de la peticion
//        $result = $request->hasFile('image'); // Si existe el archivo especificado
//        $result = $request->isValid(); // Si la peticion es valida
//        $result = $request->validated(); // Validar la peticion
//        $result = $request->validate([
//            'title' => 'required',
//            'content' => 'required'
//        ]); // Validar la peticion
//        $request->isMethod('post');

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->user_id = 1;
        $post->category_id = $request->category_id;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function show($post){
        return view('posts.show', compact('post'));
    }

    public function edit($post){
        return view('posts.edit');
    }

    public function update($post){
        return "Aqui se actualiza el post: {$post}";
    }
}
