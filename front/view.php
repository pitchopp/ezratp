<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ezratp</title>
</head>
<body>
<h1>Easy Ratp</h1>
<p>Stations d'alesia</p>
<form action="/action_page.php">
    <select name="stations" size="10">
<?php
foreach ($stations as $station)
{
?>
    <option value="<?php echo $station->id; ?>;<?php echo $station->line->id?>">
         <?php echo $station->name; ?> | <?php echo $station->line->reseau->name; ?> <?php echo $station->line->code; ?>
    </option>
<?php
}
?>
    </select>
    <br><br>
    <input type="submit">
</form>
</body>
</html>