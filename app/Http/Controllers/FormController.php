<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormModel;

class FormController extends Controller
{
    public function index()
    {
        $all_data = FormModel::all();
        return view('formData.index', ['all_data' => $all_data]);
    }

    public function input()
    {
        return view('formData.input');
    }

    public function save(Request $req)
    {
        // dd($req);
        $data = $req->validate([
            'name' => 'required',
            'gender' => 'required',
            'contact' => 'required',
            'message' => 'required',
            'email' => 'nullable',
            'location' => 'nullable',
        ]);

        $newForm = FormModel::create($data);
        return redirect(route('form.index'));
    }

    public function edit(FormModel $form)
    {
        // dd($form);
        return view('formData.edit', ['form' => $form]);
    }

    public function update(FormModel $form, Request $req)
    {
        $data = $req->validate([
            'name' => 'required',
            'gender' => 'required',
            'contact' => 'required',
            'message' => 'required',
            'email' => 'required',
            'location' => 'nullable',
        ]);

        $form->update($data);
        return redirect()->route('form.index');
    }

    public function delete(FormModel $form)
    {
        $form->delete();
        return redirect()->route('form.index');
    }
}
