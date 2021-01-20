<script>
  Highcharts.chart('personas', {
  chart: {
    type: 'bar'
  },
  title: {
    text: 'Personas contagiadas el <?php echo $fecha ?>'
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
  series: [ <?php for($i=0;$i<count($centros)||$i<count($personas);$i++){

?>

{
    name: '<?php echo $centros[$i] ?>',
    data: [<?php echo $personas[$i] ?>]
  },

<?php 


  } ?>]
});
</script>