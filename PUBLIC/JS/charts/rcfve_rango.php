<script>
	
	// Build the chart
Highcharts.chart('rcf', {
  chart: {
    type: 'line'
  },
  title: {
    text: 'Recuperados, contagiados y fallecidos desde <?php echo $desde.' - Hasta'.' '.$hasta?>'
  },
  subtitle: {
    text: 'Observatorio Nacional de Ciencia y tecnología e Innovación'
  },
  xAxis: {
    categories: [<?php 
     for($i=0;$i<count($fecha);$i++):
    ?>
"<?php echo $fecha[$i] ?>",
    <?php               
      endfor ?>]
  },
  yAxis: {
    title: {
      text: 'Personas'
    }
  },
  plotOptions: {
    line: {
      dataLabels: {
        enabled: true
      },
      enableMouseTracking: false
    }
  },
  series: [{
    name: 'Recuperados',
    data: [<?php 
     for($i=0;$i<count($recuperados);$i++):
   
echo $recuperados[$i].',';
               
      endfor ?>]
  }, {
    name: 'Contagiados',
    data: [<?php 
     for($i=0;$i<count($contagiados);$i++):
   
echo $contagiados[$i].',';
               
      endfor ?>]
  },{
    name: 'Fallecidos',
    data: [<?php 
     for($i=0;$i<count($fallecidos);$i++):
   
echo $fallecidos[$i].',';
               
      endfor ?>]
  }]
});
// Build the chart
Highcharts.chart('mf', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Contagiados por sexo'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: false
      },
      showInLegend: true
    }
  },
  series: [{
    name: 'Contagiados',
    colorByPoint: true,
    data: [{
      name: 'Masculino',
      y: <?php echo $totalM ?>,
      sliced: true,
      selected: true
    }, {
      name: 'Femenino',
      y: <?php echo $totalF ?>
    }, ]
  }]
});



</script>




