<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PROSPECT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <!-- <div class="card-mt-3">
    <div class="card-body">
<div class="d-flex">  -->
                    <!-- <h1>Prospects <small class="text-muted">Show all Prospects</small></h1> 
<div class="ml-auto"> -->
                    <!-- <div class="dropdown">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Actions
  </button> -->
                    <!-- < class="dropdown-menu drpdown-menu-right" aria-labelledby="dropdownMenuButton">
    <!-- <li><a class="dropdown-item" href="{{ route('admin.prospects.create') }}">View Actions</a></li> -->
                    <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    <livewire:prospects />
                    <!-- </div>
</div>
</div> -->
                    <div class="px-8 py-2">
                        @if(session('message'))
                        <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>


                    <div class="mt-6">

                        @if($prospects->count())

                        {{ $prospects->links() }}

                        @foreach($prospects as $prospect)
                        @include('admin.prospects.partials.prospect-card', ['prospect' => $prospect])
                        @endforeach
                        @endif

                        <!-- @if($prospects->count())
    <table class="table-auto w-full">
        <thead>    
            <tr class="bg-blue-100">
            <th class="px-4 py-2">
            <div class="flex item-center">Name</div> </th>
            <th class="px-4 py-2"><div class="flex item-center">Email</div></th>
            <th class="px-4 py-2"><div class="flex item-center">Created At</div></th>
            <th class="px-4 py-2"><div class="flex item-center">Actions</div</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prospects as $prospect) 
        <tr class="bg-green-100">
            <td class="border px-4 py-2">{{ $prospect->name }}</td>
            <td class="border px-4 py-2">{{ $prospect->email }}</td>
            <td class="border px-4 py-2">{{ $prospect->pretty_created }}</td>
            <td class="border px-4 py-2"></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endif -->


                    </div>
                    <!-- <!-- </div>

</div> -->


                    <div class="mt-4">

                        {{  $prospects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>