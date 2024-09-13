<?php

namespace Modules\Documents\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Node\Block\Document;
use Modules\Documents\Entities\Document as EntitiesDocument;
use Modules\Documents\Entities\DocumentCategory;
use Modules\Documents\Entities\Sales_officer;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $all_companies = $this->get_companies();
        $all_salesofc = $this->get_all_sales_officers();
        $doc_cats = DocumentCategory::all();
        return view('documents::index')->with(compact('all_companies', 'all_salesofc', 'doc_cats'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('documents::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function storecompany(Request $request)
    {
        $validateData = $request->validate(
            [
                "cpny_name" => 'required',
                "cpny_contact" => 'required',
                "cpny_email" => 'required | email',
                "sales_officer" => 'required'

            ]
        );

        $userId = Auth::id();

        $company = new Company();

        $company->name = $validateData['cpny_name'];
        $company->email = $validateData['cpny_email'];
        $company->contact = $validateData['cpny_contact'];
        $company->user_id = $userId;
        $company->sales_officer = $validateData['sales_officer'];

        $company->save();

        session()->flash('success', 'company added');

        return redirect()->route('documents.index');
        // return view('documents::index');
    }


    public function store_doc(Request $request)
    {

        $userId = Auth::id();

        $doc = new EntitiesDocument();

        // Store the uploaded file
        if ($request->hasFile('doc')) {
            // Save the file to a directory and get its path
            $filePath = $request->file('doc')->store('documents', 'public');  // 'documents' is the directory within storage/app/public

            // Store the path in the database
            $doc->path = $filePath;
        }

        $doc->company_id = $request['company'];
        // $doc->path = $request['doc'];
        $doc->doc_name = $request['doc_name'];
        $doc->user_id = $userId;
        $doc->category = $request['doccat'];

        $doc->save();
        return $request;
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('documents::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('documents::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function get_companies()
    {
        $all_companies = Company::all();
        return $all_companies;
    }

    // public function get_company
    public function get_all_sales_officers()
    {
        $all_salesofficers = Sales_officer::all();
        return $all_salesofficers;
    }
}
