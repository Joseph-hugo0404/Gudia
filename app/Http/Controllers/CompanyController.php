<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = CompanyResource::collection(Company::all());

        return inertia('Companies/Index', compact('companies'));
    }

    public function create()
    {
        return inertia('Companies/Create');
    }

    public function store(StoreCompanyRequest $request)
    {
        Company::create($request->validated());

        return redirect()->route('companies.index')
            ->with('message', 'Company created successfully');
    }

    public function edit(Company $company)
    {
        return inertia('Companies/Edit', compact('company'));
    }

    public function update(Company $company, StoreCompanyRequest $request)
    {
        $company->update($request->validated());

        return redirect()->route('companies.index')
            ->with('message', 'Company updated successfully');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')
            ->with('message', 'Company deleted successfully');
    }
}
