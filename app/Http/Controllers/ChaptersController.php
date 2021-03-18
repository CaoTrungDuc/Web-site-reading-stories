<?php

namespace App\Http\Controllers;

use App\Models\Chapters;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
    public function getListChapter(){
        $list_chapter = Chapters::all()->sortByDesc('created_at');
        return view('dad',compact('list_chapter'));
    }
    public function postChapter(Request $request)
    {
//    $validate = Validator::make($request->all(), [
//        "fullName" => "required|max:30|min:2",
//        "birthday" => "required|integer",
//        "email" => "required|email|unique:users",
//        "Job" => "required",
//        "phoneNumber" => "required|integer|unique:users",
//        "avatar" => "required|unique:users",
//        "facebook" => "required|unique:users|url",
//        "gender" => "required|integer",
//        "country" => "required",
//        "role" => "required|integer|max:2|min:1",
//        "status" => "required|integer|min:1|max:4",
//    ]);
//    if ($validate->fails()) {
//        return response()->json([
//            "meta" => ["code" => "Validate loi", "msg" => $validate->errors()->all()],
//            "data" => $validate->errors()->keys()],
//            SC_400);
//    }
        $chapter = new Chapters();
        $chapter->name = $request->name;
        $chapter->content = $request->content;
        $chapter->storyId = $request->s;
        $chapter->save();
    }
    public function updateChapter(Request $request, $id)
    {
//        try{
//            $validate = Validator::make($request->all(), [
//                "name" => "required|max:50",
//                "avatar" => "required|url",
//                "status" => "required|integer|min:1",
//                "userId" => "required|integer|min:1",
//                "subjectId" => "required|integer|min:1"
//            ]);
//            if ($validate->fails()) {
//                return response()->json([
//                    "meta" => ["code" => "Validate loi", "msg" => $validate->errors()->all()],
//                    "data" => $validate->errors()->keys()],
//                    SC_400);
//            }
        $chapter = Chapters::find($id);
        $chapter->name = $request->name;
        $chapter->content = $request->content;
        $chapter->storyId = $request->storyId;
        $chapter->save();
//        }catch (ModelNotFoundException $ex) {
//            return response()->json([],
//                QUERY_ERROR);
//        } catch (Exception $ex) {
//            return response()->json([
//                "meta" => ["code" => SC_SERVER_ERROR, "msg" => "SERVER LOI"],
//                "data" => $ex],
//                SC_SERVER_ERROR);
//        }
    }
    public function deleteChapter($id)
    {
        $chapter = Chapters::find($id);
        $chapter->delete();
        return response()->json([
            "meta" => ["code" => SC_SUCCESS, "msg" => "MGS_DELETE_SUCCESS"],
            "data" => $chapter],
            SC_SERVER_ERROR);
    }
}
