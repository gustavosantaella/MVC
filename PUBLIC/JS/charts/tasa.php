
<script>

  Highcharts.chart('tasa', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Tasa de afectados y fallecidos en latino américa el <?= $fecha?>'
    },
    subtitle: {
        text: 'Observatorio Nacional de Ciencia y Tecnología e innovación'
    },
    xAxis: {
        categories: [
            <?php for($i=0;$i<count($paises);$i++):?>"<?php echo $paises[$i] ?>",<?php endfor ?>
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
        name: 'Afectados',
        data: [<?php for($i=0;$i<count($afectados);$i++):?><?php echo $afectados[$i] ?>,<?php endfor ?>]

    },  {
        name: 'Fallecidos',
        data: [<?php for($i=0;$i<count($fallecidos);$i++):?><?php echo $fallecidos[$i] ?>,<?php endfor ?>]

    }]
});
          
</script>

