<?php include_once "handler.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DZ-6</title>
</head>
<body>
<form method="post" action="index(1).php">
    <table width="70%" align="center" border="1">
        <tr>
            <td>
                <label>Date1:
                    <input type="text" name="date1" value="" placeholder="Y-m-d">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>Date2:
                    <input type="text" name="date2" value="" placeholder="Y-m-d">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>dd.mm.YY :
                    <input type="radio" name="format" value="d.m.Y" checked="checked">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>YY.mm.dd :
                    <input type="radio" name="format" value="Y.m.d">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <fieldset>
                    <legend> Subjects you may know</legend>
                    <label>html<input type="checkbox" name="subject[html]"></label><br>
                    <label>css<input type="checkbox" name="subject[css]"></label><br>
                    <label>php<input type="checkbox" name="subject[php]"></label><br>
                    <label>javascript<input type="checkbox" name="subject[javascript]"></label>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td>
                    <fieldset><legend>Do you know php?</legend>
                        <label>Yes<input type="radio" value="Yes" name="phpknown" checked="checked"></label><br>
                        <label>No<input type="radio" value="No" name="phpknown"></label>
                    </fieldset>
                
                
            </td>
        </tr>
        <tr>
            <td>
                <fieldset><legend>How old are you?</legend>
                    <label>20<input type="radio" name="age" value="20"></label>
                    <label>21-25<input type="radio" name="age" value="25"></label>
                    <label>26-30<input type="radio" name="age" value="30"></label>
                    <label>more than 30<input type="radio" name="age" value="31"></label>
                </fieldset>

            </td>
        </tr>
       
        <tr>
            <td>
                <label>Your age
                    <select name="age2">
                        <option value="">How old are you? </option>
                        <option value="20">20</option>
                        <option value="25">21-25</option>
                        <option value="30">26-30</option>
                        <option value="31">more than 30</option>
                    </select>
                </label>
            </td>
        </tr>
        <tr>
        <td>
            <label>Our custom element
                <?php echo getElem('text', 'custom', '', 'This is a custom element' )?>
            </label>
        </td>
        </tr><tr>
        <td>
            <label>Our custom select
                <?php  $options = array(
                    array('value'=>'php', 'text'=>'Язык PHP'),
                    array('value'=>'html', 'text'=>'Язык HTML'));
                    echo getSelect($options);
                ?>
            </label>
        </td>
        </tr>
        <tr>
            <td>
                <label>Subjects you know<br/>
                    <select multiple name="subjects2[]">
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="php">php</option>
                        <option value="javascript">javascript</option>
                    </select>
                </label>
            </td>
        </tr>
        <tr>
        
        <td>
                <input type="submit" value="Send">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
