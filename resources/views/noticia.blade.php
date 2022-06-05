<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Descrição </th>
        </tr>
    </thead>
</table>

<tbody>
    @foreach($noticias as  $noticia)
        <tr>
            <th>{{$noticia->titulo}}</th>
            <th>{{$noticia->descricao}}</th>
        </tr>
    @endforeach
</tbody>