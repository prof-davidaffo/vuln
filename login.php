<html>

    <?php require_once "db.php";?>

    <div class="container">
        <form method="post" action="logged.php">
            <div id="div_login">
                <h1>Non Secure Login</h1>
                <div>
                    <input type="text" class="textbox" id="username" name="username" placeholder="Username" />
                </div>
                <div>
                    <input type="text" class="textbox" id="password" name="password" placeholder="Password"/>
                </div>
                <div>
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <form method="post" action="logged_secure.php">
            <div id="div_login">
                <h1>Secure Login</h1>
                <div>
                    <input type="text" class="textbox" id="username" name="username" placeholder="Username" />
                </div>
                <div>
                    <input type="text" class="textbox" id="password" name="password" placeholder="Password"/>
                </div>
                <div>
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                </div>
            </div>
        </form>
    </div>

</html>

