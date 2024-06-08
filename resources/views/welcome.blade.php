    @extends('layouts.app')


    @section('content')
    <table>
        <tr>
            <th class="col-1"><input type="checkbox"></th>
            <th class="col-2">Nome da Tarefa</th>
            <th class="col-3">Status</th>
            <th class="col-4">Urgência</th>
            <th class="col-5">Categoria</th>
            <th class="col-6">Desenvolvedor</th>
            <th class="col-7">Data de Entrega</th>
            <th class="col-8"><button>Mais</button></th>


        </tr>
        <tr>
            <td class="col-1"><input type="checkbox"></td>
            <td class="col-2">Conteúdo 2</td>
            <td class="col-3">Conteúdo 3</td>
        </tr>
        <tr>
            <td class="col-1"><input type="checkbox"></td>
            <td class="col-2">Mais Conteúdo 2</td>
            <td class="col-3">Mais Conteúdo 3</td>
        </tr>
    </table>
    @endsection