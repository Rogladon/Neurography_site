//Registration Popup

<div align="center">
	<form action="" method="post">
		<table class="fields">
			<tr>
				<td width="40%"><label for="login">Придумайте логин:</label> </td>
				<td><input id="login" type="text" name="login" /></td>
			</tr>
			<tr>
				<td><label for="password">Задайте пароль:</label> </td>
				<td><input id="password" type="password" name="password" /></td>
			</tr>
			<tr>
				<td><label for="password-repeat">Повторите пароль:</label> </td>
				<td><input id="password-repeat" type="password" name="password-repeat" /></td>
			</tr>
		</table>
		<input style="float:none" type="submit" name="registration" value="Зарегистрироваться">
	</form>
</div>
<style type="text/css">
	table.fields label{
		margin-top: 50px;
		margin-right: 20px;
		float:right;
	}
	table.fields input{
		margin-top: 50px;
		margin-left: 20px;
		float:left;
	}
</style>

//LogIn Popup
<div align="center">
	<form action="" method="post">
		<table class="fields">
			<tr>
				<td width="40%"><label for="login">Логин:</label> </td>
				<td><input id="login" type="text" name="login" /></td>
			</tr>
			<tr>
				<td><label for="password">Пароль:</label> </td>
				<td><input id="password" type="password" name="password" /></td>
			</tr>
		</table>
		<input style="float:none" type="submit" name="log_in" value="Войти">
	</form>
</div>
<style type="text/css">
	table.fields label{
		margin-top: 50px;
		margin-right: 20px;
		float:right;
	}
	table.fields input{
		margin-top: 50px;
		margin-left: 20px;
		float:left;
	}
</style>

<? php
if(isset($_POST['log_in'])){
	echo "Log in ".$_POST['name'];
}
?>