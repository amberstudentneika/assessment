<?php

namespace App\Http\Livewire;
use App\Models\course;
use App\Models\User;
use Livewire\Component;

class Admin extends Component
{

    public $courseName;
    public $editMode=false;
    public $editID;
    public $fName;
    public $lName;
    public $email;
    public $password;
    public $name;

    public function clearcourseField(){
        $this->name="";
    }

    public function addCourse(){
        course::create([
            'name' => $this->courseName,
            ]);
        $this->clearcourseField();

    }

    public function state($id){
        $this->editMode=true;
        $this->editID=$id;
        $obj= course::find($id);
        $this->courseName = $obj->courseName ;
    }

    public function editCourse(){
        $id=$this->editID;
        course::find($id)->update([
            'name' => $this->courseName,
        ]);
        $this->editMode=false;
        $this->clearField();
    }

    //ADDING A STUDENT

    private function resetField(){
        $this->fName = '';
        $this->lName = '';
        $this->email = '';
        $this->password = '';
    }

    public function addStudent()
    {
        $validate = $this->validate([
            'fName' => 'required',
            'lName' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $this->password = Hash::make($this->password);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => 1,
            'password' => $this->password
        ]);
        $this->resetField();
    }

    public function state($id){
        $this->editMode=true;
        $this->editID=$id;
        $obj= User::find($id);
        $this->courseName = $obj->courseName ;
    }

    public function editUser(){
        $id=$this->editID;
        User::find($id)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->editMode=false;
        $this->clearField();
    }

    //AddEdit Teacher


    public function addTeacher()
    {
        $validate = $this->validate([
            'fName' => 'required',
            'lName' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $this->password = Hash::make($this->password);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => 2,
            'password' => $this->password
        ]);
        $this->resetField();
    }

    public function state($id){
        $this->editMode=true;
        $this->editID=$id;
        $obj= User::find($id);
        $this->courseName = $obj->courseName ;
    }

    public function editTeacher(){
        $id=$this->editID;
        User::find($id)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->editMode=false;
        $this->clearField();
    }
    public function render()
    {
        return view('livewire.admin');
    }
}
