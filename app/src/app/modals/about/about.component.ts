import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { getTestBed } from '@angular/core/testing';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.scss']
})
export class AboutComponent implements OnInit {
  test: any;

  constructor(private http: HttpClient) {
    this.test = 'nada';
  }

  ngOnInit() {
    this.getTest().subscribe(
      (response: any) => {
        this.test = response;
        console.log(this.test);
      }
    );
  }

  getTest(): Observable<any> {
    return this.http.get('https://heroes-manager-server.test/test/version');
  }

}
