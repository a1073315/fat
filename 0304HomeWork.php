<form action="sumit.php" method="POST">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<center>
<body style="background-color: #FFEE33">
	<b><font face="DFKai-sb" color="Blue" size="7" style="background-color: #FAED6A">
	資管營報名表</b><br/></font>

	<br/>
	<font size="5" style="line-height: 150%">
	請輸入姓名:<input type="text" name="name"><br/>
	請輸入生日:<input type="date" name="birthday"><br/>
	請輸入身份證字號:<input type="text" name="id"><br/>
	請選擇性別:
	<input type="radio" name="gender" value="M">男
	<input type="radio" name="gender" value="F">女<br/>
	請選擇年齡:<input type="range" step="1" name="years old" min="10" max="30"><br/>

飲食習慣:
	<select>
		<option value="1">葷食</option>
		<option value="2">素食</option>

	</select><br/>

	上傳大頭照:
	<input type="file" name="photo"><br/>

	獲得營隊資訊(可複選):
	<input type="checkbox" name="int1" value="eat">FB
	<input type="checkbox" name="int2" value="sleep">IG
	<input type="checkbox" name="int3" value="play">學校師長
	<input type="checkbox" name="int4" value="run">親朋好友
	<input type="checkbox" name="int5" value="rlow">其他
	<input type="text" name="else"><br/>

	</font>
	<textarea rows="5" cols="70" name="comments">
備註
		
	</textarea><br/>

	<input type="reset" value="重設">
	<input type="submit" value="提交"><br/>

	<br/>
	<a href="https://zh-tw.facebook.com/nukimcamp">
		<img src="https://scontent.ftpe1-3.fna.fbcdn.net/v/t1.0-9/p960x960/87003499_2697192063721825_8704348608050233344_o.jpg?_nc_cat=105&_nc_sid=85a577&_nc_ohc=McGK3Z_tIlkAX_F8ik6&_nc_ht=scontent.ftpe1-3.fna&_nc_tp=6&oh=3b70ed84070f025e8279f8dd163e1090&oe=5E98BEE8" width="600px" border="3"></a><br/>
		(圖有臉書粉專連結)
	<br/>
</body>
</center>
</form>