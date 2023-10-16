
@forelse ($dataKey as $countryName)
        {{ $countryName }}
@empty
    <p>No users</p>
@endforelse
@if ($loginStatusKey== true)
<h1>you are loged in </h1>
@elseif ($loginStatusKey==false)
<h1>you are not loged in </h1>
@else
<p>try again</p>
@endif
