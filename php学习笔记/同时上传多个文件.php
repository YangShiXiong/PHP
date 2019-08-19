<form action="" method="post" enctype="multipart/form-data">
<table id="up_table" border="1" bgcolor="f0f0f0">
	<tbody id="auto">
		<tr id="show">
			<td>上传文件</td>
			 <td><input type="file" name="u_file[]"></td>
		</tr>
		<tr>
			<td>上传文件</td>
			<td><input type="file" name="u_file[]"></td>
		</tr></tbody>
		<tr><td colspan="4"><input type="submit" value="上传"></td></tr></table>	</form>
<?php

	if (!empty($_FILES[u_file][name])){
		$file_name = $_FILES[u_file][name];
		$file_tmp_name = $_FILES[u_file][tmp_name];
		for($i = 0; $i<count($file_name);$i++){
			if ($file_name[$i]!=""){
				move_uploaded_file($file_tmp_name[$i], $i.$file_name[$i]);
				echo "文件上传成功";
			}
		}
	}
?>		
