<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>mipaicta</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <div id="header1">
            <img src="img/logo.png" id="logo">
        </div>
        <div id="web1">
            <form action="#" method="post"> 
                <table id="rekomendasi_tabel">
                    <tr>
                        <td class="td1">
                            <span class="title_kategori">OS :</span>
                        </td>
                        <td class="td2">
                            <select name="os" class="kategori_select">  
                                <option value="android">Android</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="td1">
                            <span class="title_kategori">Dual Sim :</span>
                        </td>
                        <td class="td2">
                            <select name="ds" class="kategori_select"> 
                                <option value="d">default</option> 
                                <option value="y">Ya</option>
                                <option value="d">Tidak</option>
                            </select>
                        </td>

                    </tr>

                    <tr>
                        <td class="td1">
                            <span class="title_kategori">Memori Internal :</span>
                        </td>
                        <td class="td2">
                            <select name="mi" class="kategori_select">  
                                <option value="4gb">4 GB</option>
                            </select>
                        </td>

                    </tr>

                    <tr>
                        <td class="td1">
                            <span class="title_kategori">Memori Ekternal :</span>
                        </td>
                        <td class="td2">
                            <select name="me" class="kategori_select"> 
                                <option value="d">default</option> 
                                <option value="32gb">32 GB</option>
                                <option value="64gb">64 GB</option>
                            </select>
                        </td>

                    </tr>

                    <tr>
                        <td class="td1">
                            <span class="title_kategori">RAM :</span>
                        </td>
                        <td class="td2">
                            <select name="ram" class="kategori_select"> 
                                <option value="d">default</option> 
                                <option value="<1gb">&lt;1 GB</option>
                                <option value="1gb-2gb">1 GB - 2 GB</option>
                            </select>
                        </td>

                    </tr>

                    <tr>
                        <td class="td1">
                            <span class="title_kategori">Core Processor :</span>
                        </td>
                        <td class="td2">
                            <select name="cp" class="kategori_select"> 
                                <option value="d">default</option> 
                                <option value="1core">Single core</option>
                                <option value="2core">Dual Core</option>
                                <option value="4core">Quad Core</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="td2">
                            <select name="lyr" class="kategori_select"> 
                                <option value="d">default</option> 
                                <option value="3-5inc">3" - 5"</option>
                                <option value=">5inc">&gt;5"</option>
                            </select>
                        </td>
                        <td class="td3">
                            <span class="title_kategori">: Layar</span>
                        </td>
                    </tr>

                    <tr>
                        <td class="td2">
                            <select name="kp" class="kategori_select"> 
                                <option value="d">default</option> 
                                <option value="4mp">&lt;4 MP</option>
                                <option value="4-8mp">4 MP - 8 MP</option>
                                <option value="9-13mp">9 MP - 13 MP</option>
                            </select>
                        </td>
                        <td class="td3">
                            <span class="title_kategori">: Kamera Primer</span>
                        </td>
                    </tr>

                    <tr>
                        <td class="td2">
                            <select name="ks" class="kategori_select"> 
                                <option value="d">default</option> 
                                <option value="vga">vga</option>
                                <option value="1-3mp">1 MP - 3 MP</option>
                            </select>
                        </td>
                        <td class="td3">
                            <span class="title_kategori">: Kamera Sekunder</span>
                        </td>
                    </tr>

                    <tr>
                        <td class="td2">
                            <select name="bat" class="kategori_select"> 
                                <option value="d">default</option> 
                                <option value="4gb">1000 mAh - 2000 mAh</option>
                                <option value="8gb">2001 mAh - 3000 mAh</option>
                                <option value="16gb">3001 mAh = 4000 mAh</option>
                            </select>
                        </td>
                        <td class="td3">
                            <span class="title_kategori">: Baterai</span>
                        </td>
                    </tr>

                    <tr>
                        <td class="td2">
                            <select name="hrg" class="kategori_select" disabled> 
                                <option value="1-2jt">1.000.0001 - 2.000.000</option>
                            </select>
                        </td>
                        <td class="td3">
                            <span class="title_kategori">: Harga</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="td2">
                            <select name="dr" class="kategori_select">
                                <option value="d">Tidak</option>
                            </select>
                        </td>
                        <td class="td3">
                            <span class="title_kategori">: Durability</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" id="tombol_submit_rekomendasi">
                            <input type="submit" value="submit" name = submit>
                        </td>
                    </tr>
                </table>
            </form>
            <div id="kontent">
                <div id="kontent2">
                    <?php
                    include ('connect.php');
                    if (isset($_POST['submit'])) {

                        $os = $_POST['os'];
                        $ds = $_POST['ds'];
                        $mi = $_POST['mi'];
                        $me = $_POST['me'];
                        $ram = $_POST['ram'];
                        $cp = $_POST['cp'];
                        $lyr = $_POST['lyr'];
                        $kp = $_POST['kp'];
                        $ks = $_POST['ks'];
                        $bat = $_POST['bat'];
                        $dr = $_POST['dr'];

                        $input = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

                        switch ($os) {
                            case "android":
                                $input[0] = 1;
                                break;
                            case "ios":
                                $input[1] = 1;
                                break;
                            case "bb":
                                $input[2] = 1;
                                break;
                            case "wp":
                                $input[3] = 1;
                                break;
                        }
                        switch ($ds) {
                            case "y":
                                $input[4] = 1;
                                break;
                        }
                        switch ($mi) {
                            case "4gb":
                                $input[5] = 1;
                                break;
                            case "8gb":
                                $input[6] = 1;
                                break;
                            case "16gb":
                                $input[7] = 1;
                                break;
                            case "32gb":
                                $input[8] = 1;
                                break;
                            case "64gb":
                                $input[9] = 1;
                                break;
                        }
                        switch ($me) {
                            case "32gb":
                                $input[10] = 1;
                                break;
                            case "64gb":
                                $input[11] = 1;
                                break;
                        }
                        switch ($ram) {
                            case "<1gb":
                                $input[12] = 1;
                                break;
                            case "1gb-2gb":
                                $input[13] = 1;
                                break;
                            case ">=3gb":
                                $input[14] = 1;
                                break;
                        }
                        switch ($cp) {
                            case "1core":
                                $input[15] = 1;
                                break;
                            case "2core":
                                $input[16] = 1;
                                break;
                            case "4core":
                                $input[17] = 1;
                                break;
                            case "8core":
                                $input[18] = 1;
                                break;
                        }
                        switch ($lyr) {
                            case "3-5inc":
                                $input[19] = 1;
                                break;
                            case ">5inc":
                                $input[20] = 1;
                                break;
                        }
                        switch ($kp) {
                            case "4mp":
                                $input[21] = 1;
                                break;
                            case "4-8mp":
                                $input[22] = 1;
                                break;
                            case "9-13mp":
                                $input[23] = 1;
                                break;
                            case ">13mp":
                                $input[24] = 1;
                                break;
                        }
                        switch ($ks) {
                            case "vga":
                                $input[25] = 1;
                                break;
                            case "1-3mp":
                                $input[26] = 1;
                                break;
                            case ">3mp":
                                $input[27] = 1;
                                break;
                        }
                        switch ($bat) {
                            case "1-2rb mAh":
                                $input[28] = 1;
                                break;
                            case "2-3rb mAh":
                                $input[29] = 1;
                                break;
                            case "3-4rb mAh":
                                $input[30] = 1;
                                break;
                            case ">4rb mAh":
                                $input[31] = 1;
                                break;
                        }
                        switch ($dr) {
                            case "y":
                                $input[40] = 1;
                                break;
                        }

                        $nilai = 0;
                        $jdt = 0;
                        $jat = 0;

                        $sql = "SELECT * FROM matriks m, proses p where m.no=p.no and p.hrg>1000000 and p.hrg<=2000000";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                            for ($dt = 0; $dt < 41; $dt++) {
                                $t = $dt + 1;
                                $h = $row['col' . $t];
                                $nilai += $h * $input[$dt];
                                $jdt += $h;
                                $jat += $input[$dt];
                            }
                            $sim = $nilai / sqrt($jdt * $jat);
                            $awal = round($sim * 100, 2);
                            $no = $row['no'];
                            $sql2 = "INSERT INTO persentase VALUES ('" . $no . "','" . $awal . "')";
                            $query2 = mysqli_query($con, $sql2);
                            $nilai = 0;
                            $jdt = 0;
                            $jat = 0;
                        }

                        $sql3 = "SELECT * FROM tampilan t, proses s, persentase p where t.no=p.no and t.no=s.no "
                                . "and s.no=p.no and (s.hrg>1000000 and s.hrg<=2000000) and p.persen>0 order by persen desc";
                        $query3 = mysqli_query($con, $sql3);
                        while ($row = mysqli_fetch_array($query3, MYSQLI_ASSOC)) {
                            $merk = $row['merk'];
                            $tipe = $row['tipe'];
                            $persen = $row['persen'];
                            $gambar = $row['link'];
                            echo '<div class="big_box">
                            <div class="little_box">
                                <img class="gambar_smartphone" src="' . $gambar . '"/>
                            </div>
                            <div class="merk_tampilan">
                                <span>' . $merk . '</span>
                                <span>' . $tipe . '</span>
                            </div>
                            <div class="persentase_tampilan">
                                <span>' . $persen . '%</span>
                            </div></div>';
                        }
                        $sql4 = "DELETE FROM persentase";
                        $query4 = mysqli_query($con, $sql4);
                    } else {
                        $sql5 = "SELECT * FROM tampilan t, proses p WHERE t.no=p.no and (p.hrg>1000000 and p.hrg<=2000000)";
                        $query5 = mysqli_query($con, $sql5);
                        while ($row = mysqli_fetch_array($query5, MYSQLI_ASSOC)) {
                            $merk = $row['merk'];
                            $tipe = $row['tipe'];
                            $gambar = $row['link'];
                            echo '<div class="big_box">
                            <div class="little_box">
                                <img class="gambar_smartphone" src="' . $gambar . '"/>
                            </div>
                            <div class="merk_tampilan">
                                <span>' . $merk . '</span>
                                <span>' . $tipe . '</span>
                            </div></div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div id="footer1">
            <p> &copy; S1 Informatika 2012</p>
        </div>

    </body>
</html>
