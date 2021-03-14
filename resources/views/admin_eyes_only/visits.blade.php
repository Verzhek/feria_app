@extends("layouts.layout")
@section('title')
Visits List
@endsection
@section('content')

    @if (count($visits)>0)
    <section>
            <article>
                <table class="min-w-full divide-y divide-black-200">
                <thead class="bg-gray-500">
                <tr>
                    <td scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Nombre Stand</td>
                    <td scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Nombre Usuario</td>
                    <td scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Email Usuario</td>
                    <td scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Fecha de Visita</td>
                    <td scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Borrar</td>
                </tr>
                </thead>
                <tbody  class="bg-gray-100 divide-y divide-x divide-gray-700 text-center">
                @foreach ($visits as $visit)
                <tr>
                    <td>{{$visit->stand->nombre}}</td>
                    <td>{{$visit->user->name}}</td>
                    <td>{{$visit->user->email}}</td>
                    <td>{{$visit->visit_time}}</td>
                    <td>
                        <form method="POST" action="./visits/delete/{{$visit->stand_id}}={{$visit->user_id}}={{$visit->visit_time}}">
                            @method('DELETE')
                            @csrf
                            <input type="submit"
                            class="inline-flex text-center py-2 px-4 border
                                border-transparent shadow-sm text-sm font-medium
                                rounded-md text-white bg-gray-800 hover:bg-gray-900
                                focus:outline-none focus:ring-2 focus:ring-offset-2
                                focus:ring-indigo-500 "
                            value="borrar">
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                {{ $visits->links() }}
            </article>
    </section>
    @else
        <h1>Seed the database</h1>
    @endif
    @endsection


