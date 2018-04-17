<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function listUser()
	{
		$user = User::orderby('id', 'desc')->paginate(2);
		return view('user.index', compact('user'));
	}

	public function insert(Request $request) 
	{
		$request->validate([
			'name' => 'required|min:5',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:5'
		]);
		$request->merge([
			'password' => bcrypt($request->password)
		]);
		user::create($request->all());
		return redirect('admin')->with('user', 'date berhasil di masukan');
	}

	public function hapus($id)
	{
		User::find($id)->delete();
		return redirect('admin')->with('User');
	}

	public function create()
	{
		return view('user.create');
	}

	 public function edit($id)
    {
        $user = User::find($id);
        return  view('user.edit', compact('user'));
    }
    public function update(Request $abc) //typhim (  )
    {
        User::find($abc->id)->update($abc->all());
        return redirect('admin')->with('user', 'data user berhasil di update');
    }
}
