<?php

namespace App\Http\Controllers;

use App\Models\Journalist;

use Illuminate\Http\Request;


class JournalistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Journalist $journalist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journalist  $journalist
     * @return \Illuminate\Http\Response
     */
    public function edit(Journalist $journalist)
    {
        //
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journalist  $journalist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journalist $journalist)
    {
        //
    }

    public function login(){
        return view('login');
    }

    public function logininput(Request $request){
        $validate = $request->validate([
               'email' => 'required',
               'password' => 'required'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

        if($email === "1234@gmail.com" && $password === "12345"){
           return "Login Successfull";
        }
    //     else{
       
       
    // public function registration(){
    //     return view('customer.registration');
    // }
        }

        

    public function registrationinput(Request $request){
        $validate = $request->validate([
            'name'=>'required|min:5|max:10',
            'dob'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'email',
            'password' => 'required'

        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters'
        ]
    );
        $journalist = new Journalist();
        $journlist->name = $request->name;
        $journalist->email = $request->email;
        $journalist->password = $request->password;
        $journalist->dob = $request->dob;
        $journalst->phone = $request->phone;

        $journalist->save();
         return 'Registration is successful';
        //return $customer;
    }
    public function journalistList(){
        $journalists = Journalist::all();

        // for($i=0; $i<10; $i++){
        //     $student= array(
        //         "name"=>"Student ".($i+1),
        //         "id" => "00".($i+1),
        //         "dob" => "11-11-11"
        //     );
        //     $students[]= (object)$student;
        // }
          return 
           
           "WRONG Email / Password <br>
            Invalid Email/ Password";
                          
        }
    }  // return view('pages.customer.list')->with('customers', $customers);
        
    
        



