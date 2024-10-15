<table cellpadding="0" cellspacing="0" width="100%" border="0" align="center" style="padding:25px 0 15px 0">
    <tbody>
        <tr>
            <td width="100%" valign="top">
                <table cellpadding="0" cellspacing="0" width="600" border="0" align="center" bgcolor="f2f2f2">
                    <tbody>
                        <tr>
                            <td valign="top">
                                <table cellpadding="0" cellspacing="0" width="600" border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td valign="top" width="300" style="background-color:#1f2533;padding-top:10px">
                                                <a href="<?php echo base_url();?>" target="_blank">
                                                    <img src="<?php echo base_url(); ?>assets/images/logo-white.png" style="display:block;padding:10px;padding-left:30px" width="20%" alt="" border="0" class="CToWUd">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <table cellpadding="0" cellspacing="0" width="600" border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td valign="top" width="500" style="background-color:#ffffff;color:#666666;font-size:15px;font-family:Arial,sans-serif;text-align:left;padding:30px 10px 20px 30px;line-height:20px">Hi <span><?php echo $email ?></span>,<br><br>
											Click the link below to reset your password.
                                            </td>
                                        </tr>
										<tr>
											<td align="center" valign="middle" style="border-radius:.25em;background-color:#4582e8;font-weight:400;min-width:180px;font-size:16px;line-height:100%;padding-top:18px;padding-right:30px;padding-bottom:18px;padding-left:30px;color:#ffffff">
											<a href="<?php echo base_url();?>accesspanel/reset_password/<?php echo $token?>" style="font-weight:500;color:#ffffff;text-decoration:none" target="_blank">Reset Password</a>
											</td>
										</tr>
										 <tr>
                                            <td valign="top" width="500" style="background-color:#ffffff;color:#666666;font-size:15px;font-family:Arial,sans-serif;text-align:left;padding:30px 10px 20px 30px;line-height:20px"><?php echo ucwords($setting->site_name);?> Team
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                      
                        <tr>
						<td valign="top">
							<table cellpadding="0" cellspacing="0" width="600" border="0" align="center" bgcolor="1F2533">
								<tbody>
									<tr>
										<td valign="top" width="260" style="background-color:#1f2533;color:#49ba8e;font-size:12px;font-family:Arial,sans-serif;text-align:left;padding:20px 10px 15px 20px">For any further assistance
											<br><a href="mailto:<?php echo$setting->email_id_1;?>" style="text-decoration:none;color:#49ba8e;font-weight:bold" target="_blank"><?php echo $setting->email_id_1;?></a></td>
										<td style="width:200px;vertical-align:top;background-color:#1f2533;text-align:right;padding:25px 0 15px 0">
											<img src="<?php echo base_url(); ?>assets/images/phone.png" alt="helpline phone" width="18" height="20" border="0" class="CToWUd">
										</td>
										<td style="width:105px;vertical-align:top;padding:25px 0 15px 10px;text-align:left;background-color:#1f2533;color:#49ba8e;line-height:14px;font-size:12px;font-weight:bold">
											<a href="tel:<?php echo $setting->mobile_1;?>" style="text-decoration:none;color:#49ba8e" target="_blank"><?php echo $setting->mobile_1;?></a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>