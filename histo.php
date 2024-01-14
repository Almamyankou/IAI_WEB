<!DOCTYPE html>
<html>
<head>
    <title>Histogramme des utilisateurs par nationalité</title>
    <!-- Inclusion de la librairie Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="histogramme" width="800" height="400"></canvas>

    <script>
    // Récupération des données depuis PHP (à remplacer par votre propre logique pour récupérer les données)
    var labels = <?php echo json_encode($labels); ?>;
    var data = <?php echo json_encode($data); ?>;

    // Création de l'objet Chart pour l'histogramme
    var ctx = document.getElementById('histogramme').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Utilisateurs par nationalité',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 0.5)', // Couleur de remplissage des barres
                borderColor: 'rgba(54, 162, 235, 1)', // Couleur de contour des barres
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // Commencer l'axe y à 0
                }
            }
        }
    });
    </script>
</body>
</html>
