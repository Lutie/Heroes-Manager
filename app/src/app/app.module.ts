import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';

import { AngularDraggableModule } from 'angular2-draggable';

import { AppComponent } from './app.component';
import { TeamComponent } from './screens/team/team.component';
import { CharacterComponent } from './screens/character/character.component';
import { CompanyComponent } from './screens/company/company.component';
import { MapComponent } from './screens/map/map.component';
import { ActionComponent } from './screens/action/action.component';
import { HistoryComponent } from './screens/history/history.component';
import { MainComponent } from './screens/main/main.component';
import { InfoComponent } from './screens/info/info.component';
import { DisplayComponent } from './screens/display/display.component';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { RegisterComponent } from './modals/register/register.component';
import { CreditsComponent } from './modals/credits/credits.component';
import { LoginComponent } from './modals/login/login.component';
import { AboutComponent } from './modals/about/about.component';

@NgModule({
  declarations: [
    AppComponent,
    TeamComponent,
    CharacterComponent,
    CompanyComponent,
    MapComponent,
    ActionComponent,
    HistoryComponent,
    MainComponent,
    InfoComponent,
    DisplayComponent,
    HeaderComponent,
    FooterComponent,
    RegisterComponent,
    CreditsComponent,
    LoginComponent,
    AboutComponent
  ],
  imports: [
    BrowserModule,
    AngularDraggableModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule {}
