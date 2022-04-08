if($request->file('image')){
    $file= $request->file('image');
    $filename= rand().$file->getClientOriginalName();
    $file-> move(public_path('frontend/img/user/'), $filename);
    $user->photo= $filename;
}

// here image is the name for input field
