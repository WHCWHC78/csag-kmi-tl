import { ModuleWithProviders }  from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { HomeComponent }        from './home.component';
import { WorksComponent }       from './works.component';
import { AboutComponent }       from './about.component';

const appRoutes: Routes = [
    {
        path:       '',
        redirectTo: '/home',
        pathMatch:  'full'
    },
    {
        path:       'home',
        component:  HomeComponent
    },
    {
        path:       'works',
        component:  WorksComponent
    },
    {
        path:       'about',
        component:  AboutComponent
    }
];

export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);
