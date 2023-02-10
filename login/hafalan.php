<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setoran</title>
</head>
<body>
    <h1>
        <?php 
        echo 'setoran hafalan '.$_GET['nama'];
        ?> 
    </h1>
    <h3>
        input setoran baru :
    </h3>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>
            <label for="nama">tanggal	</label>
        </td>
        <td>
            <Input type="date" name="tanggal" id="nama">
        </td>
    </tr>
    <tr>
        <td>
            <label for="surah">Surah & ayat</label>
        </td>
        <td>
            <Input type="text" name="Surah" id="nama">
        </td>
    </tr>
 </table>
 <br>
    <button type submit>submit</button>
    
    <form action="get"></form>
</body>
</html>