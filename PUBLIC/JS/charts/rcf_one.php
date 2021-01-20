<script>
	
	// Build the chart
Highcharts.chart('rcf', {
  chart: {
    type: 'bar'
  },
  title: {
    text: 'Recuperados, contagiados y fallecidos el <?php echo $fecha ?>'
  },
  subtitle: {
    text: 'Observatorio Nacional de Ciencia y tecnología e Innovación'
  },
  xAxis: {
    categories: [<?php ?> "<?php echo $fecha ?>" <?php ?>]
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
    data: [<?php echo $recuperados ?>]
  }, {
    name: 'Contagiados',
    data: [<?php echo $contagiados ?>]
  },{
    name: 'Fallecidos',
    data: [<?php echo $fallecidos ?>]
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
    text: 'Contagiados por sexo el <?php echo $fecha ?>'
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
      y: <?php echo $masculino ?>,
      sliced: true,
      selected: true
    }, {
      name: 'Femenino',
      y: <?php echo $femenino ?>
    }, ]
  }]
});



</script>




