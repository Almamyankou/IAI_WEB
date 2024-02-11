<?php
// Fonction pour récupérer les informations du concours depuis la base de données
function getConcoursInfo($conn) {
    $sql = "SELECT * FROM infos_concours ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}

function updateConcoursDates($conn, $applicationDeadline, $competitionDate) {
    $sql = "UPDATE infos_concours SET date_limite_depot=?, date_concours=? ORDER BY id DESC LIMIT 1";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $applicationDeadline, $competitionDate);

    if ($stmt->execute()) {
        $stmt->close();
        return "Mise à jour réussie.";
    } else {
        $stmt->close();
        return "Erreur lors de la mise à jour : " . $conn->error;
    }
}

// Fonction pour récupérer le nombre total de candidats inscrits

function getTotalCandidates($conn) {
    $sql = "SELECT COUNT(*) AS total FROM candidats";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return "Erreur lors de la requête : " . $conn->error;
    }
}


// Fonction pour récupérer le nombre de candidats inscrits par nationalité
function getCandidatesByNationalite($conn, $nationalite) {
    $sql = "SELECT COUNT(*) as total FROM candidats WHERE nationalite = '$nationalite'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return 0;
    }
}

function getCandidatesBySeries($conn, $serie) {
    if ($serie !== null) {
        $sql = "SELECT COUNT(*) as total FROM candidats WHERE serie_bac = '$serie'";
    } else {
        $sql = "SELECT COUNT(*) as total FROM candidats";
    }
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return 0;
    }
}



function getCandidatesBySexe($conn) {
    $sql = "SELECT sexe, COUNT(*) as total FROM candidats GROUP BY sexe";
    $result = $conn->query($sql);

    $candidatesBySexe = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $candidatesBySexe[$row['sexe']] = $row['total'];
        }
    }

    return $candidatesBySexe;
}

function getCandidatesList($conn) {
    $sql = "SELECT nom, prenom FROM candidats";
    $result = $conn->query($sql);

    $candidates = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $candidates[] = $row;
        }
    }

    return $candidates;
}

?>