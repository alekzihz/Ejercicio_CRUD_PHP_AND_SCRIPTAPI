<?php
$limit=75;
$i=1;

//headers for browser navigator.
$context = stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);

$filename='listaImagenes.csv';
$file = fopen($filename,'a');
$columnNames = ['id','author','width','height','url','download_url'];
fputcsv($file,$columnNames,";");

//we call the recursive function
writeRecursive($i,$limit,$context,$file,$i);

/**
 * Recursive function that writes the data in the csv file
 * @param int $index
 * @param int $limit
 * @param resource $context
 * @param resource $file
 */
function writeRecursive($index, $limit,$context,$file,$counter){
    $response = file_get_contents('https://picsum.photos/v2/list?page=2&limit='.$index,false,$context);
    if ($response === false) {
        echo 'Error it could not read the api.';
        exit;
    }
    //set on format JSON;
    $data = json_decode($response, true);
    foreach ($data as $json) {
        $counter++;
        fputcsv($file,$json,';');

        if($counter>$limit){
            echo "file created";
            return;
        }
    }

    writeRecursive($index+$index,$limit,$context,$file,$counter);
}
?>
