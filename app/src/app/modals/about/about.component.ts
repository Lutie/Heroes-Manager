import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { getTestBed } from '@angular/core/testing';

import { environment } from '../../../environments/environment';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.scss']
})
export class AboutComponent implements OnInit {
  version?: JSON;
  apiUrl = environment.api.baseUrl;

  constructor(private http: HttpClient) {}

  ngOnInit() {
    this.getVersion().subscribe(
      (response: JSON) => {
        this.version = response;
      }
    );
  }

  getVersion(): Observable<any> {
    return this.http.get(this.apiUrl + '/version');
  }

}
