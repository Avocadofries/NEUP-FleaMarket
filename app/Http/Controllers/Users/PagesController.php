<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Request;
use App\Http\Requests\CreateUsersRequest;
class PagesController extends Controller
{
   public function create()
   {
       return view('users.pages.create');
   }
    public function store(CreateUsersRequest $request)
    {
       users::create($request->all());

      return redirect('users');
    }

    public function edit($id)
    {
        return view('users.pages.edit')->withPage(users::find($id));
    }

    public function update(CreateUsersRequest $request,$id)
    {
        $this->validate(
            $request,[
                'cardid' => 'required|unique:users.cardid,'.$id.'|',
                'username' => 'required|unique:users.username|',
                'realname' => 'required|unique:users.realname|',
            ]
        );

        $page = users::find($id);
        $page->cardid = Input::get('cardid');
        $page->username = Input::get('username');
        $page->realname = Input::get('realname');
        $page->id=1;

        if($page->save()){
            return Redirect::to('users');
        }else{
            return Redirect::back()->withInput()->withErrors('fail to save userdata.');
        }

    }

    public function destroy($id){
        $page = users::find($id);
        $page->delete();

        return Redirect::to('users');

    }

}
