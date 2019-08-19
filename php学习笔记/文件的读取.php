<table width="500" border="1" cellpadding="0" cellspacing="0">
	<tr>
		<td width="253" height="100" align="center" valign="middle" scope="col"></td>
		<td width="241" height="100" align="center" valign="middle" scope="col">
				<?php 
					readfile("tm.txt");
				?>
		</td>
	</tr>

	<tr>
		<td height="100" align="center" valign="middle"> 使用file读取文件: </td>
		<td height="100" align="center" valign="middle">
		<?php
			$f_arr=file('tm.txt');
			foreach ($f_arr as $link) {
				echo $link."<br>";
			}
		 ?></td>
	</tr>
	<tr>
		<td height="25" width="250" align="center" valign="middle" scope="col"> 使用file_get_content读取文件: </td>
		<td height="25" align="center" valign="middle" scope="col">
		<?php
			$f_chr=file_get_contents('tm.txt');
			echo $f_chr;
		 ?></td>
	</tr>
	
</table>