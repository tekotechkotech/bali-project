<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Models\Employees;
use Illuminate\Http\Request;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

//import Facade "Validator"
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $employees = Employees::latest()->paginate(5);

        //return collection of posts as a resource
        return new EmployeeResource('success', 'List Data Posts', $employees);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //create post
        $employee = Employees::create([
            'fullname'      => $request->fullname,
            'email'         => $request->email,
            'mobilephone'   => $request->mobilephone,
            'date_of_birth' => $request->date_of_birth,
            'address'       => $request->address,
        ]);

        //return response
        return new EmployeeResource('success', 'Data Employee Berhasil Ditambahkan!', $employee);
    }

    /**
     * show
     *
     * @param  mixed $employee
     * @return void
     */
    public function show($id)
    {
        //find post by ID
        $employee = Employees::find($id);

        //return single post as a resource
        return new EmployeeResource('success', 'Detail Data Employee!', $employee);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $employee
     * @return void
     */
    public function update(Request $request, $id)
    {

        //find post by ID
        $employee = Employees::find($id);

        //update post without image
        $employee->update([
            'fullname'     => $request->fullname,
            'email'     => $request->email,
            'mobilephone'     => $request->mobilephone,
            'date_of_birth'     => $request->date_of_birth,
            'address'   => $request->address,
        ]);

        //return response
        return new EmployeeResource('success', 'Data Post Berhasil Diubah!', $employee);
    }

    /**
     * destroy
     *
     * @param  mixed $employee
     * @return void
     */
    public function destroy($id)
    {
        // dd($id);

        //find post by ID
        $employee = Employees::find($id);

        //delete post
        $employee->delete();

        //return response
        return new EmployeeResource('success', 'Data Employee Berhasil Dihapus!', null);
    }
}
