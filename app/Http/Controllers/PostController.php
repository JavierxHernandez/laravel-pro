<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): string
    {

        $posts = [
            [
                'title' => 'post 1',
                'content' => 'content 1',
            ],
            [
                'title' => 'post 2',
                'content' => 'content 2',
            ],
            [
                'title' => 'post 3',
                'content' => 'content 3',
            ],
            [
                'title' => 'post 4',
                'content' => 'content 4',
            ],
            [
                'title' => 'post 5',
                'content' => 'content 5',
            ]
        ];

        $categories = null;

        return view('posts.index', compact('posts', 'categories'));

//        return view('posts.index', [
//            'pruebaIndex' => 'Este es un mensaje de prueba en controller index'
//        ]);
    }

    public function create(){
        $prueba = "Test";
        return view('posts.create', compact('prueba'));
    }

    public function store(){
        return "Aqui se procesará el post";
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