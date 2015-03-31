<?php

class AuthsController extends \BaseController {


        public function getRegister()
    {
        $nama = User::nama();
        return View::make('home.register')
            ->with ('nama', $nama);
    }

        public function postRegister()
    {
        $rules = array(
            'first_name' =>'required',
            'last_name' =>'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|between:5,12|confirmed',
            'password_confirmation' => 'between:5,12'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('auths/register')
                ->withErrors($validator);
        } else {
            try
            {
                $email = Input::get('email');
                $user = Sentry::register(array(
                    'first_name' =>input::get('first_name'),
                    'last_name' => input::get('last_name'),
                    'email'     => $email,
                    'password'  => Input::get('password'),
                    'activated' => 1,
                    'avatar'    =>'image/luffy.jpg'

                ));

               $group = Sentry::findGroupByName('calonpenghuni');
                $user ->addGroup($group);





                $activationCode = $user->getActivationCode();

                // Send verification code via email admin to activate account
              //  Mail::send('emails.auth.activation', array('token'=>$activationCode), function($message) use($email)
               // {
                 //   $message->from('administrator@susun.com');

                   // $message->to($email, 'User')->subject('Verify your email address');
                //});

            }
            catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
            {
                Session::flash('message', ' Login field is required.');
                return Redirect::to('auths/register');
            }
            catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
            {
                Session::flash('message', ' Password field is required.');
                return Redirect::to('auths/register');
            }
            catch (Cartalyst\Sentry\Users\UserExistsException $e)
            {
                Session::flash('message', ' User with this login already exists.');
                return Redirect::to('auths/register');
            }

            Session::flash('message', ' Silahkan buka email anda untuk aktivasi admin');
            return Redirect::to('formulir/'.$user->id.'/create');
        }
    }

        public function getActive($token)
    {
        try
        {
            // Find the admin using the admin activation code
            $user = Sentry::findUserByActivationCode($token);

            // Attempt to activate the admin
            if ($user->attemptActivation($token))
            {
                // User activation passed
                $user->activated = 1;
                $user->activation_code = null;
                $user->save();
            }
            else
            {
                // User activation failed
                return Redirect::to('auths/register');
            }
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            echo ' User was not found.';
        }
        catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
        {
            echo ' User is already activated.';
        }

        Session::flash('message', 'You have successfully verified your account. You can now login.');
        return Redirect::to('home/login');
    }


}