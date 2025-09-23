<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>Dashboard</h1>
  <div class="container">
    <canvas id="grafico"></canvas>
  </div>

  <div class="container">
    <canvas id="otro-lienzo"></canvas>
  </div>
  
</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.0/dist/chart.umd.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const lienzo = document.getElementById('lienzo');
  const otrolienzo = document.getElementById('otro-lienzo');
  
  const grafico1 = new Chart(lienzo, {
    
    type: 'bar',
    data: {
      labels: ['Rock', 'Baladas', 'Metal'],
      datasets: [

        {data: [15, 20, 4],label: 2024},
        {data: [50, 10, 3],label: 2025}
      ]
    }
  });



  const data =[
    {year:2009, total: 220},
    {year:2010, total: 420},
    {year:2011, total: 492},
    {year:2012, total: 470},
    {year:2013, total: 510},
    {year:2010, total: 420},
    {year:2011, total: 492},
    {year:2012, total: 470},
    {year:2013, total: 510}
  ]



  const grafico2 = new Chart(otrolienzo,{
    type:'line',
    data:{
      labels: data.map(row => row.year),
      datasets:[
        {
          data: data.map(row =>row.total),
          label: 'Egresados Ing. Software'
        }
      ]
    }

  })

})
</script>

</html>
