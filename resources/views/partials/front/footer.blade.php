<footer class="footer">
    <div class="footer__top">
       <div class="container">
          <div class="row">
             <div class="col-sm-12 col-lg-8">
                <div class="row">
                   <div class="col-sm-4">
                      <div class="footer__title">Quick Links</div>
                      <ul class="footer__linklist">
                         <li><a href="javascript:void(0);">About Us</a></li>
                         <li><a href="javascript:void(0);">Shippers</a></li>
                         <li><a href="javascript:void(0);">Carriers</a></li>
                         <li><a href="{{ url('pages/carriar-faq') }}">Carrier FAQ</a></li>
                         <li><a href="{{ url('pages/faq-shiper') }}">Shipper FAQ</a></li>
                         <li><a href="javascript:void(0);">Pricing</a></li>
                         <li><a href="javascript:void(0);">Advertising</a></li>
                         <li><a href="javascript:void(0);">News</a></li>
                         <li><a href="javascript:void(0);">Contact Us</a></li>
                      </ul>
                   </div>
                   <div class="col-sm-8">
                      <div class="footer__title">Cargo Categories</div>
                      <ul class="footer__linklist footer__linklist--double">
                         <li><a href="javascript:void(0);">Boat Transport</a></li>
                         <li><a href="javascript:void(0);">Container Transport</a></li>
                         <li><a href="javascript:void(0);">Car Transport</a></li>
                         <li><a href="javascript:void(0);">Furniture Removal</a></li>
                         <li><a href="javascript:void(0);">Farm Machinery Transport</a></li>
                         <li><a href="javascript:void(0);">Grain Transport</a></li>
                         <li><a href="javascript:void(0);">General Freight</a></li>
                         <li><a href="javascript:void(0);">Heavy Haulage</a></li>
                         <li><a href="javascript:void(0);">Hay Transport</a></li>
                         <li><a href="javascript:void(0);">Machinery Transport</a></li>
                         <li><a href="javascript:void(0);">Livestock Transport</a></li>
                         <li><a href="javascript:void(0);">Portable Buildings</a></li>
                         <li><a href="javascript:void(0);">Palletised Freight</a></li>
                         <li><a href="javascript:void(0);">Truck Transport</a></li>
                         <li><a href="javascript:void(0);">Trailer Transport</a></li>
                         <li><a href="javascript:void(0);">Bulk Tipper Transport</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-sm-12 col-lg-4">
                <div class="footer__sendmsg">
                   <div class="footer__title">Send Message</div>
                   <div class="sendmsg__form">
                      <form>
                         <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Full Name">
                         </div>
                         <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                         </div>
                         <div class="form-group">
                            <textarea class="form-control"  rows="3" placeholder="Enter Your Message"></textarea>
                         </div>
                         <button type="submit" class="btn btn-custom">SEND MESSAGE</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="footer__bottom">
       <div class="footer__socialbar">
          <a href="{{ $site_settings['TWITTER_URL']}}"><i class="fab fa-twitter"></i></a>
          <a href="{{ $site_settings['FACEBOOK_URL']}}"><i class="fab fa-facebook-f"></i></a>
          <a href="{{ $site_settings['LINKEDIN_URL']}}"><i class="fab fa-linkedin-in"></i></a>
          <a href="{{ $site_settings['GOOGLE_URL']}}"><i class="fab fa-google-plus-g"></i></a>
       </div>
       <div class="footer__copyright">
          <span>Copyright © 2019 <a href="{{ url('') }}">{{ $site_settings['SYSTEM_APPLICATION_NAME']}}</a>. All rights reserved</span>
       </div>
    </div>
 </footer>