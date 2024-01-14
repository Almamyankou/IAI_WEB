<!DOCTYPE html>
<html>
<head>
    <title>Diagramme - Nombre de candidats par nationalité</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="diagramme-nationalite" width="800" height="400"></canvas>

    <script>
        var nationaliteLabels = <?php echo json_encode($nationalite_labels); ?>;
        var nationaliteData = <?php echo json_encode($nationalite_data); ?>;

        var ctx = document.getElementById('diagramme-nationalite').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: nationaliteLabels,
                datasets: [{
                    label: 'Nombre de candidats par nationalité',
                    data: nationaliteData,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
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
    </script>
</body>
</html>
