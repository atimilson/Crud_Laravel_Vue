<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = book::all()->toArray();
        return array_reverse($books);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //
        $book = new book([
            'nome' => $request->input('nome'),
            'author' => $request->input('author')
        ]);
        $book->save();
        return response()->json('Livro adicionado');
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = book::find($id);
        return response()->json($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\book  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        //
        $book = book::find($id);
        $book->update($request->all());
        return response()->json('Livro atualizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $book = book::find($id);
        $book->delete();

        return response()->json('Livro excluido com sucesso');
    }
}
