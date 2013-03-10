<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo isset($error)?$error:'';?>
<?php echo isset($upload_success)?$upload_success:'';?>
<?php echo isset($upload_data)?var_dump($upload_data):'';?>

<?php echo form_open_multipart('welcome/upload_assignment');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>