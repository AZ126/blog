
@extends('components.header')

<h1>Add Mambers</h1>

<div class="flash-message">
    @if(Session('alert-success'))

    <p class="alert alert-success">Saved successfully! 
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
    @endif
</div>

<form action="addMamber" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Name" required /> <br /><br />
    <input type="email" name="email" placeholder="Enter Email" required /> <br /><br />
    <input type="text" name="address" placeholder="Enter address" required /> <br /><br />
    <button>Add Mamber</button>
</form>
