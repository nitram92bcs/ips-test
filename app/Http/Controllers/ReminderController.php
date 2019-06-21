<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\InfusionsoftHelper;
use App\User;

class ReminderController extends Controller
{
    /**
     * Expect HTTP POST to “/api/module_reminder_assigner”
     * request with “contact_email” as a parameter
     * @return \Illuminate\Http\Response
     * @param Iluminate\Http\Request 
     */
    public function moduleAssigner(Request $request)
    {
        if($request->has('contact_email')){
            $contact_email = $request->input('contact_email');
            return $this->chooseTag($contact_email);
        }
        else
            return Response::json(['success'=>false,'message'=> 'Contact Email was not given, please verify your request information.']);
    }

    /**
     * Calculate & Add one correct tag to the customer in Infusionsoff
     * param $contact_email as a parameter
     * @return \Illuminate\Http\Response
     * @param $contact_email
     */
    private function chooseTag($contact_email){
        
        $user_modules = User::where('email', $contact_email)->with('completed_modules')->first();

        $reminder = ['last_module'=>0];
        foreach($user_modules->completed_modules as $module){
        }
        $infusionsoft = new InfusionsoftHelper();

    }
    

}
