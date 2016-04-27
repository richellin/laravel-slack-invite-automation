<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \richellin\chat\Invite;
use \richellin\chat\Channel\Slack;
class InvitationsController extends Controller
{
    public function index($channel)
    {
        return view('invitation', [
            'email' => '',
            'send_flg' => '',
            'err_msg' => '',
        ]);
    }
    
    public function send(Request $request,$channel)
    {
        $email = $request->input('email');
        $err_msg = '';
        $send_flg = FALSE;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $invite = new Invite();
            $send_flg = $invite->channel(new Slack())
                      ->set([
                        'team_name'=> env('SLACK_TEAM_NAME',''),
                        'email'=> $email,
                        'channel'=> env('SLACK_CHANNEL',''),
                        'token'=> env('SLACK_TOKEN','')])
                      ->send();
            if($send_flg === FALSE){
                $err_msg = $invite->errMsg();
            }
        } else {
            $err_msg = 'Check your email';
        }
        
        return view('invitation', [
            'email' => $email,
            'send_flg' => $send_flg,
            'err_msg' => $err_msg,
        ]);
    }
}
