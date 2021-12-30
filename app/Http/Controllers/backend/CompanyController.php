<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function list(){
        $componies=Company::all();
        //dd($componies);
        return view('admin.company.company',compact('componies'));
    }
    
    

    public function form(){
        return view('admin.company.company-entry');
    }

    public function PostCompany(Request $request){
        // dd($request->all());
        Company::create([
            //field name from DB || field name from form 
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone_number'=>$request->phone
        ]);
        return redirect()->back();
        
    }
    public function deleteCompany($id){
        $company = Company::find($id);

        if ($company){
            $company->delete();
            return redirect()->back();
        }


    }
    
}
