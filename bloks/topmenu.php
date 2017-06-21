<table class="main">
<tr>
	<td>
		<table id="top">
			<tr>
				<td>
					<img src="images/logo.gif">
				</td>
				<td>
					 <table id="topmenu">
				    	<tr>
				    		<td onclick="location='index.php'">Головна</td>
				    		<td onclick="location='index.php?id=news'">Новини</td>
				    		<td onclick="location='index.php?id=look'">Корисно знати</td>
				    		<td onclick="location='index.php?id=reg'">Реєстрація</td>
				    		<td onclick="location='index.php?id=info'">Про нас</td>
				    	</tr>
		    		</table>  
				</td>

			</tr>
		</table>
		<form id="form_in" name="auth" action="auth.php" method="post" >
			Для входу введіть Ваші дані 	&#8594;
			E-mail: <input type="text" name="email" />
			Пароль: <input type="password" name="password" />
			<input type="submit" name="button_reg" value="Увійти"  />
		</form>
	</td>
</tr>
<tr>
	<td>
