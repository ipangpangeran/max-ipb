<?php
mysql_connect("localhost", "root", "");
mysql_select_db("harviacode");

function sql($tgl) {
    $tglsql = substr($tgl, 6, 4) . "-" . substr($tgl, 3, 2) . "-" . substr($tgl, 0, 2);
    return $tglsql;
}

if (isset($_POST['addsubmit'])) { // jika tombol addsubmit ditekan
    $date1 = $_POST['date'];
    $date = sql($date1);
    $time = $_POST['time'];
    $datetime = $date . ' ' . $time;
    $title = $_POST['title'];
    $description = $_POST['description'];

    $simpan = mysql_query("INSERT INTO jadwalku(
                        date,                       
                        title, 
                        description)
                        
		VALUES(
                        '$datetime',                        
                        '$title', 
                        '$description'                        
                        )");

    echo '<script type="text/javascript">
                    alert("Jadwal berhasil Disimpan");</script>';
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}; // if(kondisi) {hasil};
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width" />

        <title>Event Calender</title>
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- Bootsrap -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Core CSS File. The CSS code needed to make eventCalendar works -->
        <link rel="stylesheet" href="css/eventCalendar.css">

        <!-- Theme CSS file: it makes eventCalendar nicer -->
        <link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">

        <!--<script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

    </head>
    <body id="responsiveDemo">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <h2 class="h4">Calender</h2>
                    <p class="demoDesc">Beginilah hasilnya</p>
                    <div id="eventCalendarHumanDate"></div>
                    <script>
                        $(document).ready(function() {
                            $("#eventCalendarHumanDate").eventCalendar({
                                eventsjson: 'json/json.php',
                                jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
                            });
                        });
                    </script>
                </div>
            </div>
        </div>

        <hr/>
        <div class="col-lg-6">
            <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" id="jadwal" name="jadwal" action="index.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Tgl Acara</label>
                        <div class="col-sm-4">
                            <div class="input-group date form_date col-md-12" >
                                <input name="date" placeholder="tgl acara" type="text" class="form-control"  required/>                                
                                Format : DD/MM/YYYY
                            </div>                         

                        </div>
                        <div class="col-sm-4">
                            <div class="input-group date form_date col-md-12" >
                                <input name="time" placeholder="waktu"  type="text" class="form-control"  required/>                                
                                Format : JJ:MM:SS
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Judul <font color="red">*)</font></label>
                        <div class="col-sm-6">
                            <input name="title" type="text" class="form-control" placeholder="Judul" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Uraian Acara <font color="red">*)</font></label>
                        <div class="col-sm-8">
                            <textarea id="inggris" name="description" cols="80" rows="10" class="form-control" required placeholder="Uraian Acara"></textarea>                            
                        </div>
                    </div>

                    <div class="modal-footer clearfix">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Reset</button>
                        <button type="submit" name="addsubmit" class="btn btn-primary pull-left" onClick="return confirm('Jadwal  akan disimpan?');"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>   
    </body>    

    <script src="js/jquery.eventCalendar.js" type="text/javascript"></script>

</html>