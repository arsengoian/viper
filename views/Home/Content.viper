<p> @lang('randomStr'); </p>
<a href="@url('add');"> @lang('addMore'); </a>
<table>
    <tr>
        <th> @lang('name'); </th>
        <th> @lang('email'); </th>
        <th> @lang('age'); </th>
        <th> @lang('img'); </th>
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
