var canvas = document.getElementById("myChart");
var ctx = canvas.getContext("2d");
var myChart;

function createChart() {
  myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: ["12 Jan '24", "14 Jan '24", "16 Jan '24", "18 Jan '24", "20 Jan '24", "22 Jan '24", "24 Jan '24", "26 Jan '24", "28 Jan '24", "30 Jan '24", "01 Feb '24", "03 Feb '24"],
      datasets: [
        {
          label: "CO2 Emissions",
          data: [50, 75, 60, 80, 65, 90, 70, 85, 55, 75, 60, 80],
          fill: false,
          borderColor: "rgb(75, 192, 192)",
          tension: 0.2,
          borderWidth: 2,
          pointRadius: 4,
        },
      ],
    },
    options: {
      responsive: false,
      maintainAspectRatio: true,
      scales: {
        y: {
          title: {
            display: true,
            text: "kg CO2/yr",
          },
        },
      },
    },
  });
}

window.addEventListener("resize", function () {
  if (myChart) {
    myChart.destroy();
  }
  createChart();
});

createChart();
