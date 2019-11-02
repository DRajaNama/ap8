<?php

namespace Modules\EnquiryManager\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\EnquiryManager\Http\Requests\EnquiryRequest;
use Modules\EnquiryManager\Entities\Enquiry;
use Illuminate\Support\Facades\DB;
class EnquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $allowed_columns = ['id', 'name','mobile','email_address','message'];
        $sort = in_array($request->get('sort'), $allowed_columns) ? $request->get('sort') : 'created_at';
        $order = $request->get('direction') === 'asc' ? 'asc' : 'desc';
        
        $enquiries = Enquiry::filter(request('keyword'))->orderBy($sort, $order)->paginate(config('get.ADMIN_PAGE_LIMIT'));
       
       return view('enquirymanager::admin.index', compact('enquiries'));
    }

   

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $enquiry = Enquiry::find($id);
        return view('enquirymanager::admin.show', compact('enquiry'));
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

  
}
