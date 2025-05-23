<!DOCTYPE html>
<html>
    <head>
        <title>Gambling Room</title>
        <meta charset="utf-8" >
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="slike/spade.png">
    </head>
    <body>
        <div class="body">
            <div class="main">
            <div id="title"></div>
                <div id="center">
                    <form action="igra.php" autocomplete="off" name="form" method="post">     
                        <div id="igralec">
                            <table>
                                <tr>
                                    <td>
                                        <label for="up1">Igralec 1:</label>
                                            <input class="vpis" name="up1" type="text" placeholder="Vnesi ime" required maxlength="10"/>
                                    </td>
                                    <td>
                                       <label for="up2">Igralec 2:</label>
                                        <input class="vpis" name="up2" type="text" placeholder="Vnesi ime" required maxlength="10"/>
                                    </td>
                                    <td>
                                       <label for="up3">Igralec 3:</label>
                                        <input class="vpis" name="up3" type="text" placeholder="Vnesi ime" required maxlength="10"/>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div id="kocke">
                            <table class="kaj">
                                <tr>
                                    <td class="izberi">
                                        <label for="stKock">Kocke:</label>
                                            <select name="stKock" class="izb">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                    </td>
                                    <td class="izberi">
                                        <label for="stMetov">Meti:</label>
                                        <select name="stMetov" class="izb">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <input class="button-5" type="submit" onClick="return isEmpty()" name="igraj" value="IGRAJ"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>