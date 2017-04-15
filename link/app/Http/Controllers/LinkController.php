<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/9
 * Time: 17:40
 */

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use DB;
use Auth;
use Illuminate\Http\request;
class LinkController extends Controller
{
//    function __construct()
//     {
//
//         $this->middleware('auth');
//     }


    public function construct(Request $POST)
    {
        DB::table('user')->delete();
        $list=$_POST['list'];
        $ele=explode(" ",$list);
        $num=count($ele);
        $i=1;
        while ($i<$num)
        {
            DB::table('user')->insert(['data'=>$ele[$i],'id'=>$i]);
            $i++;
        }
        return redirect('/print_list');
    }

    public function add(Request $request)
    {
        $data = $request->input('data');
        $id = $request->input('id');
        $user = Auth::user();
        $is_success = DB::table('user')->insert(['data'=>$data,'id'=>$id]);
        DB::table('user')->where('id', '>=', $id)->increment('id');
        DB::table('user')->where('data',$data)->decrement('id');
        if ($is_success) {
            echo "element added successfully";
        } else echo "element added failed";
    }


    public function delete(Request $request)
    {
        $id = $request->input('id');
        $user = Auth::user();
        $is_success=DB::table('user')->delete()->where [id==$id];
        DB::table('user')->where('id', '>=', $id)->decrement('id');
        if ($is_success) {
            echo "element deleted successfully";
        } else echo "element deleted failed";
    }

    public function push(Request $request)
    {
        $data = $request->input('data');
        $user = Auth::user();
        $is_success =DB::table('user')->insert(['data'=>$data]);
        if ($is_success) {
            echo "element pushed successfully";
        } else echo "element pushed failed";
        return redirect('/print_list');
    }

    public function pop( )   //return the last one element
    {

        $ele=DB::table('user')->OrderBy('id','desc')->first();
        $id=$ele->id;
       // DB::DELETE('delete from user where id=?',[$id]);
        DB::table('user')->delete()->where ['id'==$id];
        return view('pop',[
            'ele'=>$ele
        ]);
    }

    public function size( )
    {
        $maxid= $ele=DB::table('user')->OrderBy('id','desc')->first();
       return view('size',[
           'maxid'=>$maxid
       ]);
    }

    public function print_list( )
    {
        $ele=DB::table('user')->get();
        return view('print_list',[
        'ele'=>$ele
        ]);
    }
}