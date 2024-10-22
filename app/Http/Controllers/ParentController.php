<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Parents;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class parentController extends Controller
{
    /** index page parent list */
    public function parent()
    {
        $parentList = parent::all();
        return view('parent.parent',compact('parentList'));
    }

    /** index page parent grid */
    public function parentGrid()
    {
        $parentList = parent::all();
        return view('parent.parent-grid',compact('parentList'));
    }

    /** parent add page */
    public function parentAdd()
    {
        return view('parent.add-parent');
    }
    
    /** parent save record */
    public function parentSave(Request $request)
    {
        $request->validate([
            'first_name'    => 'required|string',
            'last_name'     => 'required|string',
            'roll'          => 'required|string',
            'email'         => 'required|email',
            'class'         => 'required|string',
            'section'       => 'required|string',
            'admission_id'  => 'required|string',
            'phone_number'  => 'required',
            'upload'        => 'required|image',
        ]);
        $table->id();
        $table->string('parent_id')->nullable();
        $table->string('first_name')->nullable();
        $table->string('last_name')->nullable();
        $table->string('roll')->nullable();
        $table->string('email')->nullable();
        $table->string('student_id')->nullable();
        $table->string('section')->nullable();
        $table->string('phone_number')->nullable();
        DB::beginTransaction();
        try {
           
            $upload_file = rand() . '.' . $request->upload->extension();
            $request->upload->move(storage_path('app/public/parent-photos/'), $upload_file);
            if(!empty($request->upload)) {
                $parent = new parent;
                $parent->first_name   = $request->first_name;
                $parent->last_name    = $request->last_name;
                $parent->gender       = $request->gender;
                $parent->date_of_birth= $request->date_of_birth;
                $parent->roll         = $request->roll;
                $parent->blood_group  = $request->blood_group;
                $parent->religion     = $request->religion;
                $parent->email        = $request->email;
                $parent->class        = $request->class;
                $parent->section      = $request->section;
                $parent->admission_id = $request->admission_id;
                $parent->phone_number = $request->phone_number;
                $parent->upload = $upload_file;
                $parent->save();

                Toastr::success('Has been add successfully :)','Success');
                DB::commit();
            }

            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, Add new parent  :)','Error');
            return redirect()->back();
        }
    }

    /** view for edit parent */
    public function parentEdit($id)
    {
        $parentEdit = parent::where('id',$id)->first();
        return view('parent.edit-parent',compact('parentEdit'));
    }

    /** update record */
    public function parentUpdate(Request $request)
    {
        DB::beginTransaction();
        try {

            if (!empty($request->upload)) {
                unlink(storage_path('app/public/parent-photos/'.$request->image_hidden));
                $upload_file = rand() . '.' . $request->upload->extension();
                $request->upload->move(storage_path('app/public/parent-photos/'), $upload_file);
            } else {
                $upload_file = $request->image_hidden;
            }
           
            $updateRecord = [
                'upload' => $upload_file,
            ];
            parent::where('id',$request->id)->update($updateRecord);
            
            Toastr::success('Has been update successfully :)','Success');
            DB::commit();
            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, update parent  :)','Error');
            return redirect()->back();
        }
    }

    /** parent delete */
    public function parentDelete(Request $request)
    {
        DB::beginTransaction();
        try {
           
            if (!empty($request->id)) {
                parent::destroy($request->id);
                unlink(storage_path('app/public/parent-photos/'.$request->avatar));
                DB::commit();
                Toastr::success('parent deleted successfully :)','Success');
                return redirect()->back();
            }
    
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('parent deleted fail :)','Error');
            return redirect()->back();
        }
    }

    /** parent profile page */
    public function parentProfile($id)
    {
        $parentProfile = parent::where('id',$id)->first();
        return view('parent.parent-profile',compact('parentProfile'));
    }
}
