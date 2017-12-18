<div style="padding: 30px">
    <h1>
        <@ $e -> getMessage(); @>
    </h1>
    <p>
        Line: <@ $e -> getLine(); @><br>
        File: <@ $e -> getFile(); @>
    </p>
    <pre>
        <@ var_dump($e -> getTrace());@>
    </pre>
</div>
