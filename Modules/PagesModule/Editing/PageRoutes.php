<?php namespace  Modules\PagesModule\Editing;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Http\Controllers\Visible\PagesController;
use Modules\PagesModule\Entities\Page;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

/**
 * Class PageRoutes
 * @package Modules\PagesModule\Editing
 */
class PageRoutes
{
    /**
     * Define routes.
     */
    public function routes()
    {
        $this->pages()->each(function(Page $page) {
            Route::get($page->path, function() use ($page) {
                return App::make(PagesController::class)->callAction('dynamic', ['page' => $page]);
            })->name('page.'.Str::snake($page->path));
        });
    }

    /**
     * Load pages from database.
     * @return Collection|Page[]
     */
    private function pages()
    {
        return Cache::remember(
            'pages_routes',
            Carbon::now()->addWeek(),
            function() {
                try {
                    $pages = Page::all();
                    return $pages;
                }
                catch (\Exception $exception) {
                    return new Collection();
                }
            }
        );
    }
}