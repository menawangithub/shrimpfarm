<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\VideoModel;
use App\Models\ArtikelModel;
use App\Models\CommentModel;
use App\Models\CommentArticleModel;
use App\Models\TodoModel;
use App\Models\ListTodoTotalModel;
use App\Models\ListTodoParsialModel;
use App\Models\TodoTotalModel;
use App\Models\TodoParsialModel;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class ViewController extends Controller
{
    public function viewAllContent(){
        $videos = VideoModel::all();
        $articles = ArtikelModel::all();

        $videosPaginator = $this->paginate($videos, 3);
        $articlesPaginator = $this->paginate($articles, 4); 
    
        return view('kontenedu', ['videos' => $videosPaginator, 'articles' => $articlesPaginator]);
    }

    private function paginate($items, $perPage)
    {
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = array_slice($items->all(), ($currentPage - 1) * $perPage, $perPage);
        $paginator = new LengthAwarePaginator($currentItems, count($items), $perPage);

        return $paginator->withPath(LengthAwarePaginator::resolveCurrentPath());
    }

    public function viewVideo($id){
        $video = VideoModel::find($id);
        return view('konteneduvideo', ['data' => $video]);
    }

    public function postComment(Request $request)
    {
        $request->validate([
            'isi_komentar' => 'required|max:255',
        ]);
    
        $id_video = $request->input('id_video');
        $id = $request->input('id');
        $nama_user = $request->input('nama_user');

        $user = UserModel::find($id);
        $video = VideoModel::find($id_video);
    
        $comment = new CommentModel([
            'isi_komentar' => $request->isi_komentar,
            'tanggal_post' => now()->format('d/m/Y'),
            'id' => $user->_id,
            'nama_user' => $user->nama,
        ]);
    
        $video->comments()->save($comment);
    
        return redirect()->back()->with('success', 'Komentar Anda Berhasil Diunggah!');
    }

    public function viewArticle($id){
        $article = ArtikelModel::find($id);
        return view('konteneduartikel', ['data' => $article]);
    }

    public function postCommentArticle (Request $request)
    {
        $request->validate([
            'isi_komentar' => 'required|max:255',
        ]);
    
        $id_article = $request->input('id_article');
        $id = $request->input('id');
        $nama_user = $request->input('nama_user');

        $user = UserModel::find($id);
        $article = ArtikelModel::find($id_article);
    
        $comment = new CommentArticleModel([
            'isi_komentar' => $request->isi_komentar,
            'tanggal_post' => now()->format('d/m/Y'),
            'id' => $user->_id,
            'nama_user' => $user->nama,
        ]);
    
        $article->comments()->save($comment);
    
        return redirect()->back()->with('success', 'Komentar Anda Berhasil Diunggah!');
    }

    
    public function viewAllArticle(){
        $articles = ArtikelModel::all();
        return view('kontenedu', ['articles' => $articles]);
    }

    public function daftartugas()
    {
        $data = TodoModel::with('infoPanen')->get();
        return view('daftartugas', ['data' => $data]);
    }

    //PARSIAL
    public function updateProgress(Request $request, $id)
    {
        $todo = TodoModel::find($id);
        $checkboxStates = $request->input('checkboxes');
    
        foreach ($checkboxStates as $idTodoParsial => $isChecked) {
            // Update or create ListTodoParsialModel only for the specified id_panen
            $listTodoParsial = ListTodoParsialModel::updateOrCreate(
                [
                    'id_todo_parsial' => $idTodoParsial,
                    'id_panen' => $todo->id_panen, // Include the id_panen in the condition
                    'todo_id' => $todo->_id,
                ],
                ['checked' => $isChecked]
            );
    
            // If it's a new entry, associate it with the TodoParsialModel
            if ($listTodoParsial->wasRecentlyCreated) {
                $todoParsial = TodoParsialModel::find($idTodoParsial);
                $listTodoParsial->todo_parsial()->associate($todoParsial);
                $listTodoParsial->save();
            }
        }
    
        // Calculate progress after processing all checkboxes for the specific id_panen
        $checkedCount = ListTodoParsialModel::where('id_panen', $todo->id_panen)->where('checked', 'on')->count();
        $todo->progress = $checkedCount * 25;
    
        $todo->save();
    
        // Redirect to the daftartugas route
        return redirect()->route('daftartugas');
    }
    
    public function updateProgressTotal(Request $request, $id)
    {
        $todo = TodoModel::find($id);
        $checkboxStates = $request->input('checkboxes');
    
        foreach ($checkboxStates as $idTodoTotal => $isChecked) {
            // Update or create ListTodoTotalModel only for the specified id_panen
            $listTodoTotal = ListTodoTotalModel::updateOrCreate(
                [
                    'id_todo_total' => $idTodoTotal,
                    'id_panen' => $todo->id_panen, // Include the id_panen in the condition
                    'todo_id' => $todo->_id,
                ],
                ['checked' => $isChecked]
            );
    
            // If it's a new entry, associate it with the TodoParsialModel
            if ($listTodoTotal->wasRecentlyCreated) {
                $todoTotal = TodoTotalModel::find($idTodoTotal);
                $listTodoTotal->todo_total()->associate($todoTotal);
                $listTodoTotal->save();
            }
        }
    
        // Calculate progress after processing all checkboxes for the specific id_panen
        $checkedCount = ListTodoTotalModel::where('id_panen', $todo->id_panen)->where('checked', 'on')->count();
        $todo->progress = $checkedCount * 12.5;
    
        $todo->save();
    
        // Redirect to the daftartugas route
        return redirect()->route('daftartugas');
    }
}   
