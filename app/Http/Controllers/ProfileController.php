<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use App\Repositories\ProfilesRepository;

class ProfileController extends Controller
{
    protected $profiles;

    public function __construct(ProfilesRepository $profiles)
    {
        $this->middleware('auth');

        $this->profiles = $profiles;
    }

    public function index(Request $request)
    {
        return view('profile.index', [
            'profiles' => $this->profiles->forUser($request->user())
        ]);
    }

    public function create()
    {
        return view('profile.crud.create');
    }

    public function store(Request $request)
    {
        $this->valid($request);

        $user = $request->user();

        $user->profiles()->create($request->all());

        return redirect()->route('profile', $user->username);
    }

    public function show(Request $request, $username, $id)
    {
        return view('profile.profile', [
            'profile' => $this->profiles->getOneProfile($request->user(), $id)
        ]);
    }

    public function edit(Request $request, $username, $id)
    {
        return view('profile.crud.edit', [
            'profile' => $this->profiles->getOneProfile($request->user(), $id)
        ]);
    }

    public function update(Request $request, $username, $id)
    {
        $this->valid($request);

        $profile = $this->profiles->getOneProfile($request->user(), $id);

        $profile->update($request->all());

        return redirect()->route('profile.show', [$username, $id]);
    }

    public function getAllProfiles()
    {
        return view('profile.profiles', [
            'profiles' => Profile::all(),
            'users' => User::all()
        ]);
    }

    public function getOneProfile($id)
    {
        return view('profile.one_profile', ['profile' => Profile::find($id)]);
    }

    private function valid($request)
    {
        return $this->validate($request, [
            'full_name' => 'required',
            'birthday' => 'required|date_format:"Y-m-d"',
            'e_mail' => 'required|email',
            'phone' => 'required|digits_between:6,10',
            'github' => 'required|url',
            'about' => 'required',
        ]);
    }
}