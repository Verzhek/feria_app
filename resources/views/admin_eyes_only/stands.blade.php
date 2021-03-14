@extends("layouts.layout")
@section('title')
Stands List
@endsection
@section('content')

    @if (count($stands)>0)
    <section>
            <article id="foreach">
                <table class="min-w-full divide-y divide-black-200">
                    <thead>
                    <tr class="bg-gray-500">
                        <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Nombre Stand</th>
                        <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">ID Stand</th>
                        <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Nombre Usuario</th>
                        <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Fecha y hora de visita</th>
                        <th scope="col" class="px-8 py-6 text-left text-xs text-center font-mono text-gray-50 uppercase tracking-wider">Borrar</th>
                    </tr>
                    </thead>
                    <tbody class="bg-gray-100 divide-y divide-x divide-gray-700">

                      @foreach ($stands as $stand)
                      @for ($i = 0; $i < count($stand->users); $i++)
                      <tr>
                        <td class="text-center">{!!$stand->nombre!!}</td><td class="text-center">{!!$stand->id!!}</td>
                        <td class="text-center">{!!$stand->users[$i]->name!!}</td><td class="text-center">{!!$stand->visits[$i]->visit_time!!}</td>
                        <td class="text-center">
                        <form method="POST" action="./stands/delete/{{$stand->id}}">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="borrar"
                            class="inline-flex text-center py-2 px-4 border
                            border-transparent shadow-sm text-sm font-medium
                            rounded-md text-white bg-gray-800 hover:bg-gray-900
                            focus:outline-none focus:ring-2 focus:ring-offset-2
                            focus:ring-indigo-500 ">
                        </form>
                        </td>
                </tr>
                @endfor
                @endforeach
                    </tbody>
                 <tfoot></tfoot>
                </table>
                {{$stands->links()}}
            </article>
    </section>

    <div class="pagination"></div>
    @else
        <h1>Seed the database</h1>
    @endif
    @endsection


