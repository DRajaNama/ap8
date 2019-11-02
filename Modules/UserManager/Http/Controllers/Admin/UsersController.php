<?php

namespace Modules\UserManager\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\UserManager\Entities\User;
use DB;

class UsersController extends Controller
{
	 
	public function index(Request $request)
    {

        $allowed_columns = ['id', 'author'];
        $sort = in_array($request->get('sort'), $allowed_columns) ? $request->get('sort') : 'created_at';
        $order = $request->get('direction') === 'asc' ? 'asc' : 'desc';
        $users = User::status($request->query('status'))->filter($request->query('keyword'))->orderBy($sort, $order)->paginate(config('get.ADMIN_PAGE_LIMIT'));
	
        return view('usermanager::Admin.users.index',compact('users'));

    }
	
/**
     *view logined user profile
     * @param  Request $request
     * @return Response
     */
    public function profile($id){
        $user = User::find($id);
		return view('usermanager::Admin.users.profile',compact('user'));
    }
/**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function changeStatus(Request $request, $id) {
        $user = \Modules\UserManager\Entities\User::where('id', '=', $id)->first();
        if(empty($user)){
            abort(404);
        }
        $user->status = $request->input('status');
        if($user->save()){
            return ['success' => true, 'message' => $request->input('status') == 1 ?'This user account activated successfully.' : "This user account deactivated successfully."];
        }else{
            return ['success' => false, 'message' => 'Your process faild. please try again!!'];
        }
    }

}
