<?php

namespace Modules\EnquiryManager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\EnquiryManager\Http\Requests\EnquiryRequest;
use Modules\EnquiryManager\Entities\Enquiry;
class EnquiryManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('enquirymanager::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('enquirymanager::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('enquirymanager::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('enquirymanager::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function saveEnquiry(EnquiryRequest $request)
    {
        try{
            Enquiry::create($request->except(['_token']));
        }
        catch (\Illuminate\Database\QueryException $e) {
            return ['status' => false, 'message' => $e->getMessage(), 'data' => []];
        }
        $responce = ['status' => true, 'message' => 'The enquiry has been shared with administrator !!', 'data' => []];
        return $responce;
    }
}
