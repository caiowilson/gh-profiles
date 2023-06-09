<?php

namespace App\Http\Controllers;

use App\Http\Services\GitHubService;
use App\Models\GhUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class GhUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Dashboard', [
            'ghusers' => GitHubService::getBaseCachedUsers(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        //situação não deveria acontecer, mas é melhor prevenir
        if (GhUser::where('login', $request->login)->exists()) {
            return redirect()->back()->with('error', 'User already exists');
        }

        $user = GitHubService::getCachedUser($request->login);
        $user['gh_id'] = $user['id'];//salva github id como gh_id
        unset($user['id']);

        if(GhUser::create($user)){
            return redirect()->back()->with('success', 'User added successfully', compact('user'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $login)
    {
        if (!GhUser::where('login', $login)->exists()) {
            $user = GitHubService::getCachedUser($login);
        } else {
            $user = GhUser::where('login', $login)->first();
        }
        $repos = Http::get("https://api.github.com/users/$login/repos")->json();
        return Inertia::render('GhUsers/Show', [
            'user' => $user,
            'repos' => $repos,
        ]);
    }

}
