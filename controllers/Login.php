<?php return function($req, $res) {
    
    $req->sessionStart();

    if(!$req->session('logged_in'))
    {
        $res->render('main', 'login', [
            'message' => $req->query('success')? 'Successful!': ''   
        ]);
    }
    else{
        $res->redirect('/');
        exit();
    }
    
} ?>