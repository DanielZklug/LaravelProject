@props(['user', 'size' => 'w-12 h-12'])

@if($user->image)
    <img src="{{$user->imageUrl()}}" alt="{{$user->name}}" class="{{$size}} rounded-full">
@else
    <img src="https://wallpapers.com/images/hd/blank-default-pfp-wue0zko1dfxs9z2c.jpg" class="{{$size}} rounded-full">
@endif
