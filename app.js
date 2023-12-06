function openSidebar() {
    document.getElementById("sidebar").style.left = "0";
}

function closeSidebar() {
    document.getElementById("sidebar").style.left = "-100%";
}
//Skrip untuk Diagram Line
var ctx = document.getElementById('myLineChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
        datasets: [{
            label: 'Data 1',
            data: [5, 15, 10, 25, 20, 30],
            borderColor: 'rgba(122, 190, 131, 1)',
            fill: false
        },
        {
            label: 'Data 2',
            data: [10, 20, 15, 30, 25, 35],
            borderColor: 'rgba(54, 162, 235, 1)',
            fill: false
        },
        {
            label: 'Data 3',
            data: [15, 25, 20, 35, 30, 40],
            borderColor: 'rgba(169, 167, 181, 1)',
            fill: false
        }
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

//Skrip untuk Diagram Pie
var ctx = document.getElementById('myPieChart').getContext('2d');
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Loss', 'Deal', 'Pending'],
        datasets: [{
            data: [30, 40, 30],
            backgroundColor: [
                'rgba(255, 86, 51, 255)',
                'rgba(52, 255, 86, 255)',
                'rgba(86, 51, 255, 255)',
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: true,
                position: 'right',
                onClick: function (e) {
                    e.stopPropagation();
                }
            },
            datalabels: {
                color: '#fff',
                formatter: (value, ctx) => {
                    let label = ctx.chart.data.labels[ctx.dataIndex];
                    return label + ": " + value + "%";
                }
            }
        }
    }
});
$(document).ready(function () {
    // Add an event listener to the category filter
    $('#categoryFilter').change(function () {
        filterTable();
    });

    // Add an event listener to the search input
    $('#search').keyup(function () {
        filterTable();
    });

    function filterTable() {
        var categoryFilter = $('#categoryFilter').val().toLowerCase();
        var searchTerm = $('#search').val().toLowerCase();

        // Loop through each row in the table
        $('tbody tr').each(function () {
            var rowCategory = $(this).find('td:eq(2)').text().toLowerCase(); // Assuming category is in the third column

            // Check if the row matches the filter and search criteria
            if ((categoryFilter === '' || rowCategory === categoryFilter) &&
                ($(this).text().toLowerCase().indexOf(searchTerm) !== -1)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
});
$(document).ready(function () {
    // Add an event listener to the category filter
    $('#categoryFilter').change(function () {
        filterTable();
    });

    // Add an event listener to the search input
    $('#search').keyup(function () {
        filterTable();
    });

    function filterTable() {
        var categoryFilter = $('#categoryFilter').val().toLowerCase();
        var searchTerm = $('#search').val().toLowerCase();

        // Loop through each row in the table
        $('tbody tr').each(function () {
            var rowCategory = $(this).find('td:eq(2)').text().toLowerCase(); // Assuming category is in the third column

            // Check if the row matches the filter and search criteria
            if ((categoryFilter === '' || rowCategory === categoryFilter) &&
                ($(this).text().toLowerCase().indexOf(searchTerm) !== -1)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
});