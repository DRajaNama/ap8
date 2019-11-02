@extends('layouts.master')
@section('title','Home Page')
@section('content')
@include('layouts.admin.flash.alert')

<!--hero-->
<div class="home-bnr d-block clearfix">
   <div class="hero-slide">
      <div class="slide-block" style="background:url('img/html-images/slide-bnr1.jpg') no-repeat;">
         <div class="content-block animate6">
            <div class="content-box">
               <h1><b>Trans</b>portATION <span><strong>M</strong>akes <b>Easy</b></span></h1>
               <p>ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor nec justo vitae euismod. Sed diam est, aliquam euismod loremet.</p>
               <a href="#" class="btn-custom">more details</a>
            </div>
         </div>
      </div>
      <div class="slide-block" style="background:url('img/html-images/slide-bnr1.jpg') no-repeat;">
         <div class="content-block animate6">
            <div class="content-box">
               <h1><b>Trans</b>portATION <span><strong>M</strong>akes <b>Easy</b></span></h1>
               <p>ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor nec justo vitae euismod. Sed diam est, aliquam euismod loremet.</p>
               <a href="#" class="btn-custom">more details</a>
            </div>
         </div>
      </div>
      <div class="slide-block" style="background:url('img/html-images/slide-bnr1.jpg') no-repeat;">
         <div class="content-block animate6">
            <div class="content-box">
               <h1><b>Trans</b>portATION <span><strong>M</strong>akes <b>Easy</b></span></h1>
               <p>ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor nec justo vitae euismod. Sed diam est, aliquam euismod loremet.</p>
               <a href="#" class="btn-custom">more details</a>
            </div>
         </div>
      </div>
      <div class="slide-block" style="background:url('img/html-images/slide-bnr1.jpg') no-repeat;">
         <div class="content-block animate6">
            <div class="content-box">
               <h1><b>Trans</b>portATION <span><strong>M</strong>akes <b>Easy</b></span></h1>
               <p> ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor nec justo vitae euismod. Sed diam est, aliquam euismod loremet.</p>
               <a href="#" class="btn-custom">more details</a>
            </div>
         </div>
      </div>
   </div>
   <div class="bnr-btn-group">
      <a href="#" class="arrow-btn  animate4"><span class="arrow-block-left"></span><span class="arrow-block-right"></span><span class="btn-text"> <img src="{{asset('img/html-images/get-load-icon.png')}}" alt="icon"> GET LOADS</span></a>
      <a href="#" class="arrow-btn  animate4"><span class="arrow-block-left"></span><span class="arrow-block-right"></span><span class="btn-text"> <img src="{{asset('img/html-images/get-quote-icon.png')}}" alt="icon"> GET QUOTES</span></a>
      <a href="#" class="arrow-btn  animate4"><span class="arrow-block-left"></span><span class="arrow-block-right"></span><span class="btn-text"> <img src="{{asset('img/html-images/carrier-icon.png')}}" alt="icon"> CARRIER CHECK</span></a>
   </div>
</div>
<!--hero-->
<!--companyachivement-->
<div class="achivement d-block clearfix">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 col-sm-6 col-md-3">
            <div class="achive-no">
               <span class="count-num">78,789</span>
               Nationwide Customers
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3">
            <div class="achive-no">
               <span class="count-num">9,45,554</span>
               Jobs Posted
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3">
            <div class="achive-no">
               <span class="count-num">9,42,656</span>
               Jobs completed
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3">
            <div class="achive-no">
               <span class="count-num">8,00,00,000</span>
               Kms Transported
            </div>
         </div>
      </div>
   </div>
</div>
<!--companyachivement-->

<!--resontouse-->
<div class="reson-to-use d-block pad-tb60">
   <div class="container">
      <h2>4 Reasons To Use Road Transport</h2>
      <div class="row">
         <div class="col-12 col-sm-6 col-md-3">
            <div class="rtu-box text-center animate4">
               <span class="no">1</span>
               <span class="rtu-hd">Global Expertise</span>
               <p>ipsum dolor sit amet, consectetur adipiscing
                  elit. Nulla porttitor nec justo vitae euismod.
               </p>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3">
            <div class="rtu-box text-center animate4">
               <span class="no">2</span>
               <span class="rtu-hd">AWARD WINNING</span>
               <p>ipsum dolor sit amet, consectetur adipiscing
                  elit. Nulla porttitor nec justo vitae euismod.
               </p>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3">
            <div class="rtu-box text-center animate4">
               <span class="no">3</span>
               <span class="rtu-hd">REASONABLE PRICING</span>
               <p>ipsum dolor sit amet, consectetur adipiscing
                  elit. Nulla porttitor nec justo vitae euismod.
               </p>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-3">
            <div class="rtu-box text-center animate4">
               <span class="no">4</span>
               <span class="rtu-hd">FREE QUOTES</span>
               <p>ipsum dolor sit amet, consectetur adipiscing
                  elit. Nulla porttitor nec justo vitae euismod.
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
<!--resontouse-->

<!--machinary-->
<div class="machinary pad-tb80 d-block">
   <div class="container">
      <h2 class="bdr">Machinery For Sale</h2>
      <p>ipsum dolor sit amet, consectetur adipiscing elit. porttitor nec justo vitae euismod.</p>
      <div class="mac-filter">
         <select class="form-control" name="machine">
            <option value="">Machinery</option>
            <option value="">Machinery 2</option>
            <option value="">Machinery 3</option>
            <option value="">Machinery 4</option>
         </select>
         <a href="#" class="btn-custom">HirE Machinery</a>
         <a href="#" class="btn-custom">Sell Your Machine</a>
      </div>
      <div class="machine-list d-block">
         <div class="machine-slide animate4">
            <div class="item">
               <div class="row">
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img1.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img1.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img1.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="row">
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img2.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img2.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img2.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="row">
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img3.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img3.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img3.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="row">
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img4.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img4.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img4.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="row">
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img1.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img1.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img1.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="row">
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img2.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img2.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img2.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="row">
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img3.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img3.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img3.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="row">
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img4.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img4.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="machine-block">
                        <a href="#">
                           <span class="machine-img"><img src="{{asset('img/html-images/machine-img4.jpg')}}" alt="machine"></span>
                           <div class="text-block">
                              <span class="price">$25,000</span>
                              <p>ipsum dolor sit amet adipiscing.</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="more-machine d-block">
         <div class="mm-slide">
            <div class="machine-block">
               <a href="#">
                  <span class="label"><img src="{{asset('img/html-images/sold-label.png')}}" alt="label"></span>
                  <span class="machine-img"><img src="{{asset('img/html-images/machine-img5.jpg')}}" alt="machine"></span>
                  <div class="text-block">
                     <span class="price">$25,000</span>
                     <div class="des d-block">
                        <p>ipsum dolor sit amet adipiscing.</p>
                     </div>
                  </div>
               </a>
            </div>
            <div class="machine-block">
               <a href="#">
                  <span class="label"><img src="{{asset('img/html-images/sold-label.png')}}" alt="label"></span>
                  <span class="machine-img"><img src="{{asset('img/html-images/machine-img6.jpg')}}" alt="machine"></span>
                  <div class="text-block">
                     <span class="price">$25,000</span>
                     <div class="des d-block">
                        <p>ipsum dolor sit amet adipiscing.</p>
                     </div>
                  </div>
               </a>
            </div>
            <div class="machine-block">
               <a href="#">
                  <span class="label"><img src="{{asset('img/html-images/sold-label.png')}}" alt="label"></span>
                  <span class="machine-img"><img src="{{asset('img/html-images/machine-img7.jpg')}}" alt="machine"></span>
                  <div class="text-block">
                     <span class="price">$25,000</span>
                     <div class="des d-block">
                        <p>ipsum dolor sit amet adipiscing.</p>
                     </div>
                  </div>
               </a>
            </div>
            <div class="machine-block">
               <a href="#">
                  <span class="label"><img src="{{asset('img/html-images/sold-label.png')}}" alt="label"></span>
                  <span class="machine-img"><img src="{{asset('img/html-images/machine-img8.jpg')}}" alt="machine"></span>
                  <div class="text-block">
                     <span class="price">$25,000</span>
                     <div class="des d-block">
                        <p>ipsum dolor sit amet adipiscing.</p>
                     </div>
                  </div>
               </a>
            </div>
            <div class="machine-block">
               <a href="#">
                  <span class="label"><img src="{{asset('img/html-images/sold-label.png')}}" alt="label"></span>
                  <span class="machine-img"><img src="{{asset('img/html-images/machine-img5.jpg')}}" alt="machine"></span>
                  <div class="text-block">
                     <span class="price">$25,000</span>
                     <div class="des d-block">
                        <p>ipsum dolor sit amet adipiscing.</p>
                     </div>
                  </div>
               </a>
            </div>
            <div class="machine-block">
               <a href="#">
                  <span class="label"><img src="{{asset('img/html-images/sold-label.png')}}" alt="label"></span>
                  <span class="machine-img"><img src="{{asset('img/html-images/machine-img6.jpg')}}" alt="machine"></span>
                  <div class="text-block">
                     <span class="price">$25,000</span>
                     <div class="des d-block">
                        <p>ipsum dolor sit amet adipiscing.</p>
                     </div>
                  </div>
               </a>
            </div>
            <div class="machine-block">
               <a href="#">
                  <span class="label"><img src="{{asset('img/html-images/sold-label.png')}}" alt="label"></span>
                  <span class="machine-img"><img src="{{asset('img/html-images/machine-img7.jpg')}}" alt="machine"></span>
                  <div class="text-block">
                     <span class="price">$25,000</span>
                     <div class="des d-block">
                        <p>ipsum dolor sit amet adipiscing.</p>
                     </div>
                  </div>
               </a>
            </div>
            <div class="machine-block">
               <a href="#">
                  <span class="label"><img src="{{asset('img/html-images/sold-label.png')}}" alt="label"></span>
                  <span class="machine-img"><img src="{{asset('img/html-images/machine-img8.jpg')}}" alt="machine"></span>
                  <div class="text-block">
                     <span class="price">$25,000</span>
                     <div class="des d-block">
                        <p>ipsum dolor sit amet adipiscing.</p>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--machinary-->

<!-- list-add-section -->
<div class="list-add-section pad-tb60">
   <div class="container">
      <h2 class="bdr">List an Ad Here</h2>
      <p class="dark-p">Post a wanted request to our network of sellers and have sellers contact you.</p>
      <form class="custom-form">
         <div class="row">
            <div class="col-sm-12 col-lg-6">
               <div class="form-group large">
                  <div class="checkgroup d-flex flex-wrap">
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="customCheck1">
                       <label class="custom-control-label" for="customCheck1">By Used</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="customCheck2">
                       <label class="custom-control-label" for="customCheck2">Buy New</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="customCheck3">
                       <label class="custom-control-label" for="customCheck3">Hire</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="customCheck4">
                       <label class="custom-control-label" for="customCheck4">Buy Parts</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="customCheck5">
                       <label class="custom-control-label" for="customCheck5">Services</label>
                     </div>
                  </div>
                  <label class="label">
                     Tell sellers about what you are looking for. Provide details such as usage,brands, specifications and accessories needed.
                  </label>
                  <textarea class="form-control" placeholder="Enter Your Message"></textarea>
               </div>
            </div>
            <div class="col-sm-12 col-lg-6">
               <div class="row input-row">
                  <div class="col-sm-12">
                     <label class="label">CONTACT DETAILS</label>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Name">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Mobile Number">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Email Address">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Postcode">
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <label class="label mt-35">TYPE OF EQUIPMENT</label>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <select class="form-control">
                           <option>Construction Equipment</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <select class="form-control">
                           <option>Select A Category</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <select class="form-control">
                           <option>Select A Subcategory</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <select class="form-control">
                           <option>Estimated Budget</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12">
               <div class="action-sec d-flex align-items-center">
                  <a href="javascript:void(0);" class="more-info">>> Add More Info</a>
                  <button class="btn btn-custom ml-auto">Submit Request</button>
               </div>
            </div>
         </div>
      <form>
   </div>
</div>
<!-- list-add-section -->

<!-- team-road-section -->
<div class="team-road-section pad-tb60">
   <div class="container">
      <h2 class="bdr">Team Road Transport</h2>
      <div class="team-road-slider">
         <div class="slide-box">
            <div class="top-part">
               <div class="img-cover" style="background-image: url(img/html-images/manimg1.png);"></div>
               <h3>Mike Pickard</h3>
               <p>On the Road</p>
               <div class="tell-sec">0429 677 636</div>
            </div>
            <a href="javascript:void(0);" class="btn action-btn">Send Email</a>
         </div>
         <div class="slide-box">
            <div class="top-part">
               <div class="img-cover" style="background-image: url(img/html-images/manimg2.png);"></div>
               <h3>Megan Ruyg</h3>
               <p>On the Road</p>
               <div class="tell-sec">0429 677 636</div>
            </div>
            <a href="javascript:void(0);" class="btn action-btn2">Send Email</a>
         </div>
         <div class="slide-box">
            <div class="top-part">
               <div class="img-cover" style="background-image: url(img/html-images/manimg3.png);"></div>
               <h3>Paul Grayling</h3>
               <p>On the Road</p>
               <div class="tell-sec">0429 677 636</div>
            </div>
            <a href="javascript:void(0);" class="btn action-btn">Send Email</a>
         </div>
         <div class="slide-box">
            <div class="top-part">
               <div class="img-cover" style="background-image: url(img/html-images/manimg4.png);"></div>
               <h3>Bonnie Kenner</h3>
               <p>On the Road</p>
               <div class="tell-sec">0429 677 636</div>
            </div>
            <a href="javascript:void(0);" class="btn action-btn2">Send Email</a>
         </div>
      </div>
   </div>
</div>
<!-- team-road-section -->

<!--testimonial-->
<div class="testimonial d-block pad-tb60">
 <div class="container">
  <div class="testimonial-head">
     <h2>Client’s Testimonials</h2>
     <p>Hear it from our satisfied clients....</p>
  </div>
  <div class="testimonial-slide slider">
    <div id="slider" class="flexslider">
      <ul class="slides">
         @foreach($testimonials as $testimonial)
         <li>
               <div class="ts-block">
                  <span class="testimonial-thumb"><img src="{{asset('uploads/testimonial-image/'.$testimonial->image)}}" alt="thumb"></span>
                  <div class="desc">
                        {!! $testimonial->description !!}
                     <span class="ts-name">{{ $testimonial->author }}</span>
                  </div>
               </div>
             </li>
         @endforeach
        
        
      </ul>
    </div>
    <div id="carousel" class="flexslider">
      <ul class="slides">
      @foreach($testimonials as $testimonial)
        <li>
          <div class="mt-block">
             <span class="img"><img src="{{asset('uploads/testimonial-image/'.$testimonial->image)}}" alt="thumb"></span>
             <h3>{{ $testimonial->author }}</h3>
             {!! $testimonial->description !!}
          </div>
        </li>
        @endforeach
       
      </ul>
    </div>

  </div>

 </div>
</div>
<!--testimonial-->

<!-- preffered partner -->
<div class="preffered-partner-section pad-tb60">
   <div class="container">
      <h2 class="bdr">Our Preffered Partner</h2>
      <p class="dark-p">ipsum dolor sit amet, consectetur adipiscing elit. porttitor nec justo vitae euismod. </p>
      <div class="preffered-partner-slider">
         <div class="img-sec">
            <img src="{{asset('img/html-images/bg-logo.png')}}" alt="slide-img">
         </div>
         <div class="img-sec">
            <img src="{{asset('img/html-images/laf-logo.png')}}" alt="slide-img">
         </div>
         <div class="img-sec">
            <img src="{{asset('img/html-images/ecart-logo.png')}}" alt="slide-img">
         </div>
         <div class="img-sec">
            <img src="{{asset('img/html-images/quite-logo.png')}}" alt="slide-img">
         </div>
         <div class="img-sec">
            <img src="{{asset('img/html-images/balume-logo.png')}}" alt="slide-img">
         </div>
      </div>
   </div>
</div>
<!-- preffered partner -->
@stop