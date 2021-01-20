
<script>

  Highcharts.chart('relaciones', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Relacion de recuperados, contagiados y fallecidos en los países seleccionados el <?= $fecha?>'
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

