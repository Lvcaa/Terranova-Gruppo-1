document.addEventListener('DOMContentLoaded', function () {
  var ctx = document.getElementById('myChart').getContext('2d');

  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ['12 Jan \'24', '14 Jan \'24', '16 Jan \'24', '18 Jan \'24', '20 Jan \'24', '22 Jan \'24'],
          datasets: [{
              label: 'CO2 Emissions',
              data: [50, 75, 60, 80, 65, 90],
              fill: false,
              borderColor: 'rgb(75, 192, 192)',
              tension: 0.1
          }]
      },
      options: {
          scales: {
              y: {
                  title: {
                      display: true,
                      text: 'kg CO2/yr'
                  }
              }
          }
      }
  });
});
