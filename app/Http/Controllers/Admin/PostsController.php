<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function store(Request $request)
    {
        $input = [
            'id' => $request->get('id'),
            'title' => $request->get('title'),
            'message' => $request->get('message')
        ];

        DB::beginTransaction();

        try{

            $post = Post::firstOrNew(['id' => $input['id']]);
            $post->message = $input['message'];
            $post->title = $input['title'];
            $post->save();

            DB::commit();

            $response = [
                'status' => 1,
                'message' => 'Meddelande har sparats!'
            ];

        } catch (Exception $e){

            DB::rollBack();

            $response = [
                'status' => 0,
                'message' => 'Något gick fel!'
            ];
        }

        return response()->json($response);
    }
}
