<p> Enhanced version </p>
<a href="/add">Add more</a>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Img</th>
    </tr>
    @foreach($clients as $client):
        <tr>
            <td>@client['fname'] @client['lname']</td>
            <td>@client['email']</td>
            <td>@client['age']</td>
            @if(isset($client['img'])):
                <td><img src="@client['img']" style="width: 30px; height: 30px"></td>
            @endif
        </tr>
    @endforeach
</table>
