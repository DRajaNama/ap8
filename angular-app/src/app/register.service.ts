import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import 'rxjs';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { AppConfig } from './app.config';

@Injectable({
  providedIn: 'root'
})
export class RegisterService {
  constructor(private http:HttpClient,private appConfig:AppConfig) { 
 }

  submitForm(agreement:string,mobile:string,email:string,password:string,cpassword:string) :Observable <any> {
    let headers = new HttpHeaders();
    headers = headers.set('Accept','application/json'); 
    var body = new FormData();
    body.append('agreement', agreement != undefined ? agreement:'');
    body.append('mobile', mobile != undefined ?mobile:'');
    body.append('email', email != undefined ? email:'');
    body.append('password', password != undefined ? password:'');
    body.append('password_confirmation', cpassword != undefined ? cpassword:'');
    return this.http.post(this.appConfig.apiUrl+'register', body, {headers: headers});
  }
  
  sendOtp(mobile:string):Observable <any> {
    let headers = new HttpHeaders(); 
    headers  = headers.set('Accept','application/json, text/plain, */*'); 
    var body = new FormData();
    body.append('mobile', mobile != undefined ?mobile:''); 
    return this.http.post(this.appConfig.apiUrl+'register/sendOtp',body,{headers:headers}).pipe(
      map((res: Response) => res.json())
      
    );
  }

  submitOtp(otp_number:string):Observable <any>{
    let headers = new HttpHeaders(); 
    headers  = headers.set('Accept','application/json'); 
    var body = new FormData();
    body.append('otp_number',otp_number!= undefined ? otp_number:''); 
    return this.http.post(this.appConfig.apiUrl+'register/submitOtp',body,{headers:headers});
  }

  
  submitKYC(data:any) :Observable <any> {

    let headers = new HttpHeaders();
    headers = headers.set('Accept','application/json'); 

    var body = new FormData();
    body.append('id', data.id != undefined ? data.id:'');
    body.append('first_name', data.first_name != undefined ? data.first_name:'');
    body.append('middle_name', data.middle_name != undefined ? data.middle_name:'');
    body.append('last_name', data.last_name != undefined ? data.last_name:'');
    body.append('dob', data.dob != undefined ?data.dob:'');
    body.append('address', data.address != undefined ?data.address:'');
    body.append('emp_status', data.emp_status != undefined ?data.emp_status:'');
    body.append('emp_post', data.emp_post != undefined ?data.emp_post:'');
    body.append('tax_status', data.tax_status != undefined ?data.tax_status:'');
    body.append('document', data.document != undefined ?data.document:'');
    body.append('document_number', data.document_number != undefined ?data.document_number:'');

    return this.http.post(this.appConfig.apiUrl+'register/kyc', body, {headers: headers});
  }
  

}
