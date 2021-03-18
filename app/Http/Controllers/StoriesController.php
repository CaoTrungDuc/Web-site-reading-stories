<?php

namespace App\Http\Controllers;

use App\Models\Stories;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function getListStory(){
        $list_story = Stories::all()->sortByDesc('created_at');
        return view('quanlytruyen',compact('list_story'));
    }
    public function postStory(Request $request)
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
        $story = new Stories();
        $story->name = $request->name;
        $story->chinaName = $request->chinaName;
        $story->chinaLink = $request->chinaLink;
        $story->avatar = $request->avatar;
        $story->author = $request->author;
        $story->type = $request->type;
        $story->category = $request->category;
        $story->description = $request->description;
        $story->status = $request->status;
        $story->introduce = $request->introduce;
        $story->comment = $request->comment;
        $story->evaluate = $request->evaluate;
        $story->save();
        }
    public function updateStory(Request $request, $id)
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
            $story = Stories::find($id);
            $story->name = $request->name;
            $story->chinaName = $request->chinaName;
            $story->chinaLink = $request->chinaLink;
            $story->avatar = $request->avatar;
            $story->author = $request->author;
            $story->type = $request->type;
            $story->category = $request->category;
            $story->description = $request->description;
            $story->status = $request->status;
            $story->introduce = $request->introduce;
            $story->comment = $request->comment;
            $story->evaluate = $request->evaluate;
            $story->save();
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
    public function deleteStory($id)
    {
        $story = Stories::find($id);
        return response()->json([
            "meta" => ["code" => SC_SUCCESS, "msg" => "MGS_DELETE_SUCCESS"],
            "data" => $story],
            SC_SERVER_ERROR);
    }
}
