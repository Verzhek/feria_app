@extends("layouts.layout")
@section('title')
Users List
@endsection
@section('content')

    @if (count($users)>0)
    <section>
            <article id="foreach">
                <table class="min-w-full divide-y divide-black-200">
                    <thead class="bg-gray-500" >
                        <tr>
                            <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Nombre usuario</th>
                            <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Codigo feria</th>
                            <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Fehca visita</th>
                            <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Nombre Stand</th>
                            <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Borrar</th>
                        </tr>
                    </thead>
                    <tbody  class="bg-gray-100 divide-y divide-x divide-gray-700">
                @foreach ($users as $user)
                @if (count($user->visits)<1)
                <td class="text-center ">
                    {{$user->id}}
                </td>
                <td class="text-center">
                    {{$user->name}}
                </td>
                <td class="text-center">
                    {{$user->email}}
                </td>
                <td class="text-center">
                    {{$user->codigo_feria}}
                </td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                    <td class="text-center">
                        <form method="POST" action="./users/delete/{{$user->id}}">
                            @method('DELETE')
                            @csrf
                            <input type="submit"  class="inline-flex text-center py-2 px-4 border
                            border-transparent shadow-sm text-sm font-medium
                            rounded-md text-white bg-gray-800 hover:bg-gray-900
                            focus:outline-none focus:ring-2 focus:ring-offset-2
                            focus:ring-indigo-500 " value="borrar">
                        </form>
                    </td>
                @else
                @for ($i = 0; $i < count($user->visits); $i++)
                    <tr>
                        <td class="text-center ">
                            {{$user->id}}
                        </td>
                        <td class="text-center">
                            {{$user->name}}
                        </td>
                        <td class="text-center">
                            {{$user->email}}
                        </td>
                        <td class="text-center">
                            {{$user->codigo_feria}}
                        </td>
                        <td class="text-center">
                            {{$user->visits[$i]->visit_time}}
                        </td>
                        <td class="text-center 	object-fit: contain;">
                            @for ($l = 0; $l < count($user->stands); $l++)
                                    @if($user->stands[$l]->id==$user->visits[$i]->stand_id)
                                    {{$user->stands[$l]->nombre.","}}
                                    @endif
                            @endfor

                        </td>
                        <td class="text-center">
                            <form method="POST" action="./users/delete/{{$user->id}}">
                                @method('DELETE')
                                @csrf
                                <input type="submit"  class="inline-flex text-center py-2 px-4 border
                                border-transparent shadow-sm text-sm font-medium
                                rounded-md text-white bg-gray-800 hover:bg-gray-900
                                focus:outline-none focus:ring-2 focus:ring-offset-2
                                focus:ring-indigo-500 " value="borrar">
                            </form>
                        </td>
                    </tr>
                    @endfor
                    @endif
                @endforeach
                </table>
            {{ $users->links() }}
            </article>
    </section>
    @endsection
@else
<h1 class="min-w-full bg-gray-800 text-center text-4xl">Seed the database</h1>
@endif

