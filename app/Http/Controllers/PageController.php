<?php

namespace App\Http\Controllers;

use Modules\CmsManager\Entities\Page;
use Modules\FaqManager\Entities\Faq;

class PageController extends AppBaseController {

    /**
     * function to render cms page based on slug
     * @param int slug 
     * return redirect respose  
     */
    public function index($slug) {
       
        $page = Page::whereSlug($slug)->first();
        if (!$page) {
            abort(404, 'Please go back to our <a href="' . url('') . '">homepage</a>.');
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page;
       
        if (($page->slug == 'contact-us') || ($page->slug == 'faq-shiper') || ($page->slug == 'carriar-faq') || ($page->slug == 'advertisement-enquiry')) {
            if($page->slug=='carriar-faq')
            {
                $this->data['faqs'] = Faq::where('is_carrierShipper',1)->orderBy('faqs.created_at', 'DESC')->get();
            }
            elseif($page->slug=='faq-shiper')
            {
                $this->data['faqs'] = Faq::where('is_carrierShipper',0)->orderBy('faqs.created_at', 'DESC')->get();
            }
            return view('pages.' . $page->slug, $this->data);
        } elseif (($page->slug == 'feedback') || ($page->slug == 'feedback')) {
            return view('pages.' . $page->slug, $this->data);
        } else {
            return view('pages.pagedetail', $this->data);
        }
    }

}
