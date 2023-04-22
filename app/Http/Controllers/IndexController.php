<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statya;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class IndexController extends Controller
{
    public function index(){
		$mode = false;
		$name = $this->authAdmin();
        $statyas = Statya::all();
		$rubrics = statya::select('rubrics')->groupBy('rubrics')->get();
        return view('index', ['statyas'=>$statyas, 'rubrics'=>$rubrics, 'admin'=>$name[0], 'name' => $name[1], 'mode' => $mode]);
    }
	
	
	
    public function showrub($title)
    {
		$name = $this->authAdmin();
		$mode = false;
	
		$rubrics = statya::select('rubrics')->groupBy('rubrics')->get();
		if (!isset($title)){
            $statyas = statya::all();
        }
        else{
            $statyas = statya::where('rubrics', $title)->get();
        }
		
        $rubrics = Statya::select('rubrics')->groupBy('rubrics')->get();
        return view('rubrika')->with(['statyas'=>$statyas, 'rubrics'=>$rubrics, 'admin' => $name[0], 'name' => $name[1], 'mode' => $mode]);
    }

    public function show($id)
    {
		$name = $this->authAdmin();
		$mode = false;
        $statyas = Statya::findOrFail($id);
		$rubrics = statya::select('rubrics')->groupBy('rubrics')->get();
        return view('statya')->with(['statyas' => $statyas, 'rubrics' => $rubrics, 'admin' => $name[0], 'name' => $name[1], 'mode' => $mode]);
    }
	public function add(Request $request)
    {
		$mode = true;
		if ($request->isMethod('post')){
			$validated = $request->validate(['title' => 'required', 'lid' => 'required', 'content' => 'required', 'rubrics' => 'required','image' => 'required']);
			if($validated){
				$data = $request->all();
				$statya = new statya;
				$statya->fill($data);
				$statya->save();
				return redirect('/');
			}
			
			
			
		}
        $rubrics = statya::select('rubrics')->groupBy('rubrics')->get();
		$name = $this->authAdmin();
		
        return view('add')->with(['rubrics' => $rubrics, 'admin'=>$name[0], 'name'=>$name[1], 'mode' => $mode]);
    }
	
	protected function authAdmin()
	{
		if (Auth::check())
		{
			$name = Auth::user()->name;
			$id = Auth::id();
			$admin = (user::where(['id'=>$id, 'is_admin'=>1])->exists()) ?? false;
			
		}
		else{
			$admin = false;
			$name = "";
		}
		return [$admin, $name];
	}
	
	public function delete($id)
    {
		$statyas = statya::where('id', $id)->delete();
		return redirect('/');
    }
	
}
