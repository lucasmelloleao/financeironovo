



        <table border="1" style="width:100%;">
                <thead>
                        <tr>
                                <th>Nome</th>
                                <th>Profissão</th>
                                <th>Estado</th>
                        </tr>
                </head>
                
                <tbody>
                       @foreach($arquivoArr as $linha)
                                <tr>
                                      @foreach($linha as $campo)
                                                <td>{{$campo}} </td>
@endforeach
                                </tr>
@endforeach
                </tbody>
        </table>


