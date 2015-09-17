<form action="register.php" method="post">
    <fieldset >
        <legend>DELIVERY DETAILS</legend>
        <div class="form-group">
            <input autofocus class="form-control" name="d_name" placeholder="name" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="street" placeholder="street name" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="city" placeholder="City" type="text"/>
        </div>
          <div class="form-group">
            <input class="form-control" name="state" placeholder="STATE" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="pin" placeholder="ZIP-CODE" type="tel"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="no" placeholder="Phone number" type="tel" maxlength="10" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">PROCEED</button>
        </div>
    </fieldset>
</form>

