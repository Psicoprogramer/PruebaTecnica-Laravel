@extends('layouts.app')
@section('content')
    <form class="container-form_empleados" method="post" action="{{route('empleado.store')}}" enctype="multipart/form-data">
      @csrf
       @method('post') 
        <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">first name</label>
        <div class="flex">
            <input type="text" id="first_name" name="first_name"
            class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-300 text-sm p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Bonnie">
        </div>
        <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">frist last name</label>
        <div class="flex">
            <input type="text" id="website-admin" name='first_lastName'
                class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Green">
        </div>
        <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">second last name</label>
        <div class="flex">
            <input type="text" id="website-admin" name="second_lastName"
                class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Diez">
        </div>
        <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <div class="flex">
            <input type="email" id="website-admin" name="email"
                class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Bonniegreen@gmail.com">
        </div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Photo</label>
        <input
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            aria-describedby="user_avatar_help" id="photo" type="file" name="photo">
            <button class="button-default" type="submit">Guardar</button>
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="photo">A profile picture is useful to
            confirm your are logged into your account</div>
        </div>
    </form>
@endsection
