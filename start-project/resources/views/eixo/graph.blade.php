@extends('templates.main', ['title' => 'Gráfico de Eixos', 'header' => 'Gráfico de Eixos'])
@section('content')
    <div class="row">
        <div class="col text-center" id="barra" style="width: 420px; height: 280px;"></div>
        <div class="col text-center" id="pizza" style="width: 420px; height: 280px;"></div>
    </div>
   
    <div class="row mt-2">
        <div class="col text-center" id="coluna" style="width: 420px; height: 280px;"></div>
        <div class="col text-center" id="linha" style="width: 420px; height: 280px;"></div>
    </div>

    <script type="text/javascript">
        var data_graph = {!! $data !!}; 
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            let data = google.visualization.arrayToDataTable(data_graph);

            let optionsBarra = {
                title: 'Quantidade de Eixos, Cursos e Disciplinas',
                colors: ['#198754'],
                legend: 'none',
                hAxis: {
                    title: 'Quantidade',
                    titleTextStyle: {
                        fontSize: 12,
                        bold: true,
                    }
                },
                vAxis: {
                },
            };
            let chartBarra = new google.visualization.BarChart(document.getElementById('barra'));
            chartBarra.draw(data, optionsBarra);

            let optionsPizza = {
                title: 'Distribuição de Eixos, Cursos e Disciplinas',
                is3D: true,
            };
            let chartPizza = new google.visualization.PieChart(document.getElementById('pizza'));
            chartPizza.draw(data, optionsPizza);

            
        }
    </script>
@endsection
