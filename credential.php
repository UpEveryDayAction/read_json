$file = "data.json";
$json = file_get_contents($file);
$user = json_decode($config_json, true);
$user_data = array(
    'id' => $user['name'],
    'pw' => $user['pw']
)

<?php echo $user_data['id'] ?>