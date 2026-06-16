<marquee behavior="scroll" direction="left" class="bg-pink-500/50 text-white border-y-3 border-pink-400 w-full">

    <span class="mx-8">
        𐙚 ‧₊˚ ⋅ WELCOME TO SOFTWIRE!! ⋅˚₊‧ 𐙚
    </span>

@if ($newestUser)
    <span class="mx-8">
        our newest member:
        <a href="{{ route('profile.show', $newestUser) }}">{{ $newestUser->name }}</a>
        , say hiii!!!! (ﾉ◕ヮ◕)ﾉ*:･ﾟ✧
    </span>
    @endif
</marquee>