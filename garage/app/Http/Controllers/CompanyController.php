<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('companies.index');
    }


    public function store(StoreCompanyRequest $request)
    {
        $id = Company::create($request->all())->id;
        
        return response()->json([
            'message' => 'Įmonė sėkmingai sukurta!',
            'id' => $id
        ]);
    }

    public function list(){
        // return response()->json(company::all());

        $companies = Company::all();
        $html = view('companies.list', ['companies' => $companies])->render();

        return response()->json([
            'html' => $html
        ]);
    }

    public function delete(Company $company){
        $html = view('companies.delete', ['company' => $company])->render();

        return response()->json([
            'html' => $html
        ]);
    }

    public function show(Company $company)
    {
        //
    }


    public function edit(Company $company)
    {
        //
    }

  
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

   
    public function destroy(Company $company)
    {
        //
    }
}
