<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tools;
use App\Categories;
use App\Department;
use App\Bo;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){
        $departments = Department::all();
        $tools = Tools::all();
        $users = User::all();
        $categories = Categories::all();
        $bos = Bo::all();
               
        return view('admin.administration', compact('users','tools','categories','departments','bos'));
    }


    public function destroyUser($id){
        
        $user = User::findOrFail($id);

        $user->delete();
        
        return back()->with('success','utilisateur supprimé !');
    }

    public function destroyTool($id){
        
        
        $tool = Tools::findOrFail($id);
        // example:
              

        $tool->delete();
     
        return redirect()->back();
    }

    public function storeTool(Request $request )
    {
        $tool = new Tools();

        $tool->name = $request->name;
        $tool->category_id = $request->category;
        $tool->description = $request->description;
        $tool->url = $request->url;
        $tool->save();
        return back()->with('sucess','outil ajouté !');
    }

    public function editTool(Request $request){
        $tool = Tools::findOrFail($request->toolID);
        $tool->name = $request->name;
        $tool->url = $request->url;
        $tool->description = $request->description;
        $tool->category_id = $request->category;
        $tool->save();

        return back()->with('sucess','bo ajouté !');
    }
    
    
    public function destroyCategory($id){
        
        
        $category = Categories::findOrFail($id);
        
              

        $category->delete();
     
        return redirect()->back();
    }


    public function editCategory(Request $request){
        $category = Categories::findOrFail($request->editCategoryID);
        $category->name  = $request->editCategoryName;
        $category->save();
        return back()->with('sucess','bo ajouté !');
        
    }

    public function storeBo(Request $request){

        $bo = new BO();

        //dd($request);
        $bo->ae_name = $request->{'ae-name'};
        $bo->ae_code = $request->{'ae-code'};
        $bo->bo_name = $request->{'bo-name'};
        $bo->bo_code = $request->{'bo-code'};
        $bo->color = $request->{'color-code'};
        $bo->zex = $request->zex;
        $bo->email = $request->{'bo-email'};
        $bo->department_id = $request->department;

        $bo->save();
        return back()->with('sucess','bo ajouté !');
    }

    public function editBo(Request $request){
      //  dd($request);

        $bo = BO::findOrFail($request->editBoID);

        $bo->bo_name = $request->editBoName;
        $bo->bo_code = $request->editBoCode;
        $bo->ae_name = $request->editBoAeName;
        $bo->ae_code = $request->editBoAeCode;
        $bo->color = $request->editBoColorCode;
        $bo->zex = $request->editBoZex;
        $bo->email = $request->editBoEmail;
        $bo->department_id = $request->editBoDepartment;

        $bo->save();

        return back()->with('sucess','Bo modifié !');
    }

    public function destroyBo($id){

        $bo = BO::findOrFail($id);

        $bo->delete();
     
        return redirect()->back();
    }

    public function storeCategory(Request $request){
        $category = new Categories();

        $category->name = $request->{'category-name'};
        $category->save();
        return back()->with('sucess','categorie ajoutée !');
    }


    public function storeDepartment(Request $request){
        $department = new Department();
        
        $department->department_name    = $request->departmentName;
        $department->department_code    = $request->departmentCode;
        $department->centre_code = $request->codeCenter;

        $department->save();
        return back()->with('sucess','departement ajouté !');
    }

    public function destroyDepartment($id){
        $department = Department::findOrFail($id);
        
              

        $department->delete();
     
        return redirect()->back();
    }

    public function editDepartment(Request $request){

        $department = Department::findOrFail($request->editDepartmentID);
     //   dd($request);
        $department->department_name = $request->editDepartmentName;
        $department->department_code = $request->editDepartmentCode;
        $department->centre_code = $request->editDepartmentCodeCenter;

        $department->save();
        return back()->with('sucess','departement ajouté !');
    }
}
