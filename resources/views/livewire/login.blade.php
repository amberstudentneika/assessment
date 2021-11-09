@extends('layouts.app')
<div>
    <div class="flex items-center min-h-screen justify-center bg-blue-300">
        <div class="px-8 py-6 mt-4 text-left rounded-md bg-white shadow-lg">
            @if(session('message'))
                <span class="bg-red-200 text-red-900">
                 {{session('message')}}
             </span>
            @endif
            <h3 class="text-2xl font-bold text-center">Login</h3>
            <div class="mt-4 space-y-4">
                <div >
                    <label>Enter Email</label><br>
                    <input type="text" wire:model="lvEmail" placeholder="Email@gmail.com" autofocus>
                </div>
               <br/> <label>Enter Password</label><br/>
                <input type="password" wire:model="lvPassword" placeholder="">
                <div class="flex items-baseline justify-between">
                    <button wire:click="Login()" class="px-6 py-2 mt-4 text-white bg-green-600 rounded-lg hover:bg-green-800">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>
