<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">

    <form action="{{ route('tweet.store') }}" method="POST">
        @csrf
        <textarea
            name="body"
            class="w-full p-4"
            placeholder="What's up doc?"
            required
        ></textarea>

        <hr class="my-4">

        <footer class="justify-between flex">
            <img
                src="{{ auth()->user()->avatar }}"
                alt=""
                class="rounded-full mr-2"
                >

                <button
                    class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
                >
                    Tweet-a-roo!
                </button>
        </footer>

        @error('body')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror

    </form>
</div>
