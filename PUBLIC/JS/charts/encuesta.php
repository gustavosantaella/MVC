<script>
  Highcharts.chart('encuesta', {
  chart: {
    type: 'bar'
  },
  title: {
    text: 'Encuesta patria <?php echo $fecha ?>'
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
  series: [ <?php for($i=0;$i<count($contagiados)&& $i<count($encuesta);$i++){

?>

{
    name: '<?php echo $encuesta[$i] ?>',
    data: [<?php echo $contagiados[$i] ?>]
  },

<?php 


  } ?>]
});
</script>