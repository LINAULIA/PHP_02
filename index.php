<!DOCTYPE html>
<html>

<head>
    <title>Submit Form</title>
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrap">
        <form method="post" action="proses.php">
            <div>
                <label>nama</label>
                <input name="nama" class="nama"></input>
            </div>
            <div>
                <label>alamat</label>
                <input name="alamat" class="alamat"></input>
            </div>
            <div>
                <label>telepon</label>
                <input type="number" name="tlp" class="tlp"></input>
            </div>
            <div>
                <label>jenis kelamin</label>
                <select name="jk" id="jk" class="jk">
                    <option value="laki-laki">Laki Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <button class="btn" type="submit">Submit</button>
        </form>
        <script type="text/javascript">
            $(function() {
                $("form").submit(function() {
                    $.ajax({
                        url: $(this).attr("action"),
                        data: $(this).serialize(),
                        type: $(this).attr("method"),
                        dataType: 'html',
                        beforeSend: function() {
                            $("input").attr("disabled", true);
                            $("select").attr("disabled", true);
                            $("button").attr("disabled", true);
                        },
                        complete: function() {
                            $("input").attr("disabled", false);
                            $("select").attr("disabled", false);
                            $("button").attr("disabled", false);
                        },
                        success: function(hasil) {
                            var txt = $("input");
                            if (txt.val().trim().length < 1) {
                                alert("Status masih kosong");
                            } else {
                                $("#data_status").after(hasil);
                                $(".status-box").eq(0).hide().fadeIn();
                                $("#data_status h1").remove();
                                $("form")[0].reset();
                                setTimeout(function() {
                                    $("input").focus();
                                }, 1000);
                            }
                        }
                    })
                    return false;
                });
            });
        </script>
        <!-- Data Status Akan Ditampilkan disini -->
    </div>
</body>

</html>