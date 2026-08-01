@extends('layouts.app')

@section('title', 'Roadmap')

@section('content')

<div class="bg-pink-100/70 backdrop-blur-sm col-span-1 md:col-span-12 flex-1">

    <div class="flex flex-col p-5 items-center text-pink-600">

        <article class="flex flex-col gap-5">
            <div class="w-full text-center">
                <h2 class="font-bold text-4xl text-pink-900">✰SoftWire Roadmap✰</h2>
                <span class="opacity-60">Last updated: July 2026</span>
            </div>
            <div class="w-full max-w-xl p-4 flex flex-col gap-3">
                <p>Welcome! Thanks for checking out the roadmap!</p>
                <p>SoftWire is a passion project that I work on in my free time. This page gives you a look at what I'm working on and plans I have for the
                    future. Plans may change!
                </p>
            </div>

            <div class="flex flex-col p-4 gap-5">

                <section>
                    <!--  currently working on-->
                    <h3 class="font-semibold text-3xl text-pink-800">Current goals</h3>

                    <ul class="list-disc">
                        <li>Posts</li>
                        <li>Friend system</li>
                        <li>Improving the UI</li>
                        <li>Fixing bugs</li>
                    </ul>
                </section>

                <section>
                    <!-- future plans -->
                    <h3 class="font-semibold text-3xl text-pink-800">Future plans</h3>

                    <ul class="list-disc">
                        <li>Other colour themes</li>
                        <li>More profile widgets</li>
                        <li>Custom stickers/emoticons</li>
                        <li>Private messaging</li>
                        <li>Markdown support</li>
                        <li>... And much more!</li>
                    </ul>


                </section>

                <section class="flex flex-col gap-3">
                    <!-- feedback appreciated -->
                    <h3 class="font-semibold text-3xl text-pink-800">Feedback welcome!</h3>

                    <p>Have an idea or found a bug?</p>
                    <p>I'd love to hear your feedback! Feel free to contact me by sending me an email or a dm through Discord!</p>

                    <ul class="list-disc">
                        <li>📧E-mail: margreendev@gmail.com</li>
                        <li>👾Discord user: marymastertje</li>
                    </ul>
                </section>

            </div>
        </article>


    </div>
</div>
@endsection