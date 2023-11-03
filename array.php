<?php
$filename = 'postdata.json';
$alldata = file_get_contents($filename);
$data = json_decode($alldata, true);

$albumIds = [];
$currentAlbumId = null;
?>
<table border="1px" style="width:100%; text-align:center;">
    <tbody>
        <?php foreach ($data as $item) { ?>
            <?php //if ($item['albumId'] != $currentAlbumId) { 
                 if (!in_array($item['albumId'], $albumIds)) {
                ?>
                <?php $albumIds[] = $item['albumId'];   ?>
                <?php //$currentAlbumId = $item['albumId'];   ?>
                <tr>
                    <th colspan="4"> AlbumId :<?php echo $item['albumId'] ?></th>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>URL</th>
                    <th>Thumbnail</th>
                </tr>
            <?php   } ?>
            <tr>
                <td> <?php echo $item["id"]; ?> </td>
                <td> <?php echo $item["title"]; ?> </td>
                <td> <a href="<?php echo $item["url"]; ?>" target="_blank"><?php echo $item["url"];  ?></a> </td>
                <td> <a href="<?php echo  $item["thumbnailUrl"]; ?>" target="_blank"><?php echo  $item["thumbnailUrl"]; ?></a> </td>
            </tr>
        <?php   } ?>
    </tbody>
</table>