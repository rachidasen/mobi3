            </div>

            <div id="bottom">
                Copyright &#169; John Harvard
            </div>

        </div>
        <div id="bottom">
        <?php
        foreach($_SERVER as $key_name => $value){
        	print $key_name."=".$value."<br>";
        }
        ?>
        </div>
    </body>

</html>
