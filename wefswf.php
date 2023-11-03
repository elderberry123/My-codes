<?php
    $filename = 'postdata.json';
    $alldata = file_get_contents($filename);
    $data = json_decode($alldata, true);
    $albumIds = [];
    $currentAlbumId = null;
echo '<table border="1" style="width:100%; text-align:center;">';
echo '<tbody>';

foreach ($data as $item) {
    // Check if albumId has changed
    if ($item['albumId'] != $currentAlbumId) {
        // Store the current albumId in the array
        $albumIds[] = $item['albumId'];
        
        // Update the current albumId
        $currentAlbumId = $item['albumId'];
        
        // Create a new table header for the albumId
        echo '<tr>';
        echo '<th >Album ID: ' . $item['albumId'] . '</th>';
        echo '</tr>';
        
        // Create the table header row for data
        echo '<tr>';
        echo '<th>Id</th>';
        echo '<th>Title</th>';
        echo '<th>URL</th>';
        echo '<th>Thumbnail</th>';
        echo '</tr>';
    }
    
    // Display the data in the table
    echo '<tr>';
    echo '<td>' . $item['id'] . '</td>';
    echo '<td>' . $item['title'] . '</td>';
    echo '<td><a href="' . $item['url'] . '" target="_blank">' . $item['url'] . '</a></td>';
    echo '<td><a href="' . $item['thumbnailUrl'] . '" target="_blank">' . $item['thumbnailUrl'] . '</a></td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>

