<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    

  // Enregistrer les composants Blade
  Blade::component('layouts.admin', 'layout');
  Blade::component('layouts.candidat', 'candidat');

  // Passer les notifications de l'utilisateur connecté à la vue "layouts.candidat"
  Blade::directive('notifications', function () {
    return "<?php echo view('layouts.candidat', ['notifications' => Auth::user()->notifications]);?>";
  });
 


    
}



}
