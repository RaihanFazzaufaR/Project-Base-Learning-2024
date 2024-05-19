@props(['url'])
<tr>
<td class="header">
{{-- <a href="{{ $url }}" style="display: inline-block;"> --}}

@if (trim($slot) === 'SIRAWA')
<img src="https://imgur.com/OpuBKDZ.png" class="logo" alt="Sirawa Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
