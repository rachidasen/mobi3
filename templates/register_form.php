<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Confirm password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="city" placeholder="City" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="phone" placeholder="Phone number" type="number" maxlength="10" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">REGISTER</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">LOGIN</a> 
</div>
