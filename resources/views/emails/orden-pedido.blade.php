<!DOCTYPE html>
<html  style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
    body {
    margin: 0;
    padding: 0;
    }
    img {
    border: 0 !important;
    outline: none !important;
    }
    p {
    Margin: 0px !important;
    Padding: 0px !important;
    }
    table {
    border-collapse: collapse;
    mso-table-lspace: 0px;
    mso-table-rspace: 0px;
    }
    td, a, span {
    border-collapse: collapse;
    mso-line-height-rule: exactly;
    }
</style>

</head>
<body itemscope itemtype="http://schema.org/EmailMessage" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="em_full_wrap" align="center" bgcolor="#efefef">
        <tr>
        <td align="center" valign="top" class="em_aside5"><table align="center" width="650" border="0" cellspacing="0" cellpadding="0" class="em_main_table" style="width:650px; table-layout:fixed;">
            <tr>
                <td align="center" valign="top" style="padding:0 25px; background-color:#ffffff;" class="em_aside10"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td height="25" style="height:25px;" class="em_h10">&nbsp;</td>
                    </tr>
                    <tr>
                        <td valign="top" align="center"><img src="{{ asset ('assets/img/Aeromat.gif') }}" width="280" height="100" class="em_full_img2" alt="Alt tag goes here" border="0" style="display:block; max-width:380px; font-family:Arial, sans-serif; font-size:17px; line-height:20px; color:#000000; font-weight:bold;" /></td>
                    </tr>
                    <tr>
                        <td height="22" style="height:22px;" class="em_h20">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="em_blue em_font_22" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 26px; line-height: 29px; color:#222020; font-weight:bold;">Nuevo Pedido <br> Realizado el Dia: {{date("Y-m-d H:i:s")}}</td>
                    </tr>
                </td>
            </tr>
            <tr>
                <td height="15" class="em_h10" style="height:15px; font-size:1px; line-height:1px;">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" valign="top" style="padding:0 50px; background-color:#ffffff;" class="em_aside10">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td height="35" style="height:35px;" class="em_h10">&nbsp;</td>
                </tr>
                <tr>
                    <td class="em_grey" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 18px; line-height: 22px; color:#434343; font-weight:bold;">DATOS DEL CLIENTE:</td>
                </tr>
                <tr>
                    <td height="10" style="height:10px; font-size:1px; line-height:1px;">&nbsp;</td>
                </tr>

                <tr>
                <td class="em_grey" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; color:#434343;">Nombre: {{$user->name}}<br />
                    Apellidos: {{$user->apellidos}}<br />
                    Telefono: {{$user->telefono}}<br />
                    Correo: {{$user->email}}<br />
                    Dirección: {{$user->direccion}}<br />
                    Ciudad: {{ $user->municipio_id}} 
                </td>

                </tr>
                <tr>
                    <td height="20" style="height:20px; font-size:1px; line-height:1px;">&nbsp;</td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#efefef" style="height:1px; background-color:#efefef; font-size:0px; line-height:0px;"><img src="{{ asset ('assets/img/aeromat.png') }}" width="1" height="1" alt="" border="0" style="display:block;" /></td>
                </tr>
                <tr>
                    <td height="25" class="em_h20" style="height:25px; font-size:1px; line-height:1px;">&nbsp;</td>
                </tr>

                <tr>
                    <td valign="top" align="center">
                        @foreach (Auth()->user()->cart->detalles as $detalles)
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td valign="top">
                                    <table width="120" border="0" cellspacing="0" cellpadding="0" align="left" style="width:120px;" class="em_wrapper">
                                    </table>
                                    <table width="25" border="0" cellspacing="0" cellpadding="0" align="left" style="width:25px;" class="em_hide">
                                    <tr>
                                        <td valign="top" align="left" width="25" style="width:25px;" class="em_hide">&nbsp;</td>
                                    </tr>
                                    </table>
                                    <table width="405" border="0" cellspacing="0" cellpadding="0" align="left" style="width:405px;" class="em_wrapper">
                                    <tr>
                                        <td height="16" style="height:16px; font-size:1px; line-height:1px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="em_grey" align="left" valign="top" style="font-family: Arial, sans-serif; font-size: 18px; line-height: 22px; color:#434343; font-weight:bold;">Nombre del Producto <span style="color:#264780; font-weight:bold;">{{$detalles->producto->nombre}}</span></td>
                                    </tr>
                                    <tr>
                                        <td height="20" style="height:13px; font-size:1px; line-height:1px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="em_grey" align="right" valign="top" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; color:#434343;">Cantidad: <span style="color:#264780; font-weight:bold;">{{$detalles->cantidad}}</span></td>
                                    </tr>
                                    <tr>
                                        <td height="13" style="height:13px; font-size:1px; line-height:1px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="em_grey" align="right" valign="top" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; color:#434343;">Precio Producto ($): <span style="color:#264780; font-weight:bold;">{{$detalles->producto->precio }}</span></td>
                                    </tr>
                                    <tr>
                                        <td height="20" style="height:13px; font-size:1px; line-height:1px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="em_grey" align="right" valign="top" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; color:#434343;">Total Producto ($): <span style="color:#264780; font-weight:bold;">{{$detalles->cantidad * $detalles->producto->precio }}</span></td>
                                    </tr>
                                    </table>
                                </td>
                            </tr>
                            </table>
                        @endforeach
                    </td>
                </tr>

                <tr>
                    <td height="25" class="em_h20" style="height:25px; font-size:1px; line-height:1px;">&nbsp;</td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#efefef" style="height:1px; background-color:#efefef; font-size:0px; line-height:0px;"><img src="{{ asset ('assets/img/Avatar-Email.png') }}" width="1" height="1" alt="" border="0" style="display:block;" /></td>
                </tr>
                <tr>
                    <td height="21" class="em_h20" style="height:21px; font-size:1px; line-height:1px;">&nbsp;</td>
                </tr>



                
                <tr>
                    <td valign="top" align="center">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td valign="top">
                                    <table width="120" border="0" cellspacing="0" cellpadding="0" align="left" style="width:120px;" class="em_wrapper">
                                    </table>
                                    <table width="25" border="0" cellspacing="0" cellpadding="0" align="left" style="width:25px;" class="em_hide">
                                    <tr>
                                        <td valign="top" align="left" width="25" style="width:25px;" class="em_hide">&nbsp;</td>
                                    </tr>
                                    </table>
                                    <table width="405" border="0" cellspacing="0" cellpadding="0" align="left" style="width:405px;" class="em_wrapper">
                                    <tr>
                                        <td height="20" style="height:20px; font-size:1px; line-height:1px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="em_grey" align="left" valign="top" style="font-family: Arial, sans-serif; font-size: 15px; line-height: 22px; color:#434343; font-weight:bold;">Fecha Aproximada de llegada del Producto: <span style="color:#222020; font-weight:bold;">
                                            @php
                                            $inicio=strtotime("+2 week");
                                            $llegada=date("Y-m-d",$inicio); 
                                            echo $llegada;
                                            @endphp</span></td>
                                    </tr>
                                    <tr>
                                        <td height="20" style="height:20px; font-size:1px; line-height:1px;">&nbsp;</td>
                                    </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" align="right" style="padding-bottom:5px;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">
                        <tr>
                            <td>&nbsp;</td>
                            <td class="em_grey" width="100" align="right" valign="top" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; color:#434343; width:100px;">Subtotal a Pagar</td>
                            <td width="20" style="width:20px; font-size:0px; line-height:0px;"></td>
                            <td width="100" class="em_grey" align="right" valign="top" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; color:#434343; width:100px;">{{ ((Auth()->user()->cart->total)-(Auth()->user()->cart->total)*0.19) }}</td>
                        </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" align="right" style="padding-bottom:10px;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">
                        <tr>
                            <td>&nbsp;</td>
                            <td class="em_grey" width="100" align="right" valign="top" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; color:#434343; width:100px;">Iva 19% </td>
                            <td width="20" style="width:20px; font-size:0px; line-height:0px;"></td>
                            <td width="100" class="em_grey" align="right" valign="top" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; color:#434343; width:100px;"> {{ ((Auth()->user()->cart->total)*0.19) }}   </td>
                        </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" align="right">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="right">
                        <tr>
                            <td>&nbsp;</td>
                            <td class="em_grey" width="100" align="right" valign="top" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; color:#434343; width:100px; font-weight:bold;">Total a Pagar</td>
                            <td width="20" style="width:20px; font-size:0px; line-height:0px;"></td>
                        <td width="100" class="em_grey" align="right" valign="top" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; color:#434343; width:100px; font-weight:bold;">{{ Auth()->user()->cart->total }}</td>
                        </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="36" style="height:36px;" class="em_h10">&nbsp;</td>
                </tr>
                </table>
                </td>
            </tr>
            </table>
        </td>
        </tr>
    </table>


    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="em_full_wrap" align="center" bgcolor="#efefef">
        <tr>
        <td align="center" valign="top"><table align="center" width="650" border="0" cellspacing="0" cellpadding="0" class="em_main_table" style="width:650px; table-layout:fixed;">
            <tr>
                <td align="center" valign="top" style="padding:0 25px;" class="em_aside10"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td height="40" style="height:40px;" class="em_h20">&nbsp;</td>
                </tr>
                <tr>
                    <td align="center" valign="top"><table border="0" cellspacing="0" cellpadding="0" align="center">
                        <tr>
                        <td width="30" style="width:30px;" align="center" valign="middle"><a href="#" target="_blank" style="text-decoration:none;"><img src="{{ asset ('assets/img/fbs.png') }}"width="30" height="30" alt="Fb" border="0" style="display:block; font-family:Arial, sans-serif; font-size:18px; line-height:25px; text-align:center; color:#000000; font-weight:bold; max-width:30px;" /></a></td>
                        <td width="12" style="width:12px;">&nbsp;</td>
                        <td width="30" style="width:30px;" align="center" valign="middle"><a href="#" target="_blank" style="text-decoration:none;"><img src={{ asset ('assets/img/twer.png') }} width="30" height="30" alt="Tw" border="0" style="display:block; font-family:Arial, sans-serif; font-size:14px; line-height:25px; text-align:center; color:#000000; font-weight:bold; max-width:30px;" /></a></td>
                        <td width="12" style="width:12px;">&nbsp;</td>
                        <td width="30" style="width:30px;" align="center" valign="middle"><a href="#" target="_blank" style="text-decoration:none;"><img src={{ asset ('assets/img/insta.png') }} width="30" height="30" alt="Insta" border="0" style="display:block; font-family:Arial, sans-serif; font-size:14px; line-height:25px; text-align:center; color:#000000; font-weight:bold; max-width:30px;" /></a></td>
                        </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td height="16" style="height:16px; font-size:1px; line-height:1px; height:16px;">&nbsp;</td>
                </tr>
                <tr>
                    <td height="10" style="height:10px; font-size:1px; line-height:1px;">&nbsp;</td>
                </tr>
                <tr>
                    <td align="center" valign="top" style="font-size:0px; line-height:0px;"><table border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td width="15" align="left" valign="middle" style="font-size:0px; line-height:0px; width:15px;"><a href="mailto:aeroshopsas@gmail.com" style="text-decoration:none;"><img src="/assets/pilot/images/templates/email_img.png" width="15" height="12" alt="" border="0" style="display:block; max-width:15px;" /></a></td>
                        <td width="9" style="width:9px; font-size:0px; line-height:0px;" class="em_w5"><img src="/assets/pilot/images/templates/spacer.gif" width="1" height="1" alt="" border="0" style="display:block;" /></td>
                        <td class="em_grey em_font_11" align="left" valign="middle" style="font-family: Arial, sans-serif; font-size: 13px; line-height: 15px; color:#434343;"><a href="aeroshopsas@gmail.com" style="text-decoration:none; color:#434343;">aeroshopsas@gmail.com</a> <a href="mailto:aersohopsas@gmail.com" style="text-decoration:none; color:#434343;">[mailto:aeroshopsas@gmail.com]</a></td>
                    </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td height="9" style="font-size:0px; line-height:0px; height:9px;" class="em_h10"><img src="/assets/pilot/images/templates/spacer.gif" width="1" height="1" alt="" border="0" style="display:block;" /></td>
                </tr>
                <tr>
                    <td align="center" valign="top"><table border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td width="12" align="left" valign="middle" style="font-size:0px; line-height:0px; width:12px;"><a href="#" target="_blank" style="text-decoration:none;"><img src="/assets/pilot/images/templates/img_1.png" width="12" height="16" alt="" border="0" style="display:block; max-width:12px;" /></a></td>
                        <td width="7" style="width:7px; font-size:0px; line-height:0px;" class="em_w5">&nbsp;</td>
                        <td class="em_grey em_font_11" align="left" valign="middle" style="font-family: Arial, sans-serif; font-size: 13px; line-height: 15px; color:#434343;"><a href="#" target="_blank" style="text-decoration:none; color:#434343;">Aeroshop</a> &bull; Tel: 301-4579240 &bull; Madrid - Cundinamarca, Calle 38 No. 16 - 84</td>
                    </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td height="35" style="height:35px;" class="em_h20">&nbsp;</td>
                </tr>
                </table>
                </td>
            </tr>
            <tr>
                <td height="1" bgcolor="#dadada" style="font-size:0px; line-height:0px; height:1px;"><img src="/assets/pilot/images/templates/spacer.gif" width="1" height="1" alt="" border="0" style="display:block;" /></td>
            </tr>
            <tr>
                <td align="center" valign="top" style="padding:0 25px;" class="em_aside10"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td height="16" style="font-size:0px; line-height:0px; height:16px;">&nbsp;</td>
                </tr>
                <tr>
                    <td align="center" valign="top"><table border="0" cellspacing="0" cellpadding="0" align="left" class="em_wrapper">
                    <tr>
                        <td class="em_grey" align="center" valign="middle" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 16px; color:#434343;">&copy; AeroSHOP 2020  &nbsp;|&nbsp;  <a href="https://fierce-brushlands-39490.herokuapp.com/" target="_blank" style="text-decoration:underline; color:#434343;">Unsubscribe</a></td>
                    </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td height="16" style="font-size:0px; line-height:0px; height:16px;">&nbsp;</td>
                </tr>
                </table>
                </td>
            </tr>
            <tr>
                <td class="em_hide" style="line-height:1px;min-width:650px;background-color:#efefef;"><img alt="" src="/assets/pilot/images/templates/spacer.gif" height="1" width="650" style="max-height:1px; min-height:1px; display:block; width:650px; min-width:650px;" border="0" /></td>
            </tr>
            </table>
        </td>
        </tr>
    </table>
</body>
</html>