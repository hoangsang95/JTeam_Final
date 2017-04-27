<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
        <style></style>
    </head>
    <body>
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            <tr>
                <td align="center" valign="top">
                    <table border="1" cellpadding="20" cellspacing="0" width="600" id="emailContainer">
                        <tr>
                            <td align="center" valign="top">
                               Tên người gửi:
                            </td>
				<td align="center" valign="top">
                               <?php echo e($Contact_Name); ?>

                            </td>
							
                        </tr>
						<tr>
                            <td align="center" valign="top">
                              Email:
                            </td>
							<td align="center" valign="top">
                                <?php echo e($Contact_Email); ?>

                            </td>
							
                        </tr>
						<tr>
                            <td align="center" valign="top">
                              Số điện thoại:  
                            </td>
							<td align="center" valign="top">
                               <?php echo e($Contact_Mobile); ?>

                            </td>
							
                        </tr>
						<tr>
                            <td align="center" valign="top">
                              Nội dung:  
                            </td>
							<td align="center" valign="top">
                               <?php echo e($Contact_Message); ?>

                            </td>
							
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>