import { Component, OnInit  } from '@angular/core';
import { RegisterService } from '../register.service';
import 'rxjs';
import {Http, Response} from '@angular/http';


@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  otp_number:string;
  otp_verify:boolean;
  agreement:string;
  mobile:string;
  email:string;
  password:string;
  cpassword:string;
  last_insert_id:number; 

  address: Object;
  first_name:string;
  middle_name:string;
  last_name:string;
  dob:any;
  emp_status:string;
  emp_post:string;
  tax_status:string;
  document:string;
  id:string;
  is_login:boolean;
  document_number:string;
  data:any;


  constructor(private registerService : RegisterService) {
    
    
  }

  ngOnInit() {
  }
 
  send_otp(){
    return this.registerService.sendOtp(this.mobile).subscribe(
      (res: Response) => {
      this.data = res.json();
      console.log(res); 
      },
      (error)=>{

      }
    );
   
  }

  submit_otp(){
    return this.registerService.submitOtp(this.otp_number).subscribe(
      (data:any[])=>{ console.log(data)},
      (error:any)=>{}
    );
  }
  
  register(){ 
    this.otp_verify = true;
    if(this.otp_verify == true){
      return this.registerService.submitForm(this.agreement, this.mobile, this.email, this.password, this.cpassword).subscribe(
        (data:any[])=>{ console.log(data)},
        (error:any)=>{}
      );
    }else{
      return alert('OTP not Verify');
    }
  }


  getAddress(place: object) {
    this.address = place['formatted_address'];
  }
  
  submitKYC(){
    this.id ='1'; 
    this.is_login = true;
    if(this.is_login == true){
    var data = {
        'id':this.id,
        'first_name':this.first_name,
        'last_name':this.last_name,
        'middle_name':this.middle_name,
        'dob':this.dob,
        'address':this.address,
        'emp_status':this.emp_status,
        'emp_post':this.emp_post,
        'tax_status':this.tax_status,
        'document':this.document,
        'document_number':this.document_number,
      }
      return this.registerService.submitKYC(data).subscribe(
        (data:any[])=>{ console.log(data)},
        (error:any)=>{}
      );
    }else{
      return alert('Login First');
    }
  }
}
