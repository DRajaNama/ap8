import { Injectable } from '@angular/core';
import { HttpErrorResponse , HttpHeaders } from '@angular/common/http'; 
import { throwError } from 'rxjs';

export const httpOptions = {
    headers: new HttpHeaders({
      'Accept':'application/json'
    })
};
@Injectable({
  providedIn: 'root'
})
export class AppConfig {
 

  public apiUrl: string = 'http://192.168.168.207:8000/api/'; 


}
