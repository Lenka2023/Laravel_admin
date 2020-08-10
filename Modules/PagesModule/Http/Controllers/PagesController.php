<?php

namespace Modules\PagesModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PagesModule\Entities\Page;
class PagesController extends Controller
{
    public function dynamic(Page $page)
    {
       return view('show')->with(compact('page'));
    }
}
