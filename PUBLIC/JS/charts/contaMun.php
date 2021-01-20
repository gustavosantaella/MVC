
<script>

  Highcharts.chart('mun', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Recuperados, contagiados, fallecidos en <?php echo $estado ?> <br>el <?php echo $fecha ?>'
    },
    subtitle: {
        text: 'Observatorio Nacional de Ciencia y Tecnología e innovación'
    },
    xAxis: {
        categories: [
            <?php for($i=0;$i<count($municipio);$i++):?>"<?php echo $municipio[$i] ?>",<?php endfor ?>
        ],
        crosshair: true
    },
 
  
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Recuperados',
        data: [<?php for($i=0;$i<count($recuperados);$i++):?><?php echo $recuperados[$i] ?>,<?php endfor ?>]

    }, {
        name: 'Contagiados',
        data: [<?php for($i=0;$i<count($contagiados);$i++):?><?php echo $contagiados[$i] ?>,<?php endfor ?>]

    }, {
        name: 'Fallecidos',
        data: [<?php for($i=0;$i<count($fallecidos);$i++):?><?php echo $fallecidos[$i] ?>,<?php endfor ?>]

    }]
});
          
</script>

