<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function dashboard(Request $request) {
        return view('user.dashboard');
    }
}
