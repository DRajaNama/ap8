@extends('layouts.auth')
@section('title','Register')
@section('content')
<div class="left-panel ">
        <div class="heading heading-group text-center text-uppercase">
          <h1>Registration</h1>
          <div class="heading-sub"><span>New to</span> <i><img src="{{ asset('images/iwhiz-logov2.png') }}" alt=""></i></div>
        </div>
        <div class="scrollbox">
          <div class="form-part">
                @include('layouts.admin.flash.alert')
            <div class="login-box pad1">
                  <form method="POST" action="{{ route('register') }}">
                            @csrf
                <div class="form-group position-relative{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <i class="iconimg"><img src="images/icon1.png" alt=""></i>
                    {{ Form::text('first_name', old('first_name'), ['class' => 'form-control'.($errors->has('first_name') ? ' is-invalid' : ''),'placeholder' => 'First Name','autofocus' => true]) }}
                    @if($errors->has('first_name'))
                    <span class="help-block">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
                <div class="form-group position-relative{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <i class="iconimg"><img src="images/icon1.png" alt=""></i>
                        {{ Form::text('last_name', old('last_name'), ['class' => 'form-control'.($errors->has('last_name') ? ' is-invalid' : ''),'placeholder' => 'Last Name']) }}
                        @if($errors->has('last_name'))
                    <span class="help-block">{{ $errors->first('last_name') }}</span>
                    @endif
                    </div>
                <div class="form-group position-relative{{ $errors->has('role_id') ? ' has-error' : '' }}">
                    <i class="iconimg"><img src="images/icon3.png" alt=""></i>
                    {{ Form::select('role_id', ['' => 'Select Your Role'] + $roles, old("role_id"), ['class' => 'form-control']) }}
                    @if($errors->has('role_id'))
                        <span class="help-block">{{ $errors->first('role_id') }}</span>
                        @endif
                </div>
                <a class="dtl-btn form-control" data-toggle="collapse" href="#form-dtl">Your Details</a>
                <div id="form-dtl" class="collapse dtl-block pad-l50 pad-t15">
                  <div class="form-group position-relative{{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="iconimg"><img src="images/icon4.png" alt=""></i>
                    {{ Form::text('email', old('email'), ['type' => 'email','class' => 'form-control'. ($errors->has('email') ? ' is-invalid' : ''),'placeholder' => 'Your Email Id']) }}
                    @if($errors->has('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="form-group position-relative{{ $errors->has('email') ? ' has-error' : '' }}">
                      <i class="iconimg"><img src="images/icon5.png" alt=""></i>
                        {{ Form::text('mobile', old('mobile'), ['class' => 'form-control','placeholder' => 'Your Phone Number', 'required' => false]) }}
                        @if($errors->has('mobile'))
                        <span class="help-block">{{ $errors->first('mobile') }}</span>
                        @endif
                  </div>
                  <div class="form-group position-relative {{ $errors->has('country_id') ? 'has-error' : '' }}"> <i class="iconimg"><img alt="" src="images/icon11.png"></i>
                    <select name="country_id" id="country_id" class="form-control" autocomplete="off">
                            @php
                             $old_c =  old("profile.country_id") ? old("country_id") : (isset($user->country_id) && !empty($user->country_id) ? $user->country_id : "");
                            @endphp
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                            <option value="{{ $country->id }}" {{ $country->id == $old_c ? "selected='selected'" : "" }} data-code="{{ $country->iso_alpha2_code }}" data-currencycode="{{ !empty($country->currency) ? $country->currency->code : '' }}">
                                {{ $country->title }}
                            </option>
                            @endforeach
                        </select>
                        {{ Form::hidden('currency_code', old('currency_code'),
                    ['id' => 'currency_code']) }} {{-- {{ Form::select('country_id', $countries, old("country_id"),
                    ['class' => 'form-control']) }} --}}
                    @if($errors->has('country_id'))
                        <span class="help-block">{{ $errors->first('country_id') }}</span>
                    @endif
                </div>

                <div class="form-group position-relative {{ $errors->has('state_id') ? 'has-error' : '' }}">
                        <i class="iconimg"><img alt="" src="images/icon11.png"></i>
                        {{ Form::select('state_id', ['' => 'Select State'], old("state_id"), ['class' => 'form-control ','id'=>'sub_category_id']) }}
                            @if($errors->has('state_id'))
                            <span class="help-block">{{ $errors->first('state_id') }}</span>
                            @endif
                    </div>

                {{-- <div class="form-group position-relative {{ $errors->has('full_address') ? 'has-error' : '' }}">
                <i class="iconimg"><img alt="" src="images/icon9.png"></i> {{ Form::text('full_address',
                  old('full_address'), ['class' => 'form-control','id' => 'full_address','placeholder'
                  => 'Enter Your Address']) }} @if($errors->has('full_address'))
                  <span class="help-block">{{ $errors->first('full_address') }}</span> @endif {{ Form::hidden('address_line_1',
                  old('address_line_1'), ['id' => 'street_number']) }} {{ Form::hidden('address_line_2',
                  old('address_line_2'), ['id' => 'route']) }}

              </div> --}}

              <div class="form-group position-relative {{ $errors->has('address_line_1') ? 'has-error' : '' }}">
                    <i class="iconimg"><img alt="" src="images/icon9.png"></i>
                    {{ Form::text('address_line_1', old('address_line_1'),
                        ['class' => 'form-control','placeholder' => 'Address Line 1'])
                        }}
                        @if($errors->has('address_line_1'))
                        <span class="help-block">{{ $errors->first('address_line_1') }}</span> @endif
                </div>

                <div class="form-group position-relative {{ $errors->has('address_line_2') ? 'has-error' : '' }}">
                        <i class="iconimg"><img alt="" src="images/icon9.png"></i>
                        {{ Form::text('address_line_2', old('address_line_2'),
                            ['class' => 'form-control','placeholder' => 'Address Line 2'])
                            }}
                            @if($errors->has('address_line_2'))
                            <span class="help-block">{{ $errors->first('address_line_2') }}</span> @endif
                    </div>



                    <div class="form-group position-relative {{ $errors->has('city') ? 'has-error' : '' }}">
                            <i class="iconimg"><img alt="" src="images/icon9.png"></i>
                            {{ Form::text('city', old('city'),
                                ['class' => 'form-control','placeholder' => 'City', 'id' => 'locality'])
                                }}
                                @if($errors->has('city'))
                                <span class="help-block">{{ $errors->first('city') }}</span> @endif
                        </div>

                <div class="form-group position-relative {{ $errors->has('postal_code') ? 'has-error' : '' }}"> <i class="iconimg"><img alt="" src="images/icon9.png"></i> {{ Form::text('postal_code', old('postal_code'),
                    ['class' => 'form-control','id'=>'postal_code','placeholder' => 'Postal Code']) }}
                    @if($errors->has('postal_code'))
                    <span class="help-block">{{ $errors->first('postal_code') }}</span>
                     @endif
                </div>

              <div class="form-group position-relative {{ $errors->has('latitude') ? 'has-error' : '' }}"> {{ Form::hidden('latitude', old('latitude'),
                  ['id' => 'latitude', 'class' => 'form-control','readonly' => true]) }} @if($errors->has('latitude'))
                  <span class="help-block">{{ $errors->first('latitude') }}</span> @endif
              </div>
              <div class="form-group position-relative {{ $errors->has('longitude') ? 'has-error' : '' }}">  {{ Form::hidden('longitude',
                  old('longitude'), ['id' => 'longitude', 'class' => 'form-control','readonly' => true])
                  }} @if($errors->has('longitude'))
                  <span class="help-block">{{ $errors->first('longitude') }}</span> @endif
              </div>
                  <div class="form-group position-relative{{ $errors->has('password') ? ' has-error' : '' }}">
                      <i class="iconimg"><img src="{{ asset('images/icon2.png') }}" alt=""></i>
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Your Password">
                      @if($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                  </div>

                  <div class="form-group position-relative{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <i class="iconimg"><img src="{{ asset('images/icon2.png') }}" alt=""></i>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    @if($errors->has('password_confirmation'))
                        <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                  </div>

                </div>
                <div class="form-group position-relative{{ $errors->has('agree') ? ' has-error' : '' }}">
                  <div class="check-custom pad-t25">
                    <input type="hidden" value="0" name="agree">
                    <input type="checkbox" id="test01" {{ old('agree') && old('agree')==1 ? "checked='checked'" : "" }} name="agree" value="1">
                    <label for="test01">I agree to all the <a target="_blank" href="{{  route('pages.with.slug','term-conditions') }}">terms of the Agreements</a></label>
                    @if($errors->has('agree'))
                        <span class="help-block" style="display:block">{{ $errors->first('agree') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group btn-top ">
                  <div class="login-btn  ">
                    <button type="submit" class="btn btn-black hvr-shutter-out-horizontal">REGISTER NOW</button>
                  </div>
                  <div class="newuser "> Already Registered? <br>
                    Login <a href="{{ route('login') }}">here</a> </div>
                  </div>
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
@endsection
@section('script_per_page')
<script>
$(function() {
    @php
        if($errors->all()){
            @endphp
            divCollapse('show');
 @php }  @endphp
    $("select[name='role_id']").on("change", function(){

        if($(this).val() != ""){
            divCollapse('show');
        }else{
            divCollapse('hide');
        }

    });

@if(old('country_id'))
$('#country_id')
    .val({{ old('country_id') }})
    .trigger('change');
@endif


});
function divCollapse(sh){
    $('#form-dtl').collapse(sh);
}
var placeSearch;

var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    //administrative_area_level_1: 'short_name',
    // country: 'long_name',
    postal_code: 'short_name'
};
$('#country_id').change(function() {
    $("#full_address").val('');
    $('#currency_code').val($('#country_id option:selected').data('currencycode'));

    var country_id = $(this).val();
        $.ajax({
            type: "get",
            url: "{{ route('getState') }}",
            data: {location_id: country_id},
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                var html = "<option value=''>Select State</option>";
                if(data.status == true){
                    var selected = '{{ old('state_id') }}';
                    $.each(data.data, function (key, value) {
                        if(selected == key){
                            html += "<option value='"+ key +"' selected='selected'  >"+ value +"</option>";
                        }else{
                            html += "<option value='"+ key +"'  >"+ value +"</option>";
                        }
                    });
                }
                $("#sub_category_id").html(html);
            }
        });


});
function initAutocomplete() {
    // Create the autocomplete object, restricting the search predictions to
    // geographical location types.
    var autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('full_address'), {
                types: ['geocode']});

    if($('#country_id').val() != ""){
        console.log($('#country_id option:selected').data('code'));
        autocomplete.setComponentRestrictions(
        {'country': [$('#country_id option:selected').data('code')]});
    }
    // Avoid paying for data that you don't need by restricting the set of
    // place fields that are returned to just the address components.
    autocomplete.setFields(['address_components', 'geometry']);

    // When the user selects an address from the drop-down, populate the
    // address fields in the form.
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        for (var component in componentForm) {
            console.log(component);
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        console.log(autocomplete.getPlace());
        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        if (place != undefined) {
            console.log(place.geometry);
            var lat = place.geometry.location.lat();
            var lng = place.geometry.location.lng();
            document.getElementById("latitude").value = lat;
            document.getElementById("longitude").value = lng;

            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }
    });
    function setupClickListener(id, countries) {
      var radioButton = document.getElementById(id);
      radioButton.addEventListener('change', function() {
          console.log($('#country_id option:selected').data('code'));
        autocomplete.setComponentRestrictions({'country': $('#country_id option:selected').data('code')});
      });
    }
    setupClickListener('country_id', $('#country_id option:selected').data('code'));
}

function fillInAddress() {
    // Get the place details from the autocomplete object.

}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle(
                    {center: geolocation, radius: position.coords.accuracy});
            autocomplete.setBounds(circle.getBounds());
        });
    }
}
$('#full_address').keypress(function(e) {
    if (e.which == 13) {
        //google.maps.event.trigger(autocomplete, 'place_changed');
        return false;
    }
});
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXZKrj9Z9SBgjD1E9CTk5f4d5rh0Mwvcc&libraries=places&callback=initAutocomplete"
    async defer></script>
@stop
