<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;

class TestControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testModel = TestModel::get();
        echo $testModel->name;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //  echo "in store";
        for ($i = 0; $i < 10; $i++) {
            try {
                TestModel::create([
                    "name" => 'abc' . $i,
                    "email" => 'abc' . $i . '@abc.com',
                    "password" => 'abc' . $i
                ]);
            } catch (\Exception $e) {
            }
        }
        return "data stored successfully!";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "in show";
        $testModel = TestModel::find($id);
        echo $testModel;
    }
    public function showAll()
    {
        echo "inshowAll";
        $testModel = TestModel::get();
        echo $testModel;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, string $name)
    {
        $testModel = TestModel::find($id);
        $testModel::updateOrInsert(["id" => $testModel->id,  "email" => $testModel->email], ["name" => $name]);
        echo "user number" . $id . " updated successfully";
        echo TestModel::where("id", $id)->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TestModel::destroy($id);
        echo "user number" . $id . " deleted successfully";
    }
}
