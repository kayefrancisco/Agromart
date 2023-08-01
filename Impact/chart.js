const ctx = document.getElementById('barChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Rice', 'Corn', 'chicken', 'granger'],
      datasets: [{
        label: '# of production per year',
        data: [25, 30, 15, 30],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
          'rgb(255, 99, 132)',
          'rgba(75, 192, 192)',
          'rgba(153, 102, 255)',
          'rgba(201, 203, 207)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });