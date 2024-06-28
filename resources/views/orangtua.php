<!DOCTYPE html>
<html>

<head>
    <title>LINTAR Orang Tua - Login</title>
    <style>
    body {
        background-image: url('/img/bgorangtua.png');
        background-size: 80%;
        /* Mengatur ukuran background menjadi 50% dari ukuran viewport */
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }


    #main {
        
        /* Warna latar belakang konten utama */
        padding: 20px;
        border-radius: 10px;
        /* Sudut bulat pada kotak konten */
        max-width: 700px;
        /* Lebar maksimum konten */
        width: 80%;
        /* Lebar konten relatif */
        margin: 50px auto 0;
    }

    #header {
        margin-bottom: 20px;
        /* Jarak bawah header dari konten utama */
    }

    #judul {
        font-size: 24px;
        /* Ukuran font judul */
        margin-bottom: 10px;
        /* Jarak bawah judul dari konten utama */
    }

    .isi_login_ortu {
       
        /* Warna latar belakang kotak login */
        padding: 20px;
        border-radius: 8px;
        /* Sudut bulat pada kotak login */
    }
    </style>
</head>

<body>
    <div id="main">
        
        <div id="judul">
            Layanan Informasi Terpadu Orang Tua (<b>LINTAR</b>)
        </div>
        <div class="isi_login_ortu">
            <form method="post" action="./" id="ctl00">
                <div>
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                        value="/wEPDwULLTIwNTUwNTA5NDgPZBYCZg9kFgQCAQ9kFgQCAQ8PZBYCHgxhdXRvY29tcGxldGUFA29mZmQCAw8PZBYCHwAFA29mZmQCAw8PFgIeB1Zpc2libGVoZGRkkmwZRmtynGTZC5NM359nZz550Hw7RCN79nurMY2It5M=">
                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="65E3ECBA">
                    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                        value="/wEdAATXKs+MBku+WtNr2FT6sj7SdR78oILfrSzgm87C/a1IYQYQ7goYgBDlcb10UpdfSjgfeetr3c4H3XmikgJc2ZlI2YgPoAr7c0YLevbLh1jwJr3823HBGpD3BdkA/PAYRCA=">
                </div>

                <table align="center" border="0" width="100%">
                    <tbody>
                        <tr align="left">
                            <td colspan="3" align="center"><b>LOGIN SISTEM</b></td>
                        </tr>
                        <tr align="right">
                            <td width="170px"><b>User ID</b></td>
                            <td align="center" width="10px"><b>:</b></td>
                            <td align="left" width="170px">
                                <input name="txtUserid" type="text" maxlength="10" id="txtUserid" autocomplete="off"
                                    style="border-color:Black;border-style:Solid;width:100px;">
                            </td>
                        </tr>
                        <tr align="right">
                            <td width="170px"><b>Password</b></td>
                            <td align="center" width="10px"><b>:</b></td>
                            <td align="left" width="170px">
                                <input name="txtpasswd" type="password" maxlength="10" id="txtpasswd" autocomplete="off"
                                    style="border-color:Black;border-style:Solid;width:100px;">
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="3">
                                <input type="submit" name="btnsubmit" value="Login" id="btnsubmit" style="width:50px;">
                                <br><br>
                                <span style="font-size:10px;color:red;"><i><b>Lupa/Tidak Tahu Login Lintar Orangtua?</b>
                                        Hubungi Program Studi Terkait.</i></span>
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="3">
                                <span id="labelerr"
                                    style="display:inline-block;color:Red;font-size:Small;width:400px;"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </form>
        </div>

        <b>LINTAR ORANG TUA</b> adalah fasilitas Layanan informasi terpadu untuk Orang Tua Mahasiswa Universitas
        Tarumanagara.<br>
        Silakan gunakan user ID dan password Anda untuk masuk ke sistem kami.
        <br>

    </div>
    <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>
</body>

</html>