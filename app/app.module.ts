import { NgModule }             from '@angular/core';
import { BrowserModule }        from '@angular/platform-browser';

import { AppComponent }         from './app.component';
import { HomeComponent }        from './home.component';
import { WorksComponent }       from './works.component';
import { AboutComponent }       from './about.component';
import { RegisterComponent }    from './register.component';
import { LoginComponent }       from './login.component';
import { routing }              from './app.routing';

@NgModule({
    imports:        [ 
        BrowserModule,
        routing
    ],
    declarations:   [ 
        AppComponent,
        HomeComponent,
        WorksComponent,
        AboutComponent,
        RegisterComponent,
        LoginComponent
    ],
    bootstrap:      [ AppComponent ]
})

export class AppModule {  }
