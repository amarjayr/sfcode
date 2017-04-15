<?php

$id = end($pathFragments = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
if ($id == 'admin' && is_string(@$_GET['username']) && is_string(@$_GET['password'])) {
    if ($_GET['username'] == 'sfhacksAdmin' && $_GET['password'] == '8yGJ6VHB') {
        $teams = json_decode(file_get_contents('../data.json'), true);
        die(json_encode([
            'status' => 'success',
            'message' => 'All teams retrieved',
            'data' => $teams
        ]));
    } else {
        die(json_encode([
            'status' => 'failure',
            'message' => 'Incorrect admin username or password',
            'data' => []
        ]));
    }
} elseif (is_string(@$_POST['teamID']) && is_string(@$_POST['action'])) {
    $teams = json_decode(file_get_contents('../data.json'), true);
    if ($_POST['action'] == 'load') {
        $team = null;
        foreach ($teams as $t) {
            if ($t['id'] == $_POST['teamID'])
                $team = $t;
        }
        if ($team != null) {
            die(json_encode([
                'status' => 'success',
                'message' => "Team '{$_POST['teamID']}' retrieved",
                'data' => $team
            ]));
        } else {
            die(json_encode([
                'status' => 'failure',
                'message' => "Team '{$_POST['teamID']}' does not exist",
                'data' => []
            ]));
        }
    } else if ($_POST['action'] == 'update') {
        $validbuttons = [ 'ym1', 'nm1', 'ym2', 'nm2', 'ym3', 'nm3' ];
        if (is_string(@$_POST['button']) && in_array($_POST['button'], $validbuttons)) {
            $r = substr($_POST['button'], 0, 1);
            $m = substr($_POST['button'], 1);
            foreach ($teams as $t => $team) {
                if ($team['id'] == $_POST['teamID']) {
                    $teams[$t][$m . 'r'] = $r;
                }
            }
            if (file_put_contents('../data.json', json_encode($teams, JSON_PRETTY_PRINT))) {
                die(json_encode([
                    'status' => 'success',
                    'message' => "RSVP saved",
                    'data' => []
                ]));
            } else {
                die(json_encode([
                    'status' => 'failure',
                    'message' => "Failed to save",
                    'data' => []
                ]));
            }
        } else {
            die(json_encode([
                'status' => 'failure',
                'message' => "Invalid button",
                'data' => []
            ]));
        }
    } else {
        die(json_encode([
            'status' => 'failure',
            'message' => "Invalid action",
            'data' => []
        ]));
    }
    die(json_encode(['failure']));
} else {

?>
<!DOCTYPE html>
<html lang = 'en'>
    <head>
        <meta charset = 'utf-8'/>
        <title>sfcode RSVP</title>
        <meta name="author" content="sfhacks"/>
    	<meta name="copyright" content="Copyright (c) 2017 sfhacks"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    	<link rel="icon" type="image/png" href="images/favicon.png"/>
        <style type = 'text/css'>
            @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300italic,600italic,300,600");
            * {
                font-family: 'Source Sans Pro';
                margin: 2px;
                padding: 2px;
            }
            body {
                text-align: center;
                background-color: #f5f5f5;
            }
            h1 {
                padding: 20px;
            }
            #table table {
                margin: 0 auto;
                border: 1px solid #999;
                border-spacing: 0;
                border-collapse: collapse;
                min-width: 280px;
                max-width: 350px;
            }
            #table table td, th {
                padding: 11px;
                border: 1px solid #CCC;
            }
            #table tr.dark {
                background-color: #FAFAFA;
            }
            #table tr.darker {
                background-color: #F8F8F8;
            }
            #table td.num {
                min-width: 35px;
            }
            #table td.rb {
                width: 95px;
            }
            #table .button {
                margin-top: -18px;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type = 'text/javascript'>
            function refresh(id) {
                $.ajax({
                    method: 'POST',
                    data: {
                        teamID : id,
                        action: 'load'
                    },
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        update(data);
                    }
                });
            }
            function update(data) {
                var switchTemplate = "<div class = 'switch' style = 'position: relative; height: 38px; width: auto;'> <div style = 'position: absolute; left: 0; top: 0; bottom: 0; cursor: pointer; width: auto;'> <div style = 'width: 65px; border-radius:2px; background-color: #d4d4d4; border: 1px solid #cfcfcf; height: 60%; margin-top: 4px;'></div> <div class = 'switch-knob' style = 'width: 33px; height: 25.5px; border-radius: 2px; background-color: #fff; border: 1px solid #eaeaea; position: absolute; left: 4px; top: 1px; transition: left 0.1s ease;'> <div class = 'switch-text' style = 'font-weight: 600; padding-top: 2px; padding-left: 3px; color: #AA2222; text-transform: uppercase; font-size: 15.5px; opacity: 0.6;'> NO </div> </div> </div> </div><div class = 'switch-notif' style = 'opacity: 0.7;'></div>";
                if (data.status == 'success') {
                    $('#teamName').html(data.data.name);
                    $('#teamSchool').html(data.data.school);
                    $('#table table').html("<tr class = 'darker'><th>Member</th><th>Response</th></tr>");
                    var r1 = document.createElement('tr');
                    var r1m = document.createElement('td');
                    r1m.appendChild(document.createTextNode(data.data.m1n));
                    r1.appendChild(r1m);
                    var r1b = document.createElement('td');
                    r1b.className = 'rb';
                    r1b.innerHTML += '&nbsp;&nbsp;<div class = "button" id = "m1">' + switchTemplate + '</div>';
                    r1.appendChild(r1b);
                    if (data.data.m1r == 'y') $(r1b).find('.switch-knob').css('left', '28px').find('.switch-text').html('YES').css('color', '#33BB33');
                    $('#table table')[0].appendChild(r1);
                    if (data.data.m2n != null && data.data.m2n.trim() != '') {
                        var r2 = document.createElement('tr');
                        // r2.className = 'dark';
                        var r2m = document.createElement('td');
                        r2m.appendChild(document.createTextNode(data.data.m2n));
                        r2.appendChild(r2m);
                        var r2b = document.createElement('td');
                        r2b.className = 'rb';
                        r2b.innerHTML += '&nbsp;&nbsp;<div class = "button" id = "m2">' + switchTemplate + '</div>';
                        r2.appendChild(r2b);
                        if (data.data.m2r == 'y') $(r2b).find('.switch-knob').css('left', '28px').find('.switch-text').html('YES').css('color', '#33BB33');
                        $('#table table')[0].appendChild(r2);
                        if (data.data.m3n != null && data.data.m3n.trim() != '') {
                            var r3 = document.createElement('tr');
                            var r3m = document.createElement('td');
                            r3m.appendChild(document.createTextNode(data.data.m3n));
                            r3.appendChild(r3m);
                            var r3b = document.createElement('td');
                            r3b.className = 'rb';
                            r3b.innerHTML += '&nbsp;&nbsp;<div class = "button" id = "m3">' + switchTemplate + '</div>';
                            r3.appendChild(r3b);
                            if (data.data.m3r == 'y') $(r3b).find('.switch-knob').css('left', '28px').find('.switch-text').html('YES').css('color', '#33BB33');
                            $('#table table')[0].appendChild(r3);
                        }
                    }
                    $('#table .button').click(function () {
                        var $this = $(this);
                        var button = $this.attr('id');
                        if ($this.find('.switch-text')[0].innerHTML == 'YES') {
                            button = 'n' + button;
                        } else {
                            button = 'y' + button;
                        }
                        console.log(button);
                        var notify = function (m) {
                            $this.find('.switch-notif').html(m);
                        };
                        $.ajax({
                            method: 'POST',
                            data: {
                                teamID : data.data.id,
                                action: 'update',
                                button: button
                            },
                            dataType: 'json',
                            success: function (d) {
                                console.log(d);
                                if (d.status == 'success') {
                                    if ($this.find('.switch-text')[0].innerHTML == 'YES') {
                                        $this.find('.switch-knob').css('left', '4px').find('.switch-text').html('NO').css('color', '#882222');
                                    } else {
                                        $this.find('.switch-knob').css('left', '28px').find('.switch-text').html('YES').css('color', '#228822');
                                    }
                                    notify('<span style = "color: #228822;">Saved!</span>');
                                } else notify('<span style = "color: #882222;">Failed to Save</span>');
                            },
                            error: function () {
                                notify('<span style = "color: #882222;">Request Failed</span>');
                            }
                        });
                    });
                } else {
                    $('#teamName').html('?');
                    $('#teamSchool').html('?');
                    $('#table table').html("<tr class = 'darker'><th><span style = 'color: #BB3333'>" + data.message + "</span></th></tr>");
                }
            }
            $(document).ready(function () {
                var id = location.href.substr(location.href.lastIndexOf('/') + 1);
                console.log('URL ID: ' + id);
                refresh(id);
                var $card = $('#card');
                $(window).resize(function () {
                    if (window.innerWidth <= 700)
                        $card.css('margin-top', '30px').css('width', '85%');
                    else $card.css('margin-top', '50px').css('width', '50%');
                });
            });
        </script>
    </head>
    <body>
        <div id="card" style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); transition: all 0.3s cubic-bezier(.25,.8,.25,1); background-color: white; padding: 20px; padding-bottom: 50px; margin: auto; margin-top: 50px; width: 50%;">
            <img src="images/sfcode_logo_final.png"/>
            <br/>
            <!-- <h2 style = 'font-weight: normal;'>RSVP</h2> -->
            Team Name: <b id = 'teamName'>?</b><br/>
            Team School: <b id = 'teamSchool'>?</b><br/>
            <br/>
            <div id = 'table'>
                <table>
                    <tr class = 'darker'><th>Connecting</th></tr>
                    <noscript><tr><th><span style = 'color: #BB3333'>THIS SITE REQUIRES JAVASCRIPT</span></th></tr></noscript>
                </table>
            </div>
        </div>
    </body>
</html>
<?php } ?>
