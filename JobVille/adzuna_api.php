 <?php
$app_id = "87001303";
$app_key = "5875a072c9ab8073bf694b45b7d23620";

$page = max(1, min(intval($_GET['page'] ?? 1), 50));
$search = $_GET['search'] ?? ""; 

$url = "https://api.adzuna.com/v1/api/jobs/za/search/$page?app_id={$app_id}&app_key={$app_key}&results_per_page=15";


if (!empty($search)) {
    $url .= "&what=" . urlencode($search);
}


$response = file_get_contents($url);

if ($response !== false) {
    header('Content-Type: application/json');
    echo $response;
} else {
    http_response_code(500);
    echo json_encode(["error" => "Failed to fetch jobs"]);
}
?>
