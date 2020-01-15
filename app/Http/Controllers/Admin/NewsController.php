<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class Newscontroller extends Controller
{
  public function add ()
  {
        return view('admin.news.create');
  }
  public function create(Request $request)
  {
  return redirect('admin/news/create');
  }  
} 