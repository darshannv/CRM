<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CREATE PAGE') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="container">
        <div class="card-mt-3">
            <div class="card-body">
             <div class="px-8 py-2">
             <div class="mt-6">
             <h1>Create prospects</h1>
             </div>

             <div class="px-8 py-2">
             <div class="mb-4">
             <div class="dropdown">
  <button class="btn btn-outline-secondary dropdown-toggle float-right" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Actions
  </button>
  
  </div>
</div>
             </div>
             </div>
            </div>


<hr>
<div class="mt-6">
<div class="px-8 py-2">
    @if($errors->count())
     <div class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
     <ul>
     @foreach($errors->all() as $message)
           <li> {{ $message }} </li>
            @endforeach
            </ul>
        </div>
        </div>

       

    @endif
    
            <form action="{{ route('admin.prospects.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="px-8 py-2">
                <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="shadow appearance-none border rounded py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" placeholder="Enter your Name" />
                </div> <br>
                <br>
                <div class="form-group">
                <label for="">Email </label>
                <input type="email" class="shadow appearance-none border rounded py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" placeholder="Enter your Email" />
                </div><br><br>

                <div class="form-group">
                <label for="">Profile</label>
                <input type="file" class="shadow appearance-none border rounded py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="profile_image"/>
                </div><br><br>
                
                <button class="h-10 px-5 m-2 text-blue-100 transition-colors duration-150 bg-blue-600 rounded-lg focus:shadow-outline hover:bg-blue-700 float-right">Create Prospect</button><br>
            </div>
            
            </form>
           

        </div>
    </div>
</div>
    </div>
    </div>
</x-app-layout>