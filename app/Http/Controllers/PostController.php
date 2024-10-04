<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function posts () {
        $articles = Post::all(); 
        return view('posts', compact('articles')) ;
    }

    public function addpost(Request $request) {
        $request->validate([
            'title' => ['required'],
            'author' => ['required'],
            'body' => ['required'],
            'image' => ['required'],
        ]);

        $imagePath = $this->storeImage($request->file('image'));

        Post::create([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body,
            'image' => $imagePath
            
        ]);
        return redirect()->route('posts');
    }

    public function storeImage ($file): string{
        $fileName = rand() .  $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }

    public function updatedata(Request $request,$id){
        $data = Post::find($id);
        $data->update($request->all());
        return redirect()->route('posts');
    }
    

    public function post($id)
    {
        $data = Post::find($id);
        return view('post', compact('data'));
        }

        public function edit(Post $article)
        {
            return view('edit', ['data' => $article]);
        }
    
        // Handle the update request
        public function update(Request $request, Post $article)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'body' => 'required|string',
                'author' => 'nullable|string|max:255',
                'image' => 'nullable',
            ]);

            $article->title = $request->title;
            $article->body = $request->body;
            $article->author = $request->author;

            if($request->hasFile('image')) {
                $imagePath = $this->storeImage($request->file('image'));
                $article->image = $imagePath;
            }
    
            $article->save();
    
            return redirect()->route('post', $article->id)
                             ->with('success', 'Article updated successfully.');
        }

        public function delete($id)
        {
            $data = Post::findOrFail($id);
            $data->delete();
            return redirect()->route('posts');
        }

        public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
