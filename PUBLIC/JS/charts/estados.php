 <script>


  Highcharts.chart('estados', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Contagiados por estados el <?php echo $fecha ?>'
  },
  subtitle: {
    text: 'Observatorio Nacional de Ciencia y Tecnología e innovación'
  },
  xAxis: {
    categories: [
      <?php for($i=0;$i<count($estados);$i++):?>"<?php echo $estados[$i] ?>",<?php endfor ?>
    ],
    crosshair: true
  },
  
  series: [{
    name: 'Contagiados',
    data: [<?php for($i=0;$i<count($contagiados);$i++):?><?php echo $contagiados[$i] ?>,<?php endfor ?>]

  }]
});


 

  </script> 

