<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Http\Controllers\AppBaseController;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class HomeController extends AppBaseController {

    protected $site_settings;

    public function __construct() {
        parent::__construct();

        $this->site_settings = (array) Config::get('settings');
    }


    /**
     * Display home page content
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display home page content
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
       
             $params = array();
             $testimonials = DB::table('testimonials')->where(['testimonials.status' =>1])->orderBy('testimonials.created_at', 'DESC')->get();
             $params['testimonials']=$testimonials;
        return view('home.index', $params);
    }



    }
