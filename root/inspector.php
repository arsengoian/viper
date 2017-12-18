<!DOCTYPE HTML>
<html>
<head>
    <title>App API developer console</title>
    <style>
        section {
            display: flex;
            flex-direction: row;
            width: 100%;
        }
        div {
            display: block;
            box-sizing: border-box;
            padding: 5%;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="submit"] {
            height: 2em;
            width: 10em;
        }
        pre {
            overflow: auto;
            padding: 3em;
        }
        textarea {
            width: 50%;
            resize: vertical;
        }
        input[type="checkbox"] {
            margin-top: 0.9em;
            margin-right: 0.9em;
        }
    </style>
</head>
<body>
<section>
    <div style="min-width: 365px !important;">
        <h1> REQUEST FIELDS: </h1>
        <h3>
            <select id="meth">
                <option name="get" value="GET">GET</option>
                <option name="post" value="POST">POST</option>
                <option name="put" value="PUT">PUT</option>
                <option name="patch" value="PATCH">PATCH</option>
                <option name="delete" value="DELETE">DELETE</option>
            </select>
            <input name="url" id="url"><br>
            <input type="checkbox" id="fd" checked>   Use FormData <br>
            <input type="checkbox" id="readbl" checked>   Readable <br>
        </h3>
        <p> Check boxes on left of inputs to ignore them </p>
        <br>
        <form id="f">
            <?php for ($i = 1; $i < 14; $i++):?>
                <section>
                    <input type="checkbox" name="c<?php echo $i?>">
                    <input name="k<?php echo $i?>">
                    <textarea name="v<?php echo $i?>"></textarea>
                </section>
            <?php endfor?>
            <section style="margin-top:1em; margin-bottom: 1em">
                <input type="checkbox" name="c<?php echo $i?>">
                <div style="margin: -0.85em"><span>IMG</span> <input type="file" name="img"></div>
            </section>
            <br/><br/>
            <input type="submit" value="TEST IT!" id="click">
        </form>
    </div>
    <div>
        <h1> API OUTPUT: </h1>
        <br/>
        <pre id="api_output">
				*** SEND REQUEST ***
			</pre>
    </div>
</section>
</body>
<script>

    var form = document.getElementById("f");
//
//      var ID = '3EF8C770D';
//      var TOKEN = '1bd8b1d1ee9dbddc489af28d0695faf9';
    var ID = '6B19AE82B';
    var TOKEN = '22ac8b752eab23325fd113fccfb44ecd';

    window.onkeydown = function(e) {
        if ((e.key == 'r' && e.ctrlKey) || (e.key == 'R' && e.ctrlKey))  {
            e.preventDefault();
            console.log('prevented');
            document.getElementById('click').click();
        }
    };

    form.onsubmit = function(eve) {

        eve.preventDefault();

        console.log('submitting...');

        var readable = document.getElementById("readbl").checked;
        var fd = document.getElementById("fd").checked;

        var method = document.getElementById("meth").value;
        var url = document.getElementById("url").value;


        var datarr = [];
        for (var i = 1; i < 13; i++) {
            var key = form.elements.namedItem("k" + i).value;
            var value = form.elements.namedItem("v" + i).value;
            var ign = form.elements.namedItem("c" + i).checked;
            if (key != "" && value != "" && !ign)
                datarr.push(new Array(key, value));
        }

        var data = new FormData();
        if (readable)
            data.append("prettyprint", "allowed");
        for (var i = datarr.length; i--;)
            data.append(datarr[i][0], datarr[i][1]);
        var f = form.elements.namedItem("img").files[0];
        if (f)
            data.append("img", f);


        var XHR = new XMLHttpRequest();
        XHR.onreadystatechange = function() {
            if (XHR.readyState == 4) {
                document.getElementById("api_output").innerHTML = XHR.responseText;
            }
        }
        XHR.withCredentials = true;
        XHR.open (method, url, true);
        if (!fd) {
            XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        }
        XHR.setRequestHeader('x-App-authorization', btoa(JSON.stringify([ID, TOKEN])));
        XHR.send(data);

    }

</script>
</html>
