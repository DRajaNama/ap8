<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Response;
use Illuminate\Support\Facades\DB;
use InfyOm\Generator\Utils\ResponseUtil;
use Config;

class AppBaseController extends Controller
{

    protected $currentUser;
    protected $admin_row_per_page;
    protected $front_row_per_page;
    protected $site_settings;
    public function sendResponse($result, $message) {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function __construct() {        
         $request = request();
        $this->middleware(function ($request, $next) {
            $is_channel_created = false;
            $currentPrefix      = $request->route()->getPrefix();

            if (Auth::guard('user')->check()) {
                $this->currentUser = Auth::guard('user')->user();
            }

            
            view()->share(['currentUser' => $this->currentUser]);
            return $next($request);
        });

        ## get current site settings
        $site_settings = DB::table('settings')->pluck('config_value','slug');
        $admin_row_per_page =  $site_settings['ADMIN_PAGE_LIMIT'];
        $front_row_per_page = $site_settings['FRONT_PAGE_LIMIT'];

        if (isset($admin_row_per_page) && $admin_row_per_page != "" && $admin_row_per_page > 0)
            $this->admin_row_per_page = $admin_row_per_page;
        else
            $this->admin_row_per_page = 50;

        if (isset($front_row_per_page) && $front_row_per_page != "" && $front_row_per_page > 0)
            $this->front_row_per_page = $front_row_per_page;
        else
            $this->front_row_per_page = 50;

        $this->site_settings = $site_settings;
        $parent_categories   = array();
     /*   $parent_categories   = Category::where(['categories.status' => 1, 'categories.parent_id' => null])->orderBy('categories.sort_order', 'Asc')->orderBy('categories.created_at', 'DESC')->get();  //get parent categories
        if (!empty($parent_categories)) {
            foreach ($parent_categories as $category) {
                $child_categories           = Category::where(['categories.status' => 1, 'categories.parent_id' => $category->id])->orderBy('categories.sort_order', 'Asc')->orderBy('categories.created_at', 'DESC')->get();
                $category->child_categories = $child_categories;
            }
        }*/
        $advertisements       = array();
       
        $cmspages = DB::table('pages')->where(['pages.status' => 1])->whereNotIn('id', [8])->orderBy('pages.created_at', 'DESC')->get();

        view()->share(['category_list' => $parent_categories, 'advertisements' => $advertisements, 'site_settings' => $this->site_settings, 'cmspages' => $cmspages]);
    }

    public function sendError($error, $code = 404) {
        return Response::json(ResponseUtil::makeError($error), $code);
    }

}
