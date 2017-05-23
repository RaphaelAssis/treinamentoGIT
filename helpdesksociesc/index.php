<?php /* STYLE/DEFAULT $Id: login.php 30528 2009-07-27 11:48:14Z guilherme.moura $ */
	include_once("phpxmlconf.inc");
	include_once(PHPXML_ROOT_DIR."codigoFonte/informacao/duvidas.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Help Desk - Anima Educa&ccedil;&atilde;o</title>

<?php
    if($_GET['professor'] === 'S')
    {
        print '<link  rel="stylesheet" href="css/padrao_professor.css" />';
    }
    else {
        print '<link  rel="stylesheet" href="css/padrao.css" />';
    }
?>
    </head>

    <body background="img\fundo.png">
        <center>
            <img src="img\topo.JPG" width="630">
        </center>
        <table bgcolor="#A3A3A3" width="630" align=center>
            <td>
                <table width="550" align=center>
                    <td align=left>
                        <img src="img\logoSociesc.png" width="150" align=left>
                    </td>
                    <td align=center>
                        <font size="2" face="Arial" color=#505050>
                            <br/>
                            <b><h1>BEM VINDO</h1></b> Selecione o sistema desejado:
                            <br/>
                        </font>
                    </td>
                </table>
                <center>
                    <br>
                    <table cellpadding="0" cellspacing="0" align="center">
                        <td>
                            <tr>
                                <td>
                                    <center>
                                        <a href="https://helpdeskti.animaeducacao.com.br/"><div id="csc"></div></a>
                                    </center>
                                </td>
                            </tr>
                        </td>
                    </table>
                    <table>
                        <tr>
                            <td>
                                <center>
                                    <a href="https://helpdeskjuridico.animaeducacao.com.br/"><div id="jur"></div></a>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <a href="https://helpdeskinfra.animaeducacao.com.br/"><div id="infra"></div></a>
                                </center>
                            </td>
                        </tr>
                    </table>
                    <br/>
                    <img src="img\anima.png" width="90">
                    <br/>
                    <font size="1" face="Arial">
                    	<b>Helpdesk BH:</b>
                    	<br/>(31) 3319-9336 - 07 as 22h
                    	<br/>
                    	<br/><b>Suporte SOCIESC:</b>
                    	<br/>(47) 3461-0137
                    	<br/>(47) 3461-0138
                    	<br/>(47) 3461-0139
                    </font>
                </center>
            </td>
        </table>
    </body>
</html>
