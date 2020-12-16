<?php

// Fetch about me
function presentation () {

    global $db;

    $sql = "SELECT * FROM USER";

    $results = $db->query($sql);

    $abouts = $results->fetchAll(PDO::FETCH_OBJ);

    return $abouts;
}

// Fetch portfolios
function portfolios () {

    global $db;

    $sql = "SELECT DISTINCT * FROM PORTFOLIO INNER JOIN PORTFOLIO_TAGS ON PORTFOLIO_ID = PORTFOLIO.ID";

    $results = $db->query($sql);

    $portfolios = $results->fetchAll(PDO::FETCH_OBJ);

    return $portfolios;
}

// Fetch experiences
function experiences () {

    global $db;

    $sql = "SELECT * FROM EXPERIENCES";

    $results = $db->query($sql);

    $experiences = $results->fetchAll(PDO::FETCH_OBJ);

    return $experiences;
}
