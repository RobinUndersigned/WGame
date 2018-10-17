<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userrole;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use \Facebook\Facebook;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userroles = Userrole::where('userid', Auth::user()->id)->get();
        dump($userroles);

        $fb = new Facebook([
            'app_id' => '725702031136076',
            'app_secret' => 'e6875a7a4404647747d564d886cadaac',
            'default_graph_version' => 'v3.1'
        ]);

        $response = $fb->get('/181161252458742/events', 'EAAKUBavHVUwBAP2qlJrJrYZA4FiGRZBThE7karg18CNjJvCMYfZCYVcsR4cabZBjcdUwuwQm6KJrWZB63sMfcxmxFPsWf8U7VdqfKXvE91XSewACnV0ALZCuZCVoP1BwKLgg4agYxiCZBeQM2zEPzhnvFmdYEA9znztqvaxERnuMDDBUsGZA6lxygM1aGdsmZC1VZAn0z6xJytbLQZDZD');
        $body = $response->getBody();
        $json = json_decode($body);

        foreach ($json->data as $data){
            echo $data->description;
        }
        return view('home', ['userroles' => $userroles]);
    }
}
